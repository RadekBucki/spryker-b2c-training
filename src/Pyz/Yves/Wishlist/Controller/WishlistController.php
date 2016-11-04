<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\Wishlist\Controller;

use Generated\Shared\Transfer\WishlistItemUpdateRequestTransfer;
use Generated\Shared\Transfer\WishlistOverviewRequestTransfer;
use Generated\Shared\Transfer\WishlistOverviewResponseTransfer;
use Generated\Shared\Transfer\WishlistPaginationTransfer;
use Generated\Shared\Transfer\WishlistTransfer;
use Orm\Zed\Wishlist\Persistence\Map\SpyWishlistItemTableMap;
use Pyz\Yves\Wishlist\Plugin\Provider\WishlistControllerProvider;
use Spryker\Yves\Application\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Spryker\Client\Wishlist\WishlistClientInterface getClient()
 * @method \Pyz\Yves\Wishlist\WishlistFactory getFactory()
 */
class WishlistController extends AbstractController
{

    const DEFAULT_NAME = 'default';
    const DEFAULT_ITEMS_PER_PAGE = 10;
    const DEFAULT_ORDER_DIRECTION = 'DESC';

    const PARAM_ITEMS_PER_PAGE = 'ipp';
    const PARAM_PAGE = 'page';
    const PARAM_ORDER_BY = 'order-by';
    const PARAM_ORDER_DIRECTION = 'order-dir';
    const PARAM_PRODUCT_ID = 'product-id';
    const PARAM_WISHLIST_ID = 'wishlist-id';

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array
     */
    public function indexAction(Request $request)
    {
        $pageNumber = $request->query->getInt(self::PARAM_PAGE) * 1;
        $itemsPerPage = $request->query->getInt(self::PARAM_ITEMS_PER_PAGE, self::DEFAULT_ITEMS_PER_PAGE);
        $orderBy = $request->query->get(self::PARAM_ORDER_BY, SpyWishlistItemTableMap::COL_CREATED_AT);
        $orderDirection = $request->query->getAlnum(self::PARAM_ORDER_DIRECTION, self::DEFAULT_ORDER_DIRECTION);

        $paginationTransfer = (new WishlistPaginationTransfer())
            ->setPage($pageNumber)
            ->setPagesTotal(1)
            ->setItemsPerPage($itemsPerPage);

        $wishlistTransfer = (new WishlistTransfer())
            ->setName(self::DEFAULT_NAME);

        $wishlistOverviewResponse = (new WishlistOverviewResponseTransfer())
            ->setWishlist($wishlistTransfer)
            ->setPagination($paginationTransfer);

        $wishlistOverviewRequest = (new WishlistOverviewRequestTransfer())
            ->setWishlist($wishlistTransfer)
            ->setPage($pageNumber)
            ->setItemsPerPage($itemsPerPage)
            ->setOrderBy($orderBy)
            ->setOrderDirection($orderDirection);

        $customerClient = $this->getFactory()->createCustomerClient();
        $customerTransfer = $customerClient->getCustomer();

        if ($customerTransfer && $customerTransfer->getIdCustomer()) {
            $wishlistTransfer->setFkCustomer($customerTransfer->getIdCustomer());
            $wishlistOverviewResponse = $this->getClient()->getWishlistOverview($wishlistOverviewRequest);
        }

        return [
            'wishlistOverview' => $wishlistOverviewResponse,
            'currentPage' => $wishlistOverviewResponse->getPagination()->getPage(),
            'totalPages' => $wishlistOverviewResponse->getPagination()->getPagesTotal()
        ];
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function addItemAction(Request $request)
    {
        $wishlistItemUpdateRequestTransfer = $this->getWishlistItemUpdateRequestTransferFromRequest($request);

        $this->getClient()->addItem($wishlistItemUpdateRequestTransfer);

        return $this->redirectResponseInternal(WishlistControllerProvider::ROUTE_WISHLIST_OVERVIEW);
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removeItemAction(Request $request)
    {
        $wishlistItemUpdateRequestTransfer = $this->getWishlistItemUpdateRequestTransferFromRequest($request);
        $this->getClient()->removeItem($wishlistItemUpdateRequestTransfer);

        return $this->redirectResponseInternal(WishlistControllerProvider::ROUTE_WISHLIST_OVERVIEW);
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Generated\Shared\Transfer\WishlistItemUpdateRequestTransfer
     */
    protected function getWishlistItemUpdateRequestTransferFromRequest(Request $request)
    {
        $customerClient = $this->getFactory()->createCustomerClient();
        $customerTransfer = $customerClient->getCustomer();

        return (new WishlistItemUpdateRequestTransfer())
            ->setFkProduct($request->query->getInt(self::PARAM_PRODUCT_ID))
            ->setFkCustomer($customerTransfer->getIdCustomer())
            ->setWishlistName(self::DEFAULT_NAME);
    }

}
