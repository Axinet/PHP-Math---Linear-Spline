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
 * Exception to be thrown when a number is too small.
 */
class NumberIsTooSmallException extends MathIllegalNumberException{
    /**
     * @var $min number Higher bound.
     */
    private $min;
    
    /**
     * @var $boundIsAllowed boolean Whether the maximum is included in the allowed range.
     */
    private $boundIsAllowed;
    
    /**
     * Construct the exception with a specific context.
     *
     * @param $specific Specific contexte pattern .
     * @param $wrong Number Value that is smaller than the minimum.
     * @param $min Number minimum.
     * @param $boundIsAllowed boolean Whether {@code min} is included in the allowed range.
     */
    public function __construct(Localizable $specific, $wrong, $min, $boundIsAllowed){
        parent::__construct($specific, 
                ($boundIsAllowed ? LocalizedFormats::$NUMBER_TOO_SMALL : LocalizedFormats::$NUMBER_TOO_SMALL_BOUND_EXCLUDED), 
                $wrong, array($min));
        $this->min = $min;
        $this->boundIsAllowed = $boundIsAllowed;
    }
}
