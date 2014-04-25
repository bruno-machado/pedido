<?php
App::uses('AppController', 'Controller');
/**
 * Categorias Controller
 *
 * @property Categoria $Categoria
 * @property PaginatorComponent $Paginator
 */
class CategoriasController extends AppController {

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
		$this->Categoria->recursive = 0;
		$userLogado = $this->Auth->user();
			$options = array('conditions' => array('Categoria.estabelecimento_id' => $userLogado['estabelecimento_id']));
			$this->Paginator->settings = $options;
			$this->set('categorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categoria->exists($id)) {
			$this->Session->setFlash(__('Categoria Inexistente.'), 'default', array('class' => 'alert alert-danger'));
			return $this->redirect(array('action' => 'index'));
		}
		$categoria = $this->Categoria->find('first', array('conditions' => array('Categoria.id' => $id)));
		$userLogado = $this->Auth->user();
		
		if($userLogado['estabelecimento_id'] == $categoria['Categoria']['estabelecimento_id']){
			$options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
			$this->set('categoria', $this->Categoria->find('first', $options));
		}else{
			$this->Session->setFlash(__('Não tem permissão para visualizar.'), 'default', array('class' => 'alert alert-danger'));
				return $this->redirect(array('action' => 'index'));
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$estabelecimento = $this->Auth->user();
		if ($this->request->is('post')) {
			$this->Categoria->create();
			$this->request->data['Categoria']['estabelecimento_id'] = $estabelecimento['estabelecimento_id'];
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash(__('Categoria salva.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A categoria não pôde ser salva. Por favor, tente novamente.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Categoria->exists($id)) {
			throw new NotFoundException(__('Invalid categoria'));
		}
		$categoria = $this->Categoria->find('first', array('conditions' => array('Categoria.id' => $id)));
		$userLogado = $this->Auth->user();
		
		if($userLogado['estabelecimento_id'] == $categoria['Categoria']['estabelecimento_id']){
		
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash(__('Categoria alterada.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A categoria não pôde ser alterada. Por favor, tente novamente.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
			$this->request->data = $this->Categoria->find('first', $options);
		}
		
		}else{
			$this->Session->setFlash(__('Não tem permissão para alterar.'), 'default', array('class' => 'alert alert-danger'));
				return $this->redirect(array('action' => 'index'));
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Categoria->id = $id;
		if (!$this->Categoria->exists()) {
			throw new NotFoundException(__('Invalid categoria'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categoria->delete()) {
			$this->Session->setFlash(__('Categoria excluída.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('A categoria nâo pôde ser excluída. Por favor, tente novamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
