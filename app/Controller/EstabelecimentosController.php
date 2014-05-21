<?php
App::uses('AppController', 'Controller');
/**
 * Estabelecimentos Controller
 *
 * @property Estabelecimento $Estabelecimento
 * @property PaginatorComponent $Paginator
 */
class EstabelecimentosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $uses = array('Estabelecimento', 'User');
	
	
/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		
		$id = $this->request->data['country_id'];
		
		$this->Estabelecimento->recursive = 0;
			$options = array('conditions' => array('Estabelecimento.cidade_id' => $id));
			$this->Paginator->settings = $options;
			$this->set('estabelecimentos', $this->Paginator->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Estabelecimento->exists($id)) {
			throw new NotFoundException(__('Invalid estabelecimento'));
		}
		$options = array('conditions' => array('Estabelecimento.' . $this->Estabelecimento->primaryKey => $id));
		$this->set('estabelecimento', $this->Estabelecimento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estabelecimento->create();

			if ($this->Estabelecimento->save($this->request->data)) {
				$this->User->create();
				
				$usuario = array();
				$usuario['User']['username'] = $this->request->data['Estabelecimento']['email'];
				$usuario['User']['password'] = $this->request->data['Estabelecimento']['senha'];
				$usuario['User']['estabelecimento_id'] = $this->Estabelecimento->getInsertID();
				
				$this->User->save($usuario);
				
				$this->Session->setFlash(__('Estabelecimento cadastrado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O estabelecimento não pôde ser cadastrado. Por favor, tente novamente.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cidades = $this->Estabelecimento->Cidade->find('list');
		$this->set(compact('cidades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Estabelecimento->exists($id)) {
			throw new NotFoundException(__('Invalid estabelecimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Estabelecimento->save($this->request->data)) {
				$this->Session->setFlash(__('Estabelecimento alterado.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O estabelecimento não pôde ser alterado. Por favor, tente novamente.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Estabelecimento.' . $this->Estabelecimento->primaryKey => $id));
			$this->request->data = $this->Estabelecimento->find('first', $options);
		}
		$cidades = $this->Estabelecimento->Cidade->find('list');
		$this->set(compact('cidades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Estabelecimento->id = $id;
		if (!$this->Estabelecimento->exists()) {
			throw new NotFoundException(__('Invalid estabelecimento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Estabelecimento->delete()) {
			$this->Session->setFlash(__('Estabeleciemtno excluído.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('O estabelecimento não pôde ser excluído, Por favor, tente novamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
