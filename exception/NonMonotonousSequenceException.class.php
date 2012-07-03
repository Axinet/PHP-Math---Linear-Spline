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
 * Exception to be thrown when the a sequence of values is not monotonously
 * increasing or decreasing.
 */
class NonMonotonousSequenceException extends MathIllegalNumberException {

    /**
     * @var $direction OrderDirection Direction (positive for increasing, negative for decreasing).
     */
    private $direction;
    /**
     * @var $strict boolean Whether the sequence must be strictly increasing or decreasing.
     */
    private $strict;
    /**
     * @var $index intIndex of the wrong value.
     */
    private $index;
    /**
     * @var $previous number Previous value.
     */
    private $previous;
    
    /**
     * Construct the exception.
     *
     * @param $wrong Number Value that did not match the requirements.
     * @param $previous Number Previous value in the sequence.
     * @param $index Index of the value that did not match the requirements.
     * @param $direction OrderDirection Strictly positive for a sequence required to be
     * increasing, negative (or zero) for a decreasing sequence.
     * @param $strict boolean Whether the sequence must be strictly increasing or
     * decreasing.
     */
    public function __construct($wrong, $previous, $index, $direction, $strict) {
        parent::__construct($direction == OrderDirection::INCREASING ?
              ($strict ?
               LocalizedFormats::$NOT_STRICTLY_INCREASING_SEQUENCE :
               LocalizedFormats::$NOT_INCREASING_SEQUENCE) :
              ($strict ?
               LocalizedFormats::$NOT_STRICTLY_DECREASING_SEQUENCE :
               LocalizedFormats::$NOT_DECREASING_SEQUENCE),
              $wrong, array($previous, $index, $index - 1));

        $this->direction = $direction;
        $this->strict = $strict;
        $this->index = $index;
        $this->previous = $previous;
    }    
    
}
