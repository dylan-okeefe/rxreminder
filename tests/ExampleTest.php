<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function aboutTest()
	{
		$response = $this->call('GET', 'about');

		$this->assertEquals(200, $response->getStatusCode());
		
	}

}
