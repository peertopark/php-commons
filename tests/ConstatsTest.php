<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConstatsTest
 *
 * @author mariam
 */
class ConstatsTest extends PHPUnit_Framework_TestCase {
    
    public function test_development (){
        $this->assertEquals("development", DEVELOPMENT);
        
    }
}
