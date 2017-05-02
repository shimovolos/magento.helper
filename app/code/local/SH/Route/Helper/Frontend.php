<?php

/**
 * Class SH_Route_Helper_Frontend
 */
class SH_Route_Helper_Frontend extends SH_Route_Helper_Abstract
{
    /**
     * Check if current page is Home Page
     */
    public function isHome()
    {
        if ($this->_route() === 'cms' && (strpos('home', $this->_cmsIdentifier()) !== false || $this->_cmsIdentifier() === 'home')) {
            $this->flag = true;
        }

        return $this->flag;
    }

    /**
     * @param string $identifier
     *
     * @return bool
     */
    public function isCmsPage(string $identifier)
    {
        $this->flag = $this->_cmsIdentifier() === $identifier;

        return $this->flag;
    }

    /**
     * @return bool
     */
    public function isSearch()
    {
        return $this->isRoutePage('catalogsearch', 'result');
    }

    /**
     * @return Mage_Catalog_Model_Category|mixed
     */
    public function isCategory()
    {
        return Mage::registry('current_category');
    }

    /**
     * @return Mage_Catalog_Model_Category|mixed
     */
    public function isProduct()
    {
        return Mage::registry('current_product');
    }

    /**
     * @return bool
     */
    public function isCompareProducts()
    {
        return $this->isRoutePage('catalog', 'product_compare');
    }

    /**
     * @return bool
     */
    public function isReviewList()
    {
        return $this->isRoutePage('review', 'product', 'list');
    }

    /**
     * @return bool
     */
    public function isReviewView()
    {
        return $this->isRoutePage('review', 'product', 'view');
    }
}