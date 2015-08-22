<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 18/08/2015
 * Time: 21:27
 */

namespace Market;


class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' =>array(
             __DIR__.'/autoload_classmap.php'
            ),

            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}