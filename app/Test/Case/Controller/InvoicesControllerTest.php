<?php
App::uses('InvoicesController', 'Controller');

/**
 * InvoicesController Test Case
 */
class InvoicesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.invoice',
		'app.payment_method',
		'app.user',
		'app.address',
		'app.cart',
		'app.product',
		'app.subcategory',
		'app.category',
		'app.actor',
		'app.actors_product',
		'app.carts_product',
		'app.invoices_product',
		'app.wishlist',
		'app.products_wishlist'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}
