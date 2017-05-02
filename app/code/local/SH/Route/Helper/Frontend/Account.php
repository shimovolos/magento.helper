<?php

/**
 * Class SH_Route_Helper_Frontend_Account
 */
class SH_Route_Helper_Frontend_Account extends SH_Route_Helper_Abstract
{
    /**
     * @return bool
     */
    public function isLogin()
    {
        return $this->isRoutePage('customer', 'account', 'login');
    }

    /**
     * @return bool
     */
    public function isLogout()
    {
        return $this->isRoutePage('customer', 'account', 'logoutSuccess');
    }

    /**
     * @return bool
     */
    public function isCreateAccount()
    {
        return $this->isRoutePage('customer', 'account', 'create');
    }

    /**
     * @return bool
     */
    public function isMyAccount()
    {
        return $this->isRoutePage('customer', 'account');
    }

    /**
     * @return bool
     */
    public function isMyAccountEdit()
    {
        return $this->isRoutePage('customer', 'account', 'edit');
    }

    /**
     * @return bool
     */
    public function isMyAddress()
    {
        return $this->isRoutePage('customer', 'address');
    }

    /**
     * @return bool
     */
    public function isMyAddressNew()
    {
        return $this->isRoutePage('customer', 'address', 'new');
    }

    /**
     * @return bool
     */
    public function isMyAddressEdit()
    {
        return $this->isRoutePage('customer', 'address', 'form');
    }

    /**
     * @return bool
     */
    public function isMyOrders()
    {
        return $this->isRoutePage('sales', 'order', 'history');
    }

    /**
     * @return bool
     */
    public function isMyOrderView()
    {
        return $this->isRoutePage('sales', 'order', 'view');
    }

    /**
     * @return bool
     */
    public function isMyOrderPrint()
    {
        return $this->isRoutePage('sales', 'order', 'print');
    }

    /**
     * @return bool
     */
    public function isMyInvoiceView()
    {
        return $this->isRoutePage('sales', 'order', 'invoice');
    }

    /**
     * @return bool
     */
    public function isMyInvoicePrint()
    {
        return $this->isRoutePage('sales', 'order', 'printInvoice');
    }

    /**
     * @return bool
     */
    public function isMyShipmentView()
    {
        return $this->isRoutePage('sales', 'order', 'shipment');
    }

    /**
     * @return bool
     */
    public function isMyShipmentPrint()
    {
        return $this->isRoutePage('sales', 'order', 'printShipment');
    }

    /**
     * @return bool
     */
    public function isMyCreditMemoView()
    {
        return $this->isRoutePage('sales', 'order', 'creditmemo');
    }

    /**
     * @return bool
     */
    public function isMyCreditMemoPrint()
    {
        return $this->isRoutePage('sales', 'order', 'printCreditmemo');
    }

    /**
     * @return bool
     */
    public function isMyBillingAgreement()
    {
        return $this->isRoutePage('sales', 'billing_agreement');
    }

    /**
     * @return bool
     */
    public function isMyRecurringProfile()
    {
        return $this->isRoutePage('sales', 'recurring_profile');
    }

    /**
     * @return bool
     */
    public function isMyReview()
    {
        return $this->isRoutePage('review', 'customer');
    }

    /**
     * @return bool
     */
    public function isMyReviewView()
    {
        return $this->isRoutePage('review', 'customer', 'view');
    }

    /**
     * @return bool
     */
    public function isMyTags()
    {
        return $this->isRoutePage('tag', 'customer');
    }

    /**
     * @return bool
     */
    public function isMyWishlist()
    {
        return $this->isRoutePage('wishlist', 'index');
    }

    /**
     * @return bool
     */
    public function isMyWishlistEdit()
    {
        return $this->isRoutePage('wishlist', 'index', 'configure');
    }

    /**
     * @return bool
     */
    public function isMyApplications()
    {
        return $this->isRoutePage('oauth', 'customer_token');
    }

    /**
     * @return bool
     */
    public function isMyNewsletterSubscription()
    {
        return $this->isRoutePage('newsletter', 'manage');
    }

    /**
     * @return bool
     */
    public function isMyDownloadableProducts()
    {
        return $this->isRoutePage('downloadable', 'customer', 'products');
    }
}