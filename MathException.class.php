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
 * Base class for commons-math checked exceptions.
 * <p>
 * Adapted from <a href="http://commons.apache.org/collections/api-release/org/apache/commons/collections/FunctorException.html"/>.</p>
 *
 */
class MathException extends Exception implements MathThrowable {

    /**
     * @var $pattern Localizable Pattern used to build the message (general problem description).
     */
    private $pattern = null;
    /**
     * @var $arguments array Arguments used to build the message.
     */
    private $arguments;
    
    /**
     * Constructs a new <code>MathException</code> with specified
     * formatted detail message.
     * Message formatting is delegated to {@link java.text.MessageFormat}.
     * @param $pattern Localizable format specifier
     * @param $arguments format arguments
     */
    public function __construct(Localizable $pattern, $arguments = null) {
        $this->pattern = $pattern;
        $this->arguments =  ($arguments == null) ? array() : $arguments;
        parent::__construct($this->getCustomMessage());
    }
    
    public function getSpecificPattern() {
        return null;
    }

    public function getGeneralPattern() {
        return $this->pattern;
    }

    public function getArguments() {
        return $this->arguments;
    }
    
    public function getCustomMessage() {
        if($this->pattern != null){
            return MessageFactory::buildMessage(null, $this->pattern, $this->arguments);
        }
        return '';
    }    
}
