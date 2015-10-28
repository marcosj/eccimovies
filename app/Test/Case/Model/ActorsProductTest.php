<?php
App::uses('ActorsProduct', 'Model');

/**
 * ActorsProduct Test Case
 */
class ActorsProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actors_product',
		'app.actor',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActorsProduct = ClassRegistry::init('ActorsProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActorsProduct);

		parent::tearDown();
	}

}
