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
 * Implements a linear function for interpolation of real univariate functions.
 */
class LinearInterpolator implements UnivariateRealInterpolator {
    
    public function interpolate(array $x, array $y) {
        if (count($x) != count($y)) {
            throw new DimensionMismatchException(count($x), count($y));
        };
        
        if (count($x) < 2) {
            throw new NumberIsTooSmallException(LocalizedFormats::$NUMBER_OF_POINTS, count($x), 2, true);
        }
        
        // Number of intervals.  The number of data points is n + 1.
        /** @var $n int */
        $n = count($x) - 1;
        
        MathUtils::checkOrder($x);
        
        // Slope of the lines between the datapoints.
        $m = array();
        for ($i = 0; $i < $n; $i++) {
            $m[$i] = ($y[$i + 1] - $y[$i]) / ($x[$i + 1] - $x[$i]);
        }
        
        $polynomials = array();
        $coefficients = array();
        for ($i = 0; $i < $n; $i++) {
            $coefficients[0] = $y[$i];
            $coefficients[1] = $m[$i];
            $polynomials[$i] = new PolynomialFunction($coefficients);
        }
        
        return new PolynomialSplineFunction($x, $polynomials);
    }
}
