<?php
App::uses('AppController', 'Controller');
/**
 * ProdutosFotos Controller
 *
 * @property ProdutosFoto $ProdutosFoto
 * @property PaginatorComponent $Paginator
 */
class ProdutosFotosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProdutosFoto->recursive = 0;
		$this->set('produtosFotos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProdutosFoto->exists($id)) {
			throw new NotFoundException(__('Invalid produtos foto'));
		}
		$options = array('conditions' => array('ProdutosFoto.' . $this->ProdutosFoto->primaryKey => $id));
		$this->set('produtosFoto', $this->ProdutosFoto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProdutosFoto->create();
			if ($this->ProdutosFoto->save($this->request->data)) {
				$this->Session->setFlash(__('The produtos foto has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produtos foto could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$produtos = $this->ProdutosFoto->Produto->find('list');
		$estabelecimentos = $this->ProdutosFoto->Estabelecimento->find('list');
		$this->set(compact('produtos', 'estabelecimentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProdutosFoto->exists($id)) {
			throw new NotFoundException(__('Invalid produtos foto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProdutosFoto->save($this->request->data)) {
				$this->Session->setFlash(__('The produtos foto has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produtos foto could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProdutosFoto.' . $this->ProdutosFoto->primaryKey => $id));
			$this->request->data = $this->ProdutosFoto->find('first', $options);
		}
		$produtos = $this->ProdutosFoto->Produto->find('list');
		$estabelecimentos = $this->ProdutosFoto->Estabelecimento->find('list');
		$this->set(compact('produtos', 'estabelecimentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProdutosFoto->id = $id;
		if (!$this->ProdutosFoto->exists()) {
			throw new NotFoundException(__('Invalid produtos foto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProdutosFoto->delete()) {
			$this->Session->setFlash(__('The produtos foto has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The produtos foto could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}