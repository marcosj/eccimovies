<?php
App::uses('User', 'Model');

/**
 * User Test Case
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.address',
		'app.cart',
		'app.product',
		'app.subcategory',
		'app.category',
		'app.actor',
		'app.actors_product',
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
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
