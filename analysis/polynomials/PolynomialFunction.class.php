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
 * (In Java was Immutable) representation of a real polynomial function with real coefficients.
 * <p>
 * <a href="http://mathworld.wolfram.com/HornersMethod.html">Horner's Method</a>
 *  is used to evaluate the function.</p>
 */  
class PolynomialFunction implements DifferentiableUnivariateRealFunction{

    /**
     * @var $coefficients double array 
     * The coefficients of the polynomial, ordered by degree -- i.e.,
     * coefficients[0] is the constant term and coefficients[n] is the
     * coefficient of x^n where n is the degree of the polynomial.
     */
    private $coefficients = array();
    
    /**
     * Construct a polynomial with the given coefficients.  The first element
     * of the coefficients array is the constant term.  Higher degree
     * coefficients follow in sequence.  The degree of the resulting polynomial
     * is the index of the last non-null element of the array, or 0 if all elements
     * are null.
     * <p>
     * The constructor makes a copy of the input array and assigns the copy to
     * the coefficients property.</p>
     *
     * @param $c array doubles polynomial coefficients
     * @throws NullPointerException if c is null
     * @throws NoDataException if c is empty
     */
    public function __construct(array $c) {
        $n = count($c);
        if ($n == 0) {
            throw new NoDataException(LocalizedFormats::$EMPTY_POLYNOMIALS_COEFFICIENTS_ARRAY);
        }
        $this->coefficients = $c;
        while (($n > 1) && ($c[$n - 1] == 0)) {
            array_pop($this->coefficients);
            --$n;
        }
    }
    
    /**
     * Compute the value of the function for the given argument.
     * <p>
     *  The value returned is <br>
     *   <code>coefficients[n] * x^n + ... + coefficients[1] * x  + coefficients[0]</code>
     * </p>
     *
     * @param x the argument for which the function value should be computed
     * @return double the value of the polynomial at the given point
     * @see UnivariateRealFunction#value(double)
     */
    public function value($x) {
       return self::evaluate($this->coefficients, $x);
    }
    
    /**
     * Uses Horner's Method to evaluate the polynomial with the given coefficients at
     * the argument.
     *
     * @param $coefficients array doubles the coefficients of the polynomial to evaluate
     * @param $argument double the input value
     * @return double the value of the polynomial
     * @throws NoDataException if coefficients is empty
     * @throws NullPointerException if coefficients is null
     */
    protected static function evaluate(array &$coefficients, $argument) {
        $n = count($coefficients);
        if ($n == 0) {
            throw new NoDataException(LocalizedFormats::$EMPTY_POLYNOMIALS_COEFFICIENTS_ARRAY);
        }
        $result = $coefficients[$n - 1];
        for ($j = $n -2; $j >=0; $j--) {
            $result = $argument * $result + $coefficients[$j];
        }
        return $result;
    }
    
    /**
     * Returns the derivative as a UnivariateRealFunction
     *
     * @return UnivariateRealFunction the derivative function
     */
    public function derivative() {
        throw new Exception('Not implemented yet');
    }
}
