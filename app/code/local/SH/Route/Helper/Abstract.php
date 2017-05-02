<?php

/**
 * Class SH_Route_Helper_Abstract
 */
class SH_Route_Helper_Abstract extends Mage_Core_Helper_Abstract
{
    /**
     * @var bool
     */
    public $flag = false;

    /**
     * SH_Route_Helper_Frontend constructor
     */
    public function __construct()
    {
        unset($flag);
    }

    /**
     * @param string $module
     * @param string $controller
     * @param string $action
     *
     * @return bool
     */
    public function isRoutePage(string $module, string $controller, string $action = 'index')
    {
        $this->flag = $this->_module() == $module && $this->_controller() == $controller && $this->_action() == $action;

        return $this->flag;
    }

    /**
     * @return string
     */
    protected function _cmsIdentifier()
    {
        return Mage::getSingleton('cms/page')->getIdentifier();
    }

    /**
     * @return mixed
     */
    protected function _route()
    {
        return $this->_getRequest()->getRouteName();
    }

    /**
     * @return mixed
     */
    protected function _action()
    {
        return $this->_getRequest()->getActionName();
    }

    /**
     * @return mixed
     */
    protected function _controller()
    {
        return $this->_getRequest()->getControllerName();
    }

    /**
     * @return mixed
     */
    protected function _module()
    {
        return $this->_getRequest()->getModuleName();
    }
}