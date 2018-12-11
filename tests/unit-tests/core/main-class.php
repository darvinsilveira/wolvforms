<?php
/**
 * WolvForms class.
 *
 * @package Wolvforms
 */

/**
 * WolvForms class.
 */
class WOLV_Test_WolvForms extends WP_UnitTestCase {

	/**
	 * WolvForms instance.
	 *
	 * @var \WolvForms instance
	 */
	protected $wolv;

	/**
	 * Setup test.
	 */
	public function setUp() {
		parent::setUp();
		$this->wolv = wolv();
	}

	/**
	 * Test WOLV has static instance.
	 */
	public function test_wolv_instance() {
		$this->assertClassHasStaticAttribute( '_instance', 'WolvForms' );
	}

	/**
	 * Test class instance.
	 */
	public function test_wolv_class_instances() {
		$this->assertInstanceOf( 'WolvForms', $this->wolv );
	}
}
