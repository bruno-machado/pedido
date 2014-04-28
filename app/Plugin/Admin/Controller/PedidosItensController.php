<?php
App::uses('AppController', 'Controller');
/**
 * PedidosItens Controller
 *
 * @property PedidosIten $PedidosIten
 * @property PaginatorComponent $Paginator
 */
class PedidosItensController extends AdminAppController {

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
		$this->PedidosIten->recursive = 0;
		$this->set('pedidosItens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PedidosIten->exists($id)) {
			throw new NotFoundException(__('Invalid pedidos iten'));
		}
		$options = array('conditions' => array('PedidosIten.' . $this->PedidosIten->primaryKey => $id));
		$this->set('pedidosIten', $this->PedidosIten->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PedidosIten->create();
			if ($this->PedidosIten->save($this->request->data)) {
				$this->Session->setFlash(__('The pedidos iten has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pedidos iten could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$estabelecimentos = $this->PedidosIten->Estabelecimento->find('list');
		$produtos = $this->PedidosIten->Produto->find('list');
		$this->set(compact('estabelecimentos', 'produtos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PedidosIten->exists($id)) {
			throw new NotFoundException(__('Invalid pedidos iten'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PedidosIten->save($this->request->data)) {
				$this->Session->setFlash(__('The pedidos iten has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pedidos iten could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('PedidosIten.' . $this->PedidosIten->primaryKey => $id));
			$this->request->data = $this->PedidosIten->find('first', $options);
		}
		$estabelecimentos = $this->PedidosIten->Estabelecimento->find('list');
		$produtos = $this->PedidosIten->Produto->find('list');
		$this->set(compact('estabelecimentos', 'produtos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PedidosIten->id = $id;
		if (!$this->PedidosIten->exists()) {
			throw new NotFoundException(__('Invalid pedidos iten'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PedidosIten->delete()) {
			$this->Session->setFlash(__('The pedidos iten has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The pedidos iten could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
