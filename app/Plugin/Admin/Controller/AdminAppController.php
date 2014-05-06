<?php

App::uses('AppController', 'Controller');

class AdminAppController extends Controller {

	public $components = array(
        'Session',
   		'JqueryFileUpload.Upload',
        'Auth' => array(
   			'loginAction' => array('plugin' => 'admin', 'controller' => 'users', 'action' => 'login'),
            'loginRedirect' => array('controller' => '/admin', 'action' => 'index'),
            'logoutRedirect' => array('controller' => '/pages', 'action' => 'home')
	),
	'RequestHandler'
	);

	public $helpers = array('JqueryFileUpload.UploadScript', 'JqueryFileUpload.UploadTemplate','Locale.Locale');

	public function beforeFilter(){
		$this->layout = 'bootstrap';
		$this->set('userLogado', $this->Auth->user());

		// $this->Auth->allow('index', 'view');
	}

	public function deleteFile($file) {
		$this->autoRender = false;
		if ($this->request->is('delete')) {
			$_GET['file'] = $file;
			$this->Upload->deleteFile(array('image_versions' => array('' => array(), 'medium' => array(), 'thumbnail' => array())));
			$this->ProdutosFoto->deleteFoto($file);
		}
	}

	public function upload($idProduto = null) {
		$this->autoRender = false;
		
			
		$this->Upload->uploadFile(array(
                'image_versions' => array(
                    '' => array(
                        'max_width' => 500,
                        'max_height' => 375,
                        'jpeg_quality' => 95
		),
                    'medium' => array(
                        'max_width' => 160,
                        'max_height' => 160,
                        'jpeg_quality' => 80
		),
                    'thumbnail' => array(
                        'max_width' => 100,
                        'max_height' => 100
		)
		)
		));
		$this->ProdutosFoto->preparaSave($_FILES, $idProduto);	
	}

}
