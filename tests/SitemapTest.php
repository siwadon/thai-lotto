<?php

class SitemapTest extends TestCase {

    public function testSitemapIsProperlyGenerated()
    {
        $this->call('GET', '/sitemap.xml');
        $this->assertViewHas('urls');
        $this->assertResponseOk();
    }
}