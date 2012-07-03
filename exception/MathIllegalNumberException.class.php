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
 * Base class for exceptions raised by a wrong number.
 * This class is not intended to be instantiated directly: it should serve
 * as a base class to create all the exceptions that are raised because some
 * precondition is violated by a number argument.
 */
abstract class MathIllegalNumberException extends MathIllegalArgumentException{

    /** Requested. */
    /** @var $argument number */
    private $argument;
    
    /**
     * Construct an exception.
     *
     * @param $general Localizable Localizable pattern.
     * @param $wrong number wrong number
     * @param $arguments array Arguments.
     */
    public function __construct(Localizable $specific) {
        $withSpecific = false;
        if(func_num_args() == 4){
            $general = func_get_arg(1);
            if(!($general instanceof Localizable)) throw new Exception('Fatal Error: Argument 1 must not be Localizable');
            $wrong = func_get_arg(2);
            $arguments = func_get_arg(3);
            $withSpecific = true;
        } else if(func_num_args() == 3) {
            $general = $specific;
            $wrong = func_get_arg(1);
            $arguments = func_get_arg(2);
        } else {
            throw new Exception('Invalid parameters number');
        }
        if(!is_array($arguments)){
            $arguments = array($arguments);
        }
        array_unshift($arguments, $wrong);
        if($withSpecific){
            parent::__construct($specific, $general, $arguments);
        } else {
            parent::__construct($general, $arguments);
        }
        $this->argument = $wrong;
    }
    
    /**
     * @return number the requested value.
     */
    public function getArgument() {
        return $this->argument;
    }
 
}
