<?php

App::uses('AppController', 'Controller');

class AdminAppController extends Controller {
	
public $helpers = array('Locale.Locale');
    
   public $components = array(
        'Session',
        'Auth' => array(
   			'loginAction' => array('plugin' => 'admin', 'controller' => 'users', 'action' => 'login'),
            'loginRedirect' => array('controller' => '/admin', 'action' => 'index'),
            'logoutRedirect' => array('controller' => '/pages', 'action' => 'home')
        )
    );

    public function beforeFilter(){
       $this->layout = 'bootstrap';
       $this->set('userLogado', $this->Auth->user());
        
       // $this->Auth->allow('index', 'view');
    }
}
