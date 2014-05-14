<?php
App::uses('AppController', 'Controller');
class ProdutosController extends AppController {

////////////////////////////////////////////////////////////

	public $components = array(
		'RequestHandler',
		'Paginator',
	);

////////////////////////////////////////////////////////////

	public function beforeFilter() {
		parent::beforeFilter();
	}

////////////////////////////////////////////////////////////

	public function index($id = null) {
		$this->Produto->recursive = 2;
		$options = array('conditions' => array('Produto.estabelecimento_id' => $id));
		$this->Paginator->settings = $options;
		$this->set('produtos', $this->Paginator->paginate());
	}
	
////////////////////////////////////////////////////////////

	public function produtos() {

		$this->Paginator = $this->Components->load('Paginator');

		$this->Paginator->settings = array(
			'Produto' => array(
				'recursive' => -1,
				'contain' => array(
					'Brand'
				),
				'limit' => 20,
				'conditions' => array(
					'Produto.active' => 1,
					'Brand.active' => 1
				),
				'order' => array(
					'Produto.name' => 'ASC'
				),
				'paramType' => 'querystring',
			)
		);
		$produtos = $this->Paginator->paginate();
		$this->set(compact('produtos'));

		$this->set('title_for_layout', 'All Produtos - ' . Configure::read('Settings.SHOP_TITLE'));

	}

////////////////////////////////////////////////////////////

	public function view($id = null) {

		$produto = $this->Produto->find('first', array(
			'recursive' => 2,
			
			'conditions' => array(
				
				'Produto.id' => $id
			)
		));
		if (empty($produto)) {
			return $this->redirect(array('action' => 'index'), 301);
		}

		
		$this->set(compact('produto'));

//		$produtomods = $this->Produto->Produtomod->getAllProdutoMods($produto['Produto']['id'], $produto['Produto']['price']);
//		$this->set('produtomodshtml', $produtomods['produtomodshtml']);

		$this->set('title_for_layout', $produto['Produto']['nome_produto'] . ' ' . Configure::read('Settings.SHOP_TITLE'));

	}

////////////////////////////////////////////////////////////

	public function search() {

		$search = null;
		if(!empty($this->request->query['search']) || !empty($this->request->data['name'])) {
			$search = empty($this->request->query['search']) ? $this->request->data['name'] : $this->request->query['search'];
			$search = preg_replace('/[^a-zA-Z0-9 ]/', '', $search);
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));
//			$conditions = array(
//				'Brand.active' => 1,
//				'Produto.active' => 1,
//			);
			foreach($terms as $term) {
				$terms1[] = preg_replace('/[^a-zA-Z0-9]/', '', $term);
				$conditions[] = array('Produto.nome_produto LIKE' => '%' . $term . '%');
			}
			$produtos = $this->Produto->find('all', array(
				'recursive' => 2,
				
				'conditions' => $conditions,
				'limit' => 200,
			));
//			if(count($produtos) == 1) {
//				return $this->redirect(array('controller' => 'produtos', 'action' => 'view', $produtos[0]['Produto']['id']));
//			}
			$terms1 = array_diff($terms1, array(''));
			$this->set(compact('produtos', 'terms1'));
		}
		$this->set(compact('search'));

		if ($this->request->is('ajax')) {
			$this->layout = false;
			$this->set('ajax', 1);
		} else {
			$this->set('ajax', 0);
		}

		$this->set('title_for_layout', 'Search');

		$description = 'Search';
		$this->set(compact('description'));

		$keywords = 'search';
		$this->set(compact('keywords'));
	}

////////////////////////////////////////////////////////////

	public function searchjson() {

		$search = null;
		if(!empty($this->request->query['search'])) {
			$search = $this->request->query['search'];
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));
			$conditions = array(
				'Brand.active' => 1,
				'Produto.active' => 1
			);
			foreach($terms as $term) {
				$conditions[] = array('Produto.name LIKE' => '%' . $term . '%');
			}
			$produtos = $this->Produto->find('all', array(
				'recursive' => -1,
				'contain' => array(
					'Brand'
				),
				'fields' => array(
					'Produto.name',
					'Produto.image'
				),
				'conditions' => $conditions,
				'limit' => 200,
			));
		}
		echo json_encode($produtos);
		$this->autoRender = false;

	}

