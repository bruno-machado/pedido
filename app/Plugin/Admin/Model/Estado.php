<?php
App::uses('AppModel', 'Model');
/**
 * Estado Model
 *
 * @property Cidade $Cidade
 */
class Estado extends AdminAppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome_estado';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome_estado' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'estado_id',
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

}
