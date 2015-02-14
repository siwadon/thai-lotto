<?php

class RouteTest extends TestCase {

	/**
	 * test index route.
	 *
	 * @return void
	 */
	public function testIndexGetRedirect()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(302, $response->getStatusCode());

		$this->assertRedirectedTo('/result');
	}

}
