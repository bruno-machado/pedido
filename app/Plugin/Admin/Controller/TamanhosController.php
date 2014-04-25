<?php
App::uses('AppController', 'Controller');
/**
 * Tamanhos Controller
 *
 * @property Tamanho $Tamanho
 * @property PaginatorComponent $Paginator
 */
class TamanhosController extends AppController {

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
		$this->Tamanho->recursive = 0;
		$this->set('tamanhos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tamanho->exists($id)) {
			throw new NotFoundException(__('Invalid tamanho'));
		}
		$options = array('conditions' => array('Tamanho.' . $this->Tamanho->primaryKey => $id));
		$this->set('tamanho', $this->Tamanho->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tamanho->create();
			if ($this->Tamanho->save($this->request->data)) {
				$this->Session->setFlash(__('The tamanho has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tamanho could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$estabelecimentos = $this->Tamanho->Estabelecimento->find('list');
		$this->set(compact('estabelecimentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tamanho->exists($id)) {
			throw new NotFoundException(__('Invalid tamanho'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tamanho->save($this->request->data)) {
				$this->Session->setFlash(__('The tamanho has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tamanho could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Tamanho.' . $this->Tamanho->primaryKey => $id));
			$this->request->data = $this->Tamanho->find('first', $options);
		}
		$estabelecimentos = $this->Tamanho->Estabelecimento->find('list');
		$this->set(compact('estabelecimentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tamanho->id = $id;
		if (!$this->Tamanho->exists()) {
			throw new NotFoundException(__('Invalid tamanho'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tamanho->delete()) {
			$this->Session->setFlash(__('The tamanho has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The tamanho could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
