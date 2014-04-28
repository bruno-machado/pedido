<?php
App::uses('AppController', 'Controller');
/**
 * ProdutosValores Controller
 *
 * @property ProdutosValore $ProdutosValore
 * @property PaginatorComponent $Paginator
 */
class ProdutosValoresController extends AdminAppController {

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
		$this->ProdutosValore->recursive = 0;
		$this->set('produtosValores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProdutosValore->exists($id)) {
			throw new NotFoundException(__('Invalid produtos valore'));
		}
		$options = array('conditions' => array('ProdutosValore.' . $this->ProdutosValore->primaryKey => $id));
		$this->set('produtosValore', $this->ProdutosValore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProdutosValore->create();
			if ($this->ProdutosValore->save($this->request->data)) {
				$this->Session->setFlash(__('The produtos valore has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produtos valore could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$produtos = $this->ProdutosValore->Produto->find('list');
		$tamanhos = $this->ProdutosValore->Tamanho->find('list');
		$estabelecimentos = $this->ProdutosValore->Estabelecimento->find('list');
		$this->set(compact('produtos', 'tamanhos', 'estabelecimentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProdutosValore->exists($id)) {
			throw new NotFoundException(__('Invalid produtos valore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProdutosValore->save($this->request->data)) {
				$this->Session->setFlash(__('The produtos valore has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produtos valore could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ProdutosValore.' . $this->ProdutosValore->primaryKey => $id));
			$this->request->data = $this->ProdutosValore->find('first', $options);
		}
		$produtos = $this->ProdutosValore->Produto->find('list');
		$tamanhos = $this->ProdutosValore->Tamanho->find('list');
		$estabelecimentos = $this->ProdutosValore->Estabelecimento->find('list');
		$this->set(compact('produtos', 'tamanhos', 'estabelecimentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProdutosValore->id = $id;
		if (!$this->ProdutosValore->exists()) {
			throw new NotFoundException(__('Invalid produtos valore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProdutosValore->delete()) {
			$this->Session->setFlash(__('The produtos valore has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The produtos valore could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
