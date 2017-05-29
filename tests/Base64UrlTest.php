<?php

/*
 * Copyright 2017 Peer to Park.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Description of Base64UrlTest
 *
 * @author blackleg
 */
class Base64UrlTest extends PHPUnit_Framework_TestCase {
    
    
    public function test_encode(){
        $encoded = Peertopark\Base64Url::encode("https://www.peertopark.com");
        $this->assertEquals("aHR0cHM6Ly93d3cucGVlcnRvcGFyay5jb20%3D", $encoded);
    }
    
    public function test_decode(){
        $decoded = Peertopark\Base64Url::decode("aHR0cHM6Ly93d3cucGVlcnRvcGFyay5jb20%3D");
        $this->assertEquals("https://www.peertopark.com", $decoded);
    }
    
}
