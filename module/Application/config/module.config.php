<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'login' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/Login',
                    'defaults' => [
                        'controller' => Controller\UserController::class,
                        'action'     => 'login',
                    ],
                ],
            ],	
            'contact' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/Contact',
                    'defaults' => [
                        'controller' => Controller\ContactController::class,
                        'action'     => 'contact',
                    ],
                ],
            ],	
            'blogList' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/bloglist',
                    'defaults' => [
                        'controller' => Controller\BlogController::class,
                        'action'     => 'blogList',
                    ],
                ],
            ],
			'checkout' => [    
                'type' => Literal::class,
                'options' => [
                    'route'    => '/checkout',  
                    'defaults' => [
                        'controller' => Controller\CheckoutController::class, 
                        'action'     => 'checkout', 
                    ],
                ],
            ],
			'viewcart' => [   // viewcart will pick URL from link (in page headercontent.phtml) like-  $this->url('checkout'); 
                'type' => Literal::class,
                'options' => [
                    'route'    => '/viewcart',  // viewcart is the folder name where viewcart.php file is kept
                    'defaults' => [
                        'controller' => Controller\ViewcartController::class, // ViewcartController class name what we created in viewcartController.php (ViewcartController case sensitive)
                        'action'     => 'viewcart',  // viewcart comes from viewController.php where public function viewcartAction()
                    ],
                ],
            ],
			
			'aboutus' => [    
                'type' => Literal::class,
                'options' => [
                    'route'    => '/aboutus',  
                    'defaults' => [
                        'controller' => Controller\AboutusController::class, 
                        'action'     => 'aboutus', 
                    ],
                ],
            ],
			
			'details' => [   // viewcart will pick URL from link (in page headercontent.phtml) like-  $this->url('viewcart'); 
                'type' => Literal::class,
                'options' => [
                    'route'    => '/details',  // viewcart is the folder name where viewcart.php file is kept
                    'defaults' => [
                        'controller' => Controller\DetailsController::class, // ViewcartController class name what we created in viewcartController.php (ViewcartController case sensitive)
                        'action'     => 'details',  // viewcart comes from viewController.php where public function viewcartAction()
                    ],
                ],
            ],
		    
			'wishlist' => [    
                'type' => Literal::class,
                'options' => [
                    'route'    => '/wishlist',  
                    'defaults' => [
                        'controller' => Controller\WishlistController::class, 
                        'action'     => 'wishlist', 
                    ],
                ],
            ],
			
			
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
			Controller\UserController::class => InvokableFactory::class,
			Controller\ContactController::class => InvokableFactory::class,
			Controller\BlogController::class => InvokableFactory::class,
			Controller\CheckoutController::class => InvokableFactory::class, 
		   Controller\ViewcartController::class => InvokableFactory::class, // ViewcartController class name what we created in viewcartController.php (ViewcartController case sensitive)
           Controller\AboutusController::class => InvokableFactory::class,
           Controller\DetailsController::class => InvokableFactory::class,
           Controller\WishlistController::class => InvokableFactory::class,		   
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
/*         'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ], */
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
