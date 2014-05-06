<?php
App::uses('AppModel', 'Model');
/**
 * ProdutosFoto Model
 *
 * @property Produto $Produto
 * @property Estabelecimento $Estabelecimento
 */
class ProdutosFoto extends AdminAppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'produto_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estabelecimento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foto' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foto_destaque' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'produto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estabelecimento' => array(
			'className' => 'Estabelecimento',
			'foreignKey' => 'estabelecimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	
	public function preparaSave($dados, $idProduto){
		$produtosFotos = array();
		$produtosFotos['ProdutosFoto']['produto_id'] = $idProduto;
		$produtosFotos['ProdutosFoto']['estabelecimento_id'] = 1;
		$nomeFinal = $dados['files']['name'][0];
		//$nomeFinal = md5($nomeAntigo.$idProduto. date("dmY")).".jpg";
		//rename($nomeAntigo, $nomeFinal);
		$produtosFotos['ProdutosFoto']['url'] = $nomeFinal;
		$this->save($produtosFotos);
		
		
	}
	public function deleteFoto($file){
		var_dump($file);
		
		//$this->deleteAll(array('ProdutosFoto.url' => $file), false);
		
		//$this->ProdutosFoto->url = $file;
		//$this->ProdutosFoto->delete();
		
	}
	
	
	
	
	
	
}
