<?php
App::uses('AppModel', 'Model');
/**
 * ProductsWishlist Model
 *
 * @property Wishlist $Wishlist
 * @property User $User
 * @property Product $Product
 */
class ProductsWishlist extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'wishlist_id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Wishlist' => array(
			'className' => 'Wishlist',
			'foreignKey' => 'wishlist_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
