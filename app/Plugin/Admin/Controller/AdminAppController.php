<?php

App::uses('AppController', 'Controller');

class AdminAppController extends Controller {
	
public $helpers = array('Locale.Locale');
    
   public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'cidades', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
        )
    );

    public function beforeFilter(){
        $this->layout = 'bootstrap';
       $this->set('userLogado', $this->Auth->user());
        
       // $this->Auth->allow('index', 'view');
    }
}
