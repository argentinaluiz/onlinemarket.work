<?php
/**
 * Created by PhpStorm.
 * User: gabriel.almeida
 * Date: 18/08/2015
 * Time: 12:07
 */

namespace Market\Controller;



use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class indexController extends  AbstractActionController
{
    public function indexAction(){
        return new ViewModel();
    }

    public function fooAction(){
        return new ViewModel();
    }
}