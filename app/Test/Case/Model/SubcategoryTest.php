<?php
App::uses('Subcategory', 'Model');

/**
 * Subcategory Test Case
 */
class SubcategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subcategory',
		'app.category',
		'app.product',
		'app.actor',
		'app.actors_product',
		'app.cart',
		'app.user',
		'app.carts_product',
		'app.invoice',
		'app.payment_method',
		'app.invoices_product',
		'app.wishlist',
		'app.products_wishlist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subcategory = ClassRegistry::init('Subcategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subcategory);

		parent::tearDown();
	}

}
