<?php

use Peertopark\Dates;

class DatesTest extends PHPUnit_Framework_TestCase {

    public function test_secondsToMilis() {
        $seconds = 60;
        $expected = 60000;
        $this->assertEquals($expected, Dates::secondsToMilis($seconds));
    }

    public function test_milisToSeconds() {
        $seconds = 60000;
        $expected = 60;
        $this->assertEquals($expected, Dates::milisToSeconds($seconds));
    }

}