////////////////////////////////////////////////////////////

	public function sitemap() {
		$produtos = $this->Produto->find('all', array(
			'recursive' => -1,
			'contain' => array(
				'Brand'
			),
			'fields' => array(
				'Produto.slug'
			),
			'conditions' => array(
				'Brand.active' => 1,
				'Produto.active' => 1
			),
			'order' => array(
				'Produto.created' => 'DESC'
			),
		));
		$this->set(compact('produtos'));

		$website = Configure::read('Settings.WEBSITE');
		$this->set(compact('website'));

		$this->layout = 'xml';
		$this->response->type('xml');
	}

////////////////////////////////////////////////////////////

	public function admin_reset() {
		$this->Session->delete('Produto');
		return $this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

	public function admin_index() {

		if ($this->request->is('post')) {

			if($this->request->data['Produto']['active'] == '1' || $this->request->data['Produto']['active'] == '0') {
				$conditions[] = array(
					'Produto.active' => $this->request->data['Produto']['active']
				);
				$this->Session->write('Produto.active', $this->request->data['Produto']['active']);
			} else {
				$this->Session->write('Produto.active', '');
			}

			if(!empty($this->request->data['Produto']['brand_id'])) {
				$conditions[] = array(
					'Produto.brand_id' => $this->request->data['Produto']['brand_id']
				);
				$this->Session->write('Produto.brand_id', $this->request->data['Produto']['brand_id']);
			} else {
				$this->Session->write('Produto.brand_id', '');
			}

			if(!empty($this->request->data['Produto']['name'])) {
				$filter = $this->request->data['Produto']['filter'];
				$this->Session->write('Produto.filter', $filter);
				$name = $this->request->data['Produto']['name'];
				$this->Session->write('Produto.name', $name);
				$conditions[] = array(
					'Produto.' . $filter . ' LIKE' => '%' . $name . '%'
				);
			} else {
				$this->Session->write('Produto.filter', '');
				$this->Session->write('Produto.name', '');
			}

			$this->Session->write('Produto.conditions', $conditions);
			return $this->redirect(array('action' => 'index'));

		}

		if($this->Session->check('Produto')) {
			$all = $this->Session->read('Produto');
		} else {
			$all = array(
				'active' => '',
				'brand_id' => '',
				'name' => '',
				'filter' => '',
				'conditions' => ''
			);
		}
		$this->set(compact('all'));

		$this->Paginator = $this->Components->load('Paginator');

		$this->Paginator->settings = array(
			'Produto' => array(
				'contain' => array(
					'Category',
					'Brand',
				),
				'recursive' => -1,
				'limit' => 50,
				'conditions' => $all['conditions'],
				'order' => array(
					'Produto.name' => 'ASC'
				),
				'paramType' => 'querystring',
			)
		);
		$produtos = $this->Paginator->paginate();

		$brands = $this->Produto->Brand->findList();

		$brandseditable = array();
		foreach ($brands as $key => $value) {
			$brandseditable[] = array(
				'value' => $key,
				'text' => $value,
			);
		}

		// $categories= $this->Produto->Category->find('list', array(
		// 	'recursive' => -1,
		// 	'order' => array(
		// 		'Category.name' => 'ASC'
		// 	)
		// ));

		$categories = $this->Produto->Category->generateTreeList(null, null, null, '--');

		$categorieseditable = array();
		foreach ($categories as $key => $value) {
			$categorieseditable[] = array(
				'value' => $key,
				'text' => $value,
			);
		}

		$tags = ClassRegistry::init('Tag')->find('all', array(
			'order' => array(
				'Tag.name' => 'ASC'
			),
		));

		$this->set(compact('produtos', 'brands', 'brandseditable', 'categorieseditable', 'tags'));

	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {

		if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Produto']['image']['name'])) {

			$this->Img = $this->Components->load('Img');

			$newName = $this->request->data['Produto']['slug'];

			$ext = $this->Img->ext($this->request->data['Produto']['image']['name']);

			$origFile = $newName . '.' . $ext;
			$dst = $newName . '.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Produto']['image']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Produto']['image'] = $dst;
			} else {
				$this->request->data['Produto']['image'] = '';
			}

			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash($upload);
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The Produto could not be saved. Please, try again.');
			}
		}

		if (!$this->Produto->exists($id)) {
			throw new NotFoundException('Invalid produto');
		}
		$produto = $this->Produto->find('first', array(
			'recursive' => -1,
			'contain' => array(
				'Category',
				'Brand',
			),
			'conditions' => array(
				'Produto.id' => $id
			)
		));
		$this->set(compact('produto'));
	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Produto->create();
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash('The produto has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The produto could not be saved. Please, try again.');
			}
		}
		$brands = $this->Produto->Brand->find('list');
		$this->set(compact('brands'));

		$categories = $this->Produto->Category->generateTreeList(null, null, null, '--');
		$this->set(compact('categories'));
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		if (!$this->Produto->exists($id)) {
			throw new NotFoundException('Invalid produto');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash('The produto has been saved');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The produto could not be saved. Please, try again.');
			}
		} else {
			$produto = $this->Produto->find('first', array(
				'conditions' => array(
					'Produto.id' => $id
				)
			));
			$this->request->data = $produto;
		}

		$this->set(compact('produto'));

		$brands = $this->Produto->Brand->find('list');
		$this->set(compact('brands'));

		$categories = $this->Produto->Category->generateTreeList(null, null, null, '--');
		$this->set(compact('categories'));

		$produtomods = $this->Produto->Produtomod->find('all', array(
			'conditions' => array(
				'Produtomod.produto_id' => $produto['Produto']['id']
			)
		));
		$this->set(compact('produtomods'));

	}

