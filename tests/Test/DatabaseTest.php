<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Model\YourDatabaseName;

class DatabaseTest extends PHPUnit_Framework_TestCase
{
	private $em;

	protected function setUp()
	{
		// run before test
		echo "setUp()\n";

		require __DIR__ . '/../../config/DB.php';

		// $em is defined in config/DB.php
		$this->em = $em;
	}

	protected function tearDown()
	{
		// run after test
		echo "tearDown()\n";
	}



	public function testSaveName()
	{
		echo "Test Database\n";

		/**
		 * example
		 */
		//$model = new YourDataBaseName();
		//$model->setName('Bbb');
		//$this->em->persist($model);
		//$this->em->flush();

	}
}
