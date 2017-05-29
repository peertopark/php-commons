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

namespace Peertopark;

/**
 * URL Friendly version of base64_encode.
 *
 * @author blackleg
 */
class Base64Url {
    
    
    public static function encode($string) {
        if (is_null($string)) {
            return NULL;
        } else {
            return urlencode(base64_encode($string));
        }
    }
    
    public static function decode($string) {
        if (is_null($string)) {
            return NULL;
        } else {
            return base64_decode(urldecode($string));
        }
    }
    
}