////////////////////////////////////////////////////////////

	public function admin_tags($id = null) {

		$tags = ClassRegistry::init('Tag')->find('all', array(
			'recursive' => -1,
			'fields' => array(
				'Tag.name'
			),
			'order' => array(
				'Tag.name' => 'ASC'
			),
		));
		$tags = Hash::combine($tags, '{n}.Tag.name', '{n}.Tag.name');
		$this->set(compact('tags'));

		if ($this->request->is('post') || $this->request->is('put')) {

			$tagstring = '';

			foreach($this->request->data['Produto']['tags'] as $tag) {
				$tagstring .= $tag . ', ';
			}

			$tagstring = trim($tagstring);
			$tagstring = rtrim($tagstring, ',');

			$this->request->data['Produto']['tags'] = $tagstring;

			$this->Produto->save($this->request->data, false);

			return $this->redirect(array('action' => 'tags', $this->request->data['Produto']['id']));

		}

		$produto = $this->Produto->find('first', array(
			'conditions' => array(
				'Produto.id' => $id
			)
		));
		if (empty($produto)) {
			throw new NotFoundException('Invalid produto');
		}
		$this->set(compact('produto'));

		$selectedTags = explode(',', $produto['Produto']['tags']);
		$selectedTags = array_map('trim', $selectedTags);
		$this->set(compact('selectedTags'));

		$neighbors = $this->Produto->find('neighbors', array('field' => 'id', 'value' => $id));
		$this->set(compact('neighbors'));

	}

////////////////////////////////////////////////////////////

	public function admin_csv() {
		$produtos = $this->Produto->find('all', array(
			'recursive' => -1,
		));
		$this->set(compact('produtos'));
		$this->layout = false;
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		$this->Produto->id = $id;
		if (!$this->Produto->exists()) {
			throw new NotFoundException('Invalid produto');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Produto->delete()) {
			$this->Session->setFlash('Produto deleted');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Produto was not deleted');
		return $this->redirect(array('action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
