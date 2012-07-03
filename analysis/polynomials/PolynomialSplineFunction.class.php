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
 * Represents a polynomial spline function.
 * <p>
 * A <strong>polynomial spline function</strong> consists of a set of
 * <i>interpolating polynomials</i> and an ascending array of domain
 * <i>knot points</i>, determining the intervals over which the spline function
 * is defined by the constituent polynomials.  The polynomials are assumed to
 * have been computed to match the values of another function at the knot
 * points.  The value consistency constraints are not currently enforced by
 * <code>PolynomialSplineFunction</code> itself, but are assumed to hold among
 * the polynomials and knot points passed to the constructor.</p>
 * <p>
 * N.B.:  The polynomials in the <code>polynomials</code> property must be
 * centered on the knot points to compute the spline function values.
 * See below.</p>
 * <p>
 * The domain of the polynomial spline function is
 * <code>[smallest knot, largest knot]</code>.  Attempts to evaluate the
 * function at values outside of this range generate IllegalArgumentExceptions.
 * </p>
 * <p>
 * The value of the polynomial spline function for an argument <code>x</code>
 * is computed as follows:
 * <ol>
 * <li>The knot array is searched to find the segment to which <code>x</code>
 * belongs.  If <code>x</code> is less than the smallest knot point or greater
 * than the largest one, an <code>IllegalArgumentException</code>
 * is thrown.</li>
 * <li> Let <code>j</code> be the index of the largest knot point that is less
 * than or equal to <code>x</code>.  The value returned is <br>
 * <code>polynomials[j](x - knot[j])</code></li></ol></p>
 */
class PolynomialSplineFunction implements DifferentiableUnivariateRealFunction {

    /** @var $knots array doubles Spline segment interval delimiters (knots).   Size is n+1 for n segments. */
    private $knots = array();

    /**
     * @var $polynomials array PolynomialFunctions The polynomial functions that make up the spline.  The first element
     * determines the value of the spline over the first subinterval, the
     * second over the second, etc.   Spline function values are determined by
     * evaluating these functions at <code>(x - knot[i])</code> where i is the
     * knot segment to which x belongs.
     */
    private $polynomials = array();

    /**
     * @var $n int Number of spline segments = number of polynomials
     *  = number of partition points - 1
     */
    private $n;
    
    /**
     * Construct a polynomial spline function with the given segment delimiters
     * and interpolating polynomials.
     * <p>
     * The constructor copies both arrays and assigns the copies to the knots
     * and polynomials properties, respectively.</p>
     *
     * @param knots spline segment interval delimiters
     * @param polynomials polynomial functions that make up the spline
     * @throws NullPointerException if either of the input arrays is null
     * @throws IllegalArgumentException if knots has length less than 2,
     * <code>polynomials.length != knots.length - 1 </code>, or the knots array
     * is not strictly increasing.
     *
     */
    public function __construct(array $knots, array $polynomials) {
        if (count($knots) < 2) {
            throw MathRuntimeException::createIllegalArgumentException(
                  LocalizedFormats::$NOT_ENOUGH_POINTS_IN_SPLINE_PARTITION,
                  2, count($knots));
        }
        if (count($knots) - 1 != count($polynomials)) {
            throw MathRuntimeException::createIllegalArgumentException(
                  LocalizedFormats::$POLYNOMIAL_INTERPOLANTS_MISMATCH_SEGMENTS,
                  count($polynomials), count($knots));
        }
        if (!self::isStrictlyIncreasing($knots)) {
            throw MathRuntimeException::createIllegalArgumentException(
                  LocalizedFormats::$NOT_STRICTLY_INCREASING_KNOT_VALUES);
        }

        $this->n = count($knots) -1;
        $this->knots = $knots;
        $this->polynomials = $polynomials;
    }
    
    /**
     * Compute the value for the function.
     * See {@link PolynomialSplineFunction} for details on the algorithm for
     * computing the value of the function.</p>
     *
     * @param $v double the point for which the function value should be computed
     * @return double the value
     * @throws ArgumentOutsideDomainException if v is outside of the domain of
     * of the spline function (less than the smallest knot point or greater
     * than the largest knot point)
     */
    public function value($v){
        if ($v < $this->knots[0] || $v > $this->knots[$this->n]) {
            throw new ArgumentOutsideDomainException($v, $this->knots[0], $this->knots[$this->n]);
        }
        $i = Arrays::binarySearch($this->knots, $v);
        if ($i < 0) {
            $i = -$i - 2;
        }
        //This will handle the case where v is the last knot value
        //There are only n-1 polynomials, so if v is the last knot
        //then we will use the last polynomial to calculate the value.
        if ( $i >= count($this->polynomials)) {
            $i--;
        }
        
        return $this->polynomials[$i]->value($v - $this->knots[$i]);
    }    
    
    
    /**
     * Returns the derivative as a UnivariateRealFunction
     *
     * @return UnivariateRealFunction the derivative function
     */
    public function derivative() {
        throw new Exception('Not implemented yet');
    }
    
    /**
     * Determines if the given array is ordered in a strictly increasing
     * fashion.
     *
     * @param $x the array to examine.
     * @return boolean <code>true</code> if the elements in <code>x</code> are ordered
     * in a stricly increasing manner.  <code>false</code>, otherwise.
     */
    private static function isStrictlyIncreasing(array $x) {
        $cnt = count($x);
        for ($i = 1; $i < $cnt; ++$i) {
            if ($x[$i - 1] >= $x[$i]) {
                return false;
            }
        }
        return true;
    }    
}
