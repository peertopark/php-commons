<?php

use Peertopark\Booleans;
/**
 * Description of ConstatsTest
 *
 * @author mariam
 */
class BooleansTest extends PHPUnit_Framework_TestCase {
    
    public function test_fromStringTrue (){
        $val_true = Booleans::fromString("true");
        $this->assertTrue($val_true);
        
    }
    
     public function test_fromStringFalse (){
        $val_true = Booleans::fromString("false");
        $this->assertFalse($val_true);
        
    }
}
