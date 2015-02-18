<?php

use App\Helper;

class HelperTest extends TestCase {

    function testHumanDate()
    {
        $this->assertEquals( Helper::human_date('2015-02-01'), '1 กุมภาพันธ์ 2558');
        $this->assertEquals( Helper::human_date('2014-05-16'), '16 พฤษภาคม 2557');
        $this->assertEquals( Helper::human_date('1986-07-16'), '16 กรกฎาคม 2529');
    }
}