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
* Interface for commons-math throwables.
*/
interface MathThrowable {
    /** Gets the localizable pattern used to build the specific part of the message of this throwable.
     * @return Localizable localizable pattern used to build the specific part of the message of this throwable
     */
     function getSpecificPattern();

    /** Gets the localizable pattern used to build the general part of the message of this throwable.
     * @return Localizable localizable pattern used to build the general part of the message of this throwable
     */
     function getGeneralPattern();

    /** Gets the arguments used to build the message of this throwable.
     * @return array the arguments used to build the message of this throwable
     */
    function getArguments();

//    /** Gets the message in a specified locale.
//     * @param locale Locale in which the message should be translated
//     * @return string localized message
//     */
//    function getMessage(Locale $locale);

    /** Gets the message in a conventional US locale.
     * @return string localized message
     */
    function getCustomMessage();

//    /** Gets the message in the system default locale.
//     * @return string localized message
//     */
//    function getLocalizedMessage();
}

