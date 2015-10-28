<?php
App::uses('InvoicesProduct', 'Model');

/**
 * InvoicesProduct Test Case
 */
class InvoicesProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.invoices_product',
		'app.invoice',
		'app.payment_method',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InvoicesProduct = ClassRegistry::init('InvoicesProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InvoicesProduct);

		parent::tearDown();
	}

}
