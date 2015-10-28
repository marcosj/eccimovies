<?php
App::uses('AppModel', 'Model');
/**
 * InvoicesProduct Model
 *
 * @property Invoice $Invoice
 * @property Product $Product
 */
class InvoicesProduct extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'invoice_id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Invoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'invoice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
