<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function _initAutoloader()
    {
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->setFallbackAutoloader(true);
    }

    public function _initLayout()
    {
        Zend_Layout::startMvc(array(
            'layout'     => 'index',
            'layoutPath' => APPLICATION_PATH . '/layouts/scripts/',
            'contentKey' => 'content',
        ));
    }
}

