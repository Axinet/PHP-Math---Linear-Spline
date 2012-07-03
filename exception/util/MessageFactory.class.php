<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
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
  * Copied from Apache Commons Math and adapted to work in PHP language.
  */
  
/**
 * Class for constructing localized messages.
 */
class MessageFactory {

    /**
     * Class contains only static methods.
     */
    private function __construct() {
        ;
    }
    
    /**
     * Builds a message string by from two patterns (specific and general) and
     * an argument list.
     *
     * @param $specific Localizable Format specifier (may be null).
     * @param $general Localizable Format specifier (may be null).
     * @param $arguments Format arguments. They will be substituted in
     * <em>both</em> the {@code general} and {@code specific} format specifiers.
     * @return string a localized message string.
     */
    public static function buildMessage($specific,
                                      $general,
                                      array $arguments) {
        $sb = '';
        if ($general != null) {
            $message = $general->getSourceString();
            foreach ($arguments as $key => $value) {
                $str = '{'.$key.'}';
                $message = str_replace($str, $value, $message);
            }
            $sb .= $message;
        }
        if ($specific != null) {
            if ($general != null) {
                $sb .= ': ';
            }
            $message = $specific->getSourceString();
            foreach ($arguments as $key => $value) {
                $str = '{'.$key.'}';
                $message = str_replace($str, $value, $message);
            }
            $sb .= $message;
        }

        return $sb;
    }
}
