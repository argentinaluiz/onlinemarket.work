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
        $messages = array();
        if($this->flashmessenger()->hasMessages())
        {
           $messages = $this->flashmessenger()->getMessages();
        }
        return new ViewModel(array('messages'=>$messages));
    }

    public function fooAction(){
        return new ViewModel();
    }
}