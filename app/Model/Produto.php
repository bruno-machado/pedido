<?php
App::uses('AppModel', 'Model');
class Produto extends AppModel {

////////////////////////////////////////////////////////////
    
    public $name = 'produtos';


////////////////////////////////////////////////////////////

	public $belongsTo = array(
		'Category' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),
            'Estabelecimento' => array(
			'className' => 'Estabelecimento',
			'foreignKey' => 'estabelecimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),
		
	);

////////////////////////////////////////////////////////////

	public $hasMany = array(
		
            'ProdutosFoto' => array(
			'className' => 'ProdutosFoto',
			'foreignKey' => 'produto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

////////////////////////////////////////////////////////////

	public function updateViews($products) {

		if(!isset($products[0])) {
			$a = $products;
			unset($products);
			$products[0] = $a;
		}

		$this->unbindModel(
			array('belongsTo' => array('Category'))
		);

		$productIds = Set::extract('/Produto/id', $products);

		$this->updateAll(
			array(
				'Produto.views' => 'Produto.views + 1',
			),
			array('Produto.id' => $productIds)
		);


	}

////////////////////////////////////////////////////////////

}