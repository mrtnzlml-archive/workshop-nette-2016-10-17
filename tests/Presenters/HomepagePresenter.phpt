<?php

namespace App\Tests;

require __DIR__ . '/../bootstrap.php';

/**
 * @testCase
 */
class HomepagePresenter extends \Tester\TestCase
{

	use \Testbench\TPresenter;

	public function testActionDefault()
	{
		$this->checkAction('Homepage:default');
	}

}

(new HomepagePresenter)->run();
