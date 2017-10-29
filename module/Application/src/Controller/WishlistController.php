<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class WishlistController extends AbstractActionController  // ViewcartController(case sensitive)
{
    public function wishlistAction()//viewcart word added to Action().which is used in module.config.php 
    {
        return new ViewModel();
    }
}
