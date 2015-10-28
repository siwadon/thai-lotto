<?php

class RouteAPITest extends TestCase {
    protected $baseUrl = 'http://localhost';

    /**
     * test API date list.
     */
    public function testGetDateList()
    {
        $response = $this->call('GET', '/api/dates');

        $this->assertResponseOk();

        $response = $this->call('GET', '/api/dates/12');

        $this->assertResponseOk();
    }

    /**
     * test API lottery result
     */
    public function testResultPage()
    {
        $this->call('GET', '/api/result');

        $this->assertResponseOk();

        $this->call('GET', '/api/result/2015-01-16');

        $this->assertResponseOk();

        $this->call('GET', '/api/result/2015-01-17');

        $this->assertResponseStatus(404);
    }

}
