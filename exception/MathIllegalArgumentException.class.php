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
 * Base class for all preconditions violation exceptions.
 * This class is not intended to be instantiated directly: it should serve
 * as a base class to create all the exceptions that share the semantics of
 * the standard {@link IllegalArgumentException}, but must also provide a
 * localized message.
 */
abstract class MathIllegalArgumentException extends Exception implements MathThrowable{

    /**
     * @var $specific Localizable Pattern used to build the message (specific context).
     */
    private $specific;
    /**
     * @var $general Localizable Pattern used to build the message (general problem description).
     */
    private $general;
    /**
     * @var $arguments array Arguments used to build the message.
     */
    private $arguments;
        
    /**
     * @param general Message pattern explaining the cause of the error.
     * @param args Arguments.
     */
    public function __construct(Localizable $specific) {
        if(func_num_args() == 3){
            $this->specific = $specific;
            $this->general = func_get_arg(1);
            if(!($this->general instanceof Localizable)) throw new Exception('Fatal Error: Argument 1 must not be Localizable');
            $this->arguments = func_get_arg(2);
            if(!is_array($this->arguments)) throw new Exception('Fatal Error: Argument 2 must be array');
        } else if(func_num_args() == 2){
            $this->specific = null;
            $this->general = $specific;
            $this->arguments = func_get_arg(1);
            if(!is_array($this->arguments)) throw new Exception('Fatal Error: Argument 1 must be array');
        } else {
            throw new Exception('Invalid parameters number');
        }
        
        parent::__construct($this->getCustomMessage());
    }    
    
    public function getSpecificPattern() {
        return $this->specific;
    }

    public function getGeneralPattern() {
        return $this->general;
    }

    public function getArguments() {
        return $this->arguments;
    }

    public function getCustomMessage() {
        return MessageFactory::buildMessage($this->specific, $this->general, $this->arguments);
    }
}
