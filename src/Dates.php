<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Peertopark;

/**
 * Description of Dates
 *
 * @author mariam
 */
class Dates {

    public static function secondsToMilis($seconds) {
        return $seconds * 1000;
    }

    public static function milisToSeconds($milis) {
        return $milis / 1000;
    }

}
