<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Util\AlertUtil;

class AlertTest extends PHPUnit_Framework_TestCase
{
	public function testAlert()
	{
		echo "Test AlertUtil";

		$this->assertEquals(AlertUtil::alert(), 'alert!');
	}
}
