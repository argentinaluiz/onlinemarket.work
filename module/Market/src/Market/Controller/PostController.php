<?php
/**
 * Created by PhpStorm.
 * User: GABRIEL
 * Date: 18/08/2015
 * Time: 22:19
 */

namespace Market\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostController extends AbstractActionController
{
    public $categories;

    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    public function indexAction()
    {
        return new ViewModel(array('categories'=>$this->categories));
    }
}