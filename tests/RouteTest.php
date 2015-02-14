<?php

class RouteTest extends TestCase {

	/**
	 * test index route.
	 *
	 * @return void
	 */
	public function testIndexPage()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(302, $response->getStatusCode());

		$this->assertRedirectedTo('/result');
	}

	/**
	 * test result page
	 */
	public function testResultPage()
	{
		$this->call('GET', '/result');

		$this->assertResponseOk();

		$this->call('GET', '/result/2015-01-16');

		$this->assertResponseOk();

		$this->call('GET', '/result/2015-01-17');

		$this->assertResponseStatus(404);
	}

	/**
	 * test all result page
	 */
	public function testAllResultPage()
	{
		$this->markTestSkipped('not implement yet');
	}

}
