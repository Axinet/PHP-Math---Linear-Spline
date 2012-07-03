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
 * Exception to be thrown when two dimensions differ.
 */
class DimensionMismatchException extends MathIllegalNumberException{

    /** Correct dimension. */
    /** @var $dimension int */
    private $dimension;
    
    /**
     * Construct an exception from the mismatched dimensions.
     *
     * @param $wrong int Wrong dimension.
     * @param $expected int Expected dimension.
     */
    public function __construct($wrong, $expected) {
        parent::__construct(LocalizedFormats::$DIMENSIONS_MISMATCH_SIMPLE, $wrong, $expected);
        $this->dimension = $expected;
    }
    
    /**
     * @return int the expected dimension.
     */
    public function getDimension() {
        return $this->dimension;
    }
}
