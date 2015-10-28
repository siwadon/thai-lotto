<?php

class RouteTest extends TestCase {
    protected $baseUrl = 'http://localhost';

	/**
	 * test index route.
	 *
	 * @return void
	 */
	public function testIndexPage()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(302, $response->getStatusCode());

		$this->assertRedirectedTo('/th/result');
	}

	/**
	 * test result page
	 */
	public function testResultPage()
	{
		$response = $this->call('GET', '/result');
		$this->assertEquals(302, $response->getStatusCode());
		$this->assertRedirectedTo('/th/result');

		$response = $this->call('GET', '/result/2015-01-16');
		$this->assertEquals(302, $response->getStatusCode());
		$this->assertRedirectedTo('/th/result/2015-01-16');

		$response = $this->call('GET', '/result/2015-01-17');
		$this->assertEquals(302, $response->getStatusCode());
		$this->assertRedirectedTo('/th/result/2015-01-17');
	}

	/**
	 * test all result page
	 */
	public function testAllResultPage()
	{
		$this->markTestSkipped('not implement yet');
	}

}
