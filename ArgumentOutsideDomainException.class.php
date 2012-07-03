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
 * Error thrown when a method is called with an out of bounds argument.
 */
class ArgumentOutsideDomainException extends FunctionEvaluationException {

    /**
     * Constructs an exception with specified formatted detail message.
     * Message formatting is delegated to {@link java.text.MessageFormat}.
     * @param $argument double the failing function argument
     * @param $lower double lower bound of the domain
     * @param $upper double upper bound of the domain
     */
    public function __construct($argument, $lower, $upper) {
        parent::__construct($argument, LocalizedFormats::$ARGUMENT_OUTSIDE_DOMAIN, array($argument, $lower, $upper));
    }    
    
}
