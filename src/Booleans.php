<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Peertopark;

/**
 * Description of Booleans
 *
 * @author mariam
 */
class Booleans {

    public static function fromString($bool) {
        return filter_var($bool, FILTER_VALIDATE_BOOLEAN);
    }

}
