<?php
App::uses('AppModel', 'Model');
/**
 * ProdutosValore Model
 *
 * @property Produto $Produto
 * @property Tamanho $Tamanho
 * @property Estabelecimento $Estabelecimento
 */
class ProdutosValore extends AdminAppModel {

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
		'tamanho_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor_produtos' => array(
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
		'Tamanho' => array(
			'className' => 'Tamanho',
			'foreignKey' => 'tamanho_id',
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
}
