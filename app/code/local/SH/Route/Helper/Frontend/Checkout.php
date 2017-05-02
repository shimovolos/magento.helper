<?php

/**
 * Class SH_Route_Helper_Frontend_Checkout
 */
class SH_Route_Helper_Frontend_Checkout extends SH_Route_Helper_Abstract
{
    /**
     * @return bool
     */
    public function isCart()
    {
        return $this->isRoutePage('checkout', 'cart');
    }

    /**
     * @return bool
     */
    public function isCartEditItem()
    {
        return $this->isRoutePage('checkout', 'cart', 'configure');
    }

    /**
     * @return bool
     */
    public function isCheckout()
    {
        return $this->isRoutePage('checkout', 'onepage');
    }

    /**
     * @return bool
     */
    public function isCheckoutSuccess()
    {
        return $this->isRoutePage('checkout', 'onepage', 'success');
    }

    /**
     * @return bool
     */
    public function isCheckoutMultipleAddresses()
    {
        return $this->isRoutePage('checkout', 'multishipping', 'addresses');
    }

    /**
     * @return bool
     */
    public function isCheckoutMultipleShipping()
    {
        return $this->isRoutePage('checkout', 'multishipping', 'shipping');
    }

    /**
     * @return bool
     */
    public function isCheckoutMultipleShippingNew()
    {
        return $this->isRoutePage('checkout', 'multishipping_address', 'newShipping');
    }

    /**
     * @return bool
     */
    public function isCheckoutMultipleShippingEdit()
    {
        return $this->isRoutePage('checkout', 'multishipping_address', 'editShipping');
    }

    /**
     * @return bool
     */
    public function isCheckoutMultipleBilling()
    {
        return $this->isRoutePage('checkout', 'multishipping', 'billing');
    }

    /**
     * @return bool
     */
    public function isCheckoutMultipleBillingSelect()
    {
        return $this->isRoutePage('checkout', 'multishipping_address', 'selectBilling');
    }

    /**
     * @return bool
     */
    public function isCheckoutMultipleBillingEdit()
    {
        return $this->isRoutePage('checkout', 'multishipping_address', 'editAddress');
    }

    /**
     * @return bool
     */
    public function isCheckoutMultipleReview()
    {
        return $this->isRoutePage('checkout', 'multishipping', 'overview');
    }

    /**
     * @return bool
     */
    public function isCheckoutMultipleSuccess()
    {
        return $this->isRoutePage('checkout', 'multishipping', 'success');
    }
}