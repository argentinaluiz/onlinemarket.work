<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(

    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'market-index-controller',
                        'action'     => 'index',
                    )
                )
            ),
            'market' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/market',
                    'defaults' => array(
                        'controller' => 'market-index-controller',
                        'action'     => 'index',
                    )
                )
            ),
            'market-post' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/market/post',
                    'defaults' => array(
                        'controller' => 'market-post-controller',
                        'action'     => 'index',
                    )
                ),
            ),
            'market-view' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/market/view',
                    'defaults' => array(
                        'controller' => 'market-view-controller',
                        'action'     => 'index',
                    )
                ),

                'may_terminate' => true,
                'child_routes' => array(
                    'index' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/main[/:category]',
                            'defaults' => array(
                                'action'     => 'index'
                            ),
                        ),
                    ),
                    'item' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/item[/:itemId]',
                            'defaults' => array(
                                'action'     => 'item'
                            ),
                            'constraints'=> array(
                                'itemId'=>'[0-9]*'
                            )
                        ),
                    ),
                ),
            ),
        ),
    ),



    'controllers' => array(
        'invokables' => array(
            'market-index-controller' => 'Market\Controller\IndexController',
            'market-view-controller' => 'Market\Controller\ViewController'
        ),
        'factories'=>array(
            'market-post-controller' => 'Market\Factory\PostControllerFactory'
        ),
        'aliases'=>array(
            'alt'=>'market-view-controller'
        )
    ),


    'view_manager' => array(

        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

);
