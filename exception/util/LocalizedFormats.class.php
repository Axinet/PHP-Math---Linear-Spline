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
 * (In Java was) Enumeration for localized messages formats used in exceptions messages.
 * <p>
 * The constants in this enumeration represent the available
 * formats as localized strings. These formats are intended to be
 * localized using simple properties files, using the constant
 * name as the key and the property value as the message format.
 * The source English format is provided in the constants themselves
 * to serve both as a reminder for developers to understand the parameters
 * needed by each format, as a basis for translators to create
 * localized properties files, and as a default format if some
 * translation is missing.
 * </p>
 */
class LocalizedFormats implements Localizable{

    /** Source English format. */
    /** @var string $sourceFormat */
    private $sourceFormat;
    
    /** Simple constructor.
     * @param $sourceFormat string source English format to use when no
     * localized version is available
     */
    private function __construct($sourceFormat) {
        $this->sourceFormat = $sourceFormat;
    }

    public function getSourceString() {
        return $this->sourceFormat;
    }
    
    public static $ARGUMENT_OUTSIDE_DOMAIN;
    public static $ARRAY_SIZES_SHOULD_HAVE_DIFFERENCE_1;
    public static $ARRAY_SUMS_TO_ZERO;
    public static $ASSYMETRIC_EIGEN_NOT_SUPPORTED;
    public static $AT_LEAST_ONE_COLUMN;
    public static $AT_LEAST_ONE_ROW;
    public static $BANDWIDTH_OUT_OF_INTERVAL;
    public static $BINOMIAL_INVALID_PARAMETERS_ORDER;
    public static $BINOMIAL_NEGATIVE_PARAMETER;
    public static $CANNOT_CLEAR_STATISTIC_CONSTRUCTED_FROM_EXTERNAL_MOMENTS;
    public static $CANNOT_COMPUTE_0TH_ROOT_OF_UNITY;
    public static $CANNOT_COMPUTE_BETA_DENSITY_AT_0_FOR_SOME_ALPHA;
    public static $CANNOT_COMPUTE_BETA_DENSITY_AT_1_FOR_SOME_BETA;
    public static $CANNOT_COMPUTE_NTH_ROOT_FOR_NEGATIVE_N;
    public static $CANNOT_CONVERT_OBJECT_TO_FRACTION;
    public static $CANNOT_DISCARD_NEGATIVE_NUMBER_OF_ELEMENTS;
    public static $CANNOT_FORMAT_INSTANCE_AS_3D_VECTOR;
    public static $CANNOT_FORMAT_INSTANCE_AS_COMPLEX;
    public static $CANNOT_FORMAT_INSTANCE_AS_REAL_VECTOR;
    public static $CANNOT_FORMAT_OBJECT_TO_FRACTION;
    public static $CANNOT_INCREMENT_STATISTIC_CONSTRUCTED_FROM_EXTERNAL_MOMENTS;
    public static $CANNOT_NORMALIZE_A_ZERO_NORM_VECTOR;
    public static $CANNOT_RETRIEVE_AT_NEGATIVE_INDEX;
    public static $CANNOT_SET_AT_NEGATIVE_INDEX;
    public static $CANNOT_SUBSTITUTE_ELEMENT_FROM_EMPTY_ARRAY;
    public static $CANNOT_TRANSFORM_TO_DOUBLE;
    public static $CARDAN_ANGLES_SINGULARITY;
    public static $CLASS_DOESNT_IMPLEMENT_COMPARABLE;
    public static $CLOSEST_ORTHOGONAL_MATRIX_HAS_NEGATIVE_DETERMINANT;
    public static $COLUMN_INDEX_OUT_OF_RANGE;
    public static $CONTINUED_FRACTION_INFINITY_DIVERGENCE;
    public static $CONTINUED_FRACTION_NAN_DIVERGENCE;
    public static $CONTRACTION_CRITERIA_SMALLER_THAN_EXPANSION_FACTOR;
    public static $CONTRACTION_CRITERIA_SMALLER_THAN_ONE;
    public static $CONVERGENCE_FAILED;
    public static $CUMULATIVE_PROBABILITY_RETURNED_NAN;
    public static $DIFFERENT_ROWS_LENGTHS;
    public static $DIGEST_NOT_INITIALIZED;
    public static $DIMENSIONS_MISMATCH_2x2;
    public static $DIMENSIONS_MISMATCH_SIMPLE;
    public static $DISCRETE_CUMULATIVE_PROBABILITY_RETURNED_NAN;
    public static $DISTRIBUTION_NOT_LOADED;
    public static $DUPLICATED_ABSCISSA;
    public static $EMPTY_CLUSTER_IN_K_MEANS;
    public static $EMPTY_POLYNOMIALS_COEFFICIENTS_ARRAY;
    public static $EMPTY_SELECTED_COLUMN_INDEX_ARRAY;
    public static $EMPTY_SELECTED_ROW_INDEX_ARRAY;
    public static $EMPTY_STRING_FOR_IMAGINARY_CHARACTER;
    public static $ENDPOINTS_NOT_AN_INTERVAL;
    public static $EQUAL_VERTICES_IN_SIMPLEX;
    public static $EULER_ANGLES_SINGULARITY;
    public static $EVALUATION_FAILED;
    public static $EXPANSION_FACTOR_SMALLER_THAN_ONE;
    public static $FACTORIAL_NEGATIVE_PARAMETER;
    public static $FAILED_BRACKETING;
    public static $FAILED_FRACTION_CONVERSION;
    public static $FIRST_COLUMNS_NOT_INITIALIZED_YET;
    public static $FIRST_ELEMENT_NOT_ZERO;
    public static $FIRST_ROWS_NOT_INITIALIZED_YET;
    public static $FRACTION_CONVERSION_OVERFLOW;
    public static $FUNCTION_NOT_DIFFERENTIABLE;
    public static $FUNCTION_NOT_POLYNOMIAL;
    public static $GCD_OVERFLOW_32_BITS;
    public static $GCD_OVERFLOW_64_BITS;
    public static $HOLE_BETWEEN_MODELS_TIME_RANGES;
    public static $IDENTICAL_ABSCISSAS_DIVISION_BY_ZERO;
    public static $INDEX_LARGER_THAN_MAX;
    public static $INDEX_NOT_POSITIVE;
    public static $INDEX_OUT_OF_RANGE;
    public static $INFINITE_ARRAY_ELEMENT;
    public static $INFINITE_VALUE_CONVERSION;
    public static $INITIAL_CAPACITY_NOT_POSITIVE;
    public static $INITIAL_COLUMN_AFTER_FINAL_COLUMN;
    public static $INITIAL_ROW_AFTER_FINAL_ROW;
    public static $INPUT_DATA_FROM_UNSUPPORTED_DATASOURCE;
    public static $INSTANCES_NOT_COMPARABLE_TO_EXISTING_VALUES;
    public static $INSUFFICIENT_DATA_FOR_T_STATISTIC;
    public static $INSUFFICIENT_DIMENSION;
    public static $INSUFFICIENT_OBSERVED_POINTS_IN_SAMPLE;
    public static $INSUFFICIENT_ROWS_AND_COLUMNS;
    public static $INTEGRATION_METHOD_NEEDS_AT_LEAST_ONE_PREVIOUS_POINT;
    public static $INTERNAL_ERROR;
    public static $INVALID_BRACKETING_PARAMETERS;
    public static $INVALID_INTERVAL_INITIAL_VALUE_PARAMETERS;
    public static $INVALID_ITERATIONS_LIMITS;
    public static $INVALID_MAX_ITERATIONS;
    public static $INVALID_REGRESSION_ARRAY;
    public static $INVALID_ROUNDING_METHOD;
    public static $ITERATOR_EXHAUSTED;
    public static $LCM_OVERFLOW_32_BITS;
    public static $LCM_OVERFLOW_64_BITS;
    public static $LIST_OF_CHROMOSOMES_BIGGER_THAN_POPULATION_SIZE;
    public static $LOESS_EXPECTS_AT_LEAST_ONE_POINT;
    public static $LOWER_BOUND_NOT_BELOW_UPPER_BOUND;
    public static $LOWER_ENDPOINT_ABOVE_UPPER_ENDPOINT;
    public static $MAP_MODIFIED_WHILE_ITERATING;
    public static $MAX_EVALUATIONS_EXCEEDED;
    public static $MAX_ITERATIONS_EXCEEDED;
    public static $MINIMAL_STEPSIZE_REACHED_DURING_INTEGRATION;
    public static $MISMATCHED_LOESS_ABSCISSA_ORDINATE_ARRAYS;
    public static $NAN_ELEMENT_AT_INDEX;
    public static $NAN_VALUE_CONVERSION;
    public static $NEGATIVE_BRIGHTNESS_EXPONENT;
    public static $NEGATIVE_COMPLEX_MODULE;
    public static $NEGATIVE_ELEMENT_AT_2D_INDEX;
    public static $NEGATIVE_ELEMENT_AT_INDEX;
    public static $NEGATIVE_NUMBER_OF_SUCCESSES;
    public static $NEGATIVE_NUMBER_OF_TRIALS;
    public static $NEGATIVE_ROBUSTNESS_ITERATIONS;
    public static $START_POSITION;
    public static $NON_CONVERGENT_CONTINUED_FRACTION;
    public static $NON_POSITIVE_MICROSPHERE_ELEMENTS;
    public static $NON_POSITIVE_POLYNOMIAL_DEGREE;
    public static $NON_REAL_FINITE_ABSCISSA;
    public static $NON_REAL_FINITE_ORDINATE;
    public static $NON_REAL_FINITE_WEIGHT;
    public static $NON_SQUARE_MATRIX;
    public static $NORMALIZE_INFINITE;
    public static $NORMALIZE_NAN;
    public static $NOT_ADDITION_COMPATIBLE_MATRICES;
    public static $NOT_DECREASING_NUMBER_OF_POINTS;
    public static $NOT_DECREASING_SEQUENCE;
    public static $NOT_ENOUGH_DATA_FOR_NUMBER_OF_PREDICTORS;
    public static $NOT_ENOUGH_POINTS_IN_SPLINE_PARTITION;
    public static $NOT_INCREASING_NUMBER_OF_POINTS;
    public static $NOT_INCREASING_SEQUENCE;
    public static $NOT_MULTIPLICATION_COMPATIBLE_MATRICES;
    public static $NOT_OVERRIDEN;
    public static $NOT_POSITIVE_ALPHA;
    public static $NOT_POSITIVE_BETA;
    public static $NOT_POSITIVE_COLUMNDIMENSION;
    public static $NOT_POSITIVE_DEFINITE_MATRIX;
    public static $NOT_POSITIVE_DEGREES_OF_FREEDOM;
    public static $NOT_POSITIVE_ELEMENT_AT_INDEX;
    public static $NOT_POSITIVE_EXPONENT;
    public static $NOT_POSITIVE_LENGTH;
    public static $LENGTH;
    public static $NOT_POSITIVE_MEAN;
    public static $MEAN;
    public static $NOT_POSITIVE_NUMBER_OF_SAMPLES;
    public static $NUMBER_OF_SAMPLES;
    public static $NOT_POSITIVE_PERMUTATION;
    public static $PERMUTATION_SIZE;
    public static $NOT_POSITIVE_POISSON_MEAN;
    public static $NOT_POSITIVE_POPULATION_SIZE;
    public static $NOT_POSITIVE_ROW_DIMENSION;
    public static $NOT_POSITIVE_SAMPLE_SIZE;
    public static $NOT_POSITIVE_SCALE;
    public static $NOT_POSITIVE_SHAPE;
    public static $NOT_POSITIVE_STANDARD_DEVIATION;
    public static $STANDARD_DEVIATION;
    public static $NOT_POSITIVE_UPPER_BOUND;
    public static $NOT_POSITIVE_WINDOW_SIZE;
    public static $NOT_POWER_OF_TWO;
    public static $NOT_POWER_OF_TWO_CONSIDER_PADDING;
    public static $NOT_POWER_OF_TWO_PLUS_ONE;
    public static $NOT_STRICTLY_DECREASING_NUMBER_OF_POINTS;
    public static $NOT_STRICTLY_DECREASING_SEQUENCE;
    public static $NOT_STRICTLY_INCREASING_KNOT_VALUES;
    public static $NOT_STRICTLY_INCREASING_NUMBER_OF_POINTS;
    public static $NOT_STRICTLY_INCREASING_SEQUENCE;
    public static $NOT_SUBTRACTION_COMPATIBLE_MATRICES;
    public static $NOT_SYMMETRIC_MATRIX;
    public static $NO_BIN_SELECTED;
    public static $NO_CONVERGENCE_WITH_ANY_START_POINT;
    public static $NO_DATA;
    public static $NO_DEGREES_OF_FREEDOM;
    public static $NO_DENSITY_FOR_THIS_DISTRIBUTION;
    public static $NO_FEASIBLE_SOLUTION;
    public static $NO_OPTIMUM_COMPUTED_YET;
    public static $NO_RESULT_AVAILABLE;
    public static $NO_SUCH_MATRIX_ENTRY;
    public static $NULL_NOT_ALLOWED;
    public static $COVARIANCE_MATRIX;
    public static $DENOMINATOR;
    public static $DENOMINATOR_FORMAT;
    public static $FRACTION;
    public static $FFUNCTION;
    public static $IMAGINARY_FORMAT;
    public static $INPUT_ARRAY;
    public static $NUMERATOR;
    public static $NUMERATOR_FORMAT;
    public static $OBJECT_TRANSFORMATION;
    public static $REAL_FORMAT;
    public static $WHOLE_FORMAT;
    public static $NUMBER_TOO_LARGE;
    public static $NUMBER_TOO_SMALL;
    public static $NUMBER_TOO_LARGE_BOUND_EXCLUDED;
    public static $NUMBER_TOO_SMALL_BOUND_EXCLUDED;
    public static $NUMBER_OF_SUCCESS_LARGER_THAN_POPULATION_SIZE;
    public static $NUMERATOR_OVERFLOW_AFTER_MULTIPLY;
    public static $N_POINTS_GAUSS_LEGENDRE_INTEGRATOR_NOT_SUPPORTED;
    public static $OBSERVED_COUNTS_ALL_ZERO;
    public static $OBSERVED_COUNTS_BOTTH_ZERO_FOR_ENTRY;
    public static $OUT_OF_BOUNDS_QUANTILE_VALUE;
    public static $OUT_OF_BOUND_SIGNIFICANCE_LEVEL;
    public static $OUT_OF_ORDER_ABSCISSA_ARRAY;
    public static $OUT_OF_RANGE_ROOT_OF_UNITY_INDEX;
    public static $OUT_OF_RANGE_SIMPLE;
    public static $OVERFLOW_IN_FRACTION;
    public static $OVERFLOW_IN_ADDITION;
    public static $OVERFLOW_IN_SUBTRACTION;
    public static $PERCENTILE_IMPLEMENTATION_CANNOT_ACCESS_METHOD;
    public static $PERCENTILE_IMPLEMENTATION_UNSUPPORTED_METHOD;
    public static $PERMUTATION_EXCEEDS_N;
    public static $POLYNOMIAL_INTERPOLANTS_MISMATCH_SEGMENTS;
    public static $POPULATION_LIMIT_NOT_POSITIVE;
    public static $POSITION_SIZE_MISMATCH_INPUT_ARRAY;
    public static $POWER_NEGATIVE_PARAMETERS;
    public static $PROPAGATION_DIRECTION_MISMATCH;
    public static $RANDOMKEY_MUTATION_WRONG_CLASS;
    public static $ROOTS_OF_UNITY_NOT_COMPUTED_YET;
    public static $ROTATION_MATRIX_DIMENSIONS;
    public static $ROW_INDEX_OUT_OF_RANGE;
    public static $SAME_SIGN_AT_ENDPOINTS;
    public static $SAMPLE_SIZE_EXCEEDS_COLLECTION_SIZE;
    public static $SAMPLE_SIZE_LARGER_THAN_POPULATION_SIZE;
    public static $SIMPLEX_NEED_ONE_POINT;
    public static $SIMPLE_MESSAGE;
    public static $SINGULAR_MATRIX;
    public static $SUBARRAY_ENDS_AFTER_ARRAY_END;
    public static $TOO_LARGE_CUTOFF_SINGULAR_VALUE;
    public static $TOO_MANY_ELEMENTS_TO_DISCARD_FROM_ARRAY;
    public static $TOO_SMALL_BANDWIDTH;
    public static $TOO_SMALL_COST_RELATIVE_TOLERANCE;
    public static $TOO_SMALL_INTEGRATION_INTERVAL;
    public static $TOO_SMALL_ORTHOGONALITY_TOLERANCE;
    public static $TOO_SMALL_PARAMETERS_RELATIVE_TOLERANCE;
    public static $TWO_OR_MORE_CATEGORIES_REQUIRED;
    public static $TWO_OR_MORE_VALUES_IN_CATEGORY_REQUIRED;
    public static $UNABLE_TO_BRACKET_OPTIMUM_IN_LINE_SEARCH;
    public static $UNABLE_TO_COMPUTE_COVARIANCE_SINGULAR_PROBLEM;
    public static $UNABLE_TO_FIRST_GUESS_HARMONIC_COEFFICIENTS;
    public static $UNABLE_TO_ORTHOGONOLIZE_MATRIX;
    public static $UNABLE_TO_PERFORM_QR_DECOMPOSITION_ON_JACOBIAN;
    public static $UNABLE_TO_SOLVE_SINGULAR_PROBLEM;
    public static $UNBOUNDED_SOLUTION;
    public static $UNKNOWN_MODE;
    public static $UNPARSEABLE_3D_VECTOR;
    public static $UNPARSEABLE_COMPLEX_NUMBER;
    public static $UNPARSEABLE_FRACTION_NUMBER;
    public static $UNPARSEABLE_REAL_VECTOR;
    public static $UNSUPPORTED_EXPANSION_MODE;
    public static $UNSUPPORTED_OPERATION;
    public static $USER_EXCEPTION;
    public static $URL_CONTAINS_NO_DATA;
    public static $VALUES_ADDED_BEFORE_CONFIGURING_STATISTIC;
    public static $VECTOR_LENGTH_MISMATCH;
    public static $VECTOR_MUST_HAVE_AT_LEAST_ONE_ELEMENT;
    public static $WEIGHT_AT_LEAST_ONE_NON_ZERO;
    public static $WRONG_BLOCK_LENGTH;
    public static $WRONG_NUMBER_OF_POINTS;
    public static $NUMBER_OF_POINTS;
    public static $ZERO_DENOMINATOR;
    public static $ZERO_DENOMINATOR_IN_FRACTION;
    public static $ZERO_FRACTION_TO_DIVIDE_BY;
    public static $ZERO_NORM;
    public static $ZERO_NORM_FOR_ROTATION_AXIS;
    public static $ZERO_NORM_FOR_ROTATION_DEFINING_VECTOR;
    public static $ZERO_NOT_ALLOWED;
    
    public static function init(){
        self::$ARGUMENT_OUTSIDE_DOMAIN = new LocalizedFormats('Argument {0} outside domain [{1} ; {2}]');
        self::$ARRAY_SIZES_SHOULD_HAVE_DIFFERENCE_1 = new LocalizedFormats('array sizes should have difference 1 ({0} != {1} + 1)');
        self::$ARRAY_SUMS_TO_ZERO = new LocalizedFormats('array sums to zero');
        self::$ASSYMETRIC_EIGEN_NOT_SUPPORTED = new LocalizedFormats('eigen decomposition of assymetric matrices not supported yet');
        self::$AT_LEAST_ONE_COLUMN = new LocalizedFormats('matrix must have at least one column');
        self::$AT_LEAST_ONE_ROW = new LocalizedFormats('matrix must have at least one row');
        self::$BANDWIDTH_OUT_OF_INTERVAL = new LocalizedFormats('bandwidth must be in the interval [0,1], but got {0}');
        self::$BINOMIAL_INVALID_PARAMETERS_ORDER = new LocalizedFormats('must have n >= k for binomial coefficient (n,k), got n = {0}, k = {1}');
        self::$BINOMIAL_NEGATIVE_PARAMETER = new LocalizedFormats('must have n >= 0 for binomial coefficient (n,k), got n = {0}');
        self::$CANNOT_CLEAR_STATISTIC_CONSTRUCTED_FROM_EXTERNAL_MOMENTS = new LocalizedFormats('statistics constructed from external moments cannot be cleared');
        self::$CANNOT_COMPUTE_0TH_ROOT_OF_UNITY = new LocalizedFormats('cannot compute 0-th root of unity, indefinite result');
        self::$CANNOT_COMPUTE_BETA_DENSITY_AT_0_FOR_SOME_ALPHA = new LocalizedFormats('cannot compute beta density at 0 when alpha = {0,number}');
        self::$CANNOT_COMPUTE_BETA_DENSITY_AT_1_FOR_SOME_BETA = new LocalizedFormats('cannot compute beta density at 1 when beta = %.3g');
        self::$CANNOT_COMPUTE_NTH_ROOT_FOR_NEGATIVE_N = new LocalizedFormats('cannot compute nth root for null or negative n: {0}');
        self::$CANNOT_CONVERT_OBJECT_TO_FRACTION = new LocalizedFormats('cannot convert given object to a fraction number: {0}');
        self::$CANNOT_DISCARD_NEGATIVE_NUMBER_OF_ELEMENTS = new LocalizedFormats('cannot discard a negative number of elements ({0})');
        self::$CANNOT_FORMAT_INSTANCE_AS_3D_VECTOR = new LocalizedFormats('cannot format a {0} instance as a 3D vector');
        self::$CANNOT_FORMAT_INSTANCE_AS_COMPLEX = new LocalizedFormats('cannot format a {0} instance as a complex number');
        self::$CANNOT_FORMAT_INSTANCE_AS_REAL_VECTOR = new LocalizedFormats('cannot format a {0} instance as a real vector');
        self::$CANNOT_FORMAT_OBJECT_TO_FRACTION = new LocalizedFormats('cannot format given object as a fraction number');
        self::$CANNOT_INCREMENT_STATISTIC_CONSTRUCTED_FROM_EXTERNAL_MOMENTS = new LocalizedFormats('statistics constructed from external moments cannot be incremented');
        self::$CANNOT_NORMALIZE_A_ZERO_NORM_VECTOR = new LocalizedFormats('cannot normalize a zero norm vector');
        self::$CANNOT_RETRIEVE_AT_NEGATIVE_INDEX = new LocalizedFormats('elements cannot be retrieved from a negative array index {0}');
        self::$CANNOT_SET_AT_NEGATIVE_INDEX = new LocalizedFormats('cannot set an element at a negative index {0}');
        self::$CANNOT_SUBSTITUTE_ELEMENT_FROM_EMPTY_ARRAY = new LocalizedFormats('cannot substitute an element from an empty array');
        self::$CANNOT_TRANSFORM_TO_DOUBLE = new LocalizedFormats('Conversion Exception in Transformation: {0}');
        self::$CARDAN_ANGLES_SINGULARITY = new LocalizedFormats('Cardan angles singularity');
        self::$CLASS_DOESNT_IMPLEMENT_COMPARABLE = new LocalizedFormats('class ({0}) does not implement Comparable');
        self::$CLOSEST_ORTHOGONAL_MATRIX_HAS_NEGATIVE_DETERMINANT = new LocalizedFormats('the closest orthogonal matrix has a negative determinant {0}');
        self::$COLUMN_INDEX_OUT_OF_RANGE = new LocalizedFormats('column index {0} out of allowed range [{1}, {2}]');
        self::$CONTINUED_FRACTION_INFINITY_DIVERGENCE = new LocalizedFormats('Continued fraction convergents diverged to +/- infinity for value {0}');
        self::$CONTINUED_FRACTION_NAN_DIVERGENCE = new LocalizedFormats('Continued fraction diverged to NaN for value {0}');
        self::$CONTRACTION_CRITERIA_SMALLER_THAN_EXPANSION_FACTOR = new LocalizedFormats('contraction criteria ({0}) smaller than the expansion factor ({1}).  This would lead to a never ending loop of expansion and contraction as a newly expanded internal storage array would immediately satisfy the criteria for contraction.');
        self::$CONTRACTION_CRITERIA_SMALLER_THAN_ONE = new LocalizedFormats('contraction criteria smaller than one ({0}).  This would lead to a never ending loop of expansion and contraction as an internal storage array length equal to the number of elements would satisfy the contraction criteria.');
        self::$CONVERGENCE_FAILED = new LocalizedFormats('convergence failed');
        self::$CUMULATIVE_PROBABILITY_RETURNED_NAN = new LocalizedFormats('Cumulative probability function returned NaN for argument {0} p = {1}');
        self::$DIFFERENT_ROWS_LENGTHS = new LocalizedFormats('some rows have length {0} while others have length {1}');
        self::$DIGEST_NOT_INITIALIZED = new LocalizedFormats('digest not initialized');
        self::$DIMENSIONS_MISMATCH_2x2 = new LocalizedFormats('dimensions mismatch: got {0}x{1} but expected {2}x{3}');
        self::$DIMENSIONS_MISMATCH_SIMPLE = new LocalizedFormats('dimensions mismatch {0} != {1}'); /* keep */
        self::$DISCRETE_CUMULATIVE_PROBABILITY_RETURNED_NAN = new LocalizedFormats('Discrete cumulative probability function returned NaN for argument {0}');
        self::$DISTRIBUTION_NOT_LOADED = new LocalizedFormats('distribution not loaded');
        self::$DUPLICATED_ABSCISSA = new LocalizedFormats('Abscissa {0} is duplicated at both indices {1} and {2}');
        self::$EMPTY_CLUSTER_IN_K_MEANS = new LocalizedFormats('empty cluster in k-means');
        self::$EMPTY_POLYNOMIALS_COEFFICIENTS_ARRAY = new LocalizedFormats('empty polynomials coefficients array'); /* keep */
        self::$EMPTY_SELECTED_COLUMN_INDEX_ARRAY = new LocalizedFormats('empty selected column index array');
        self::$EMPTY_SELECTED_ROW_INDEX_ARRAY = new LocalizedFormats('empty selected row index array');
        self::$EMPTY_STRING_FOR_IMAGINARY_CHARACTER = new LocalizedFormats('empty string for imaginary character');
        self::$ENDPOINTS_NOT_AN_INTERVAL = new LocalizedFormats('endpoints do not specify an interval: [{0}, {1}]');
        self::$EQUAL_VERTICES_IN_SIMPLEX = new LocalizedFormats('equal vertices {0} and {1} in simplex configuration');
        self::$EULER_ANGLES_SINGULARITY = new LocalizedFormats('Euler angles singularity');
        self::$EVALUATION_FAILED = new LocalizedFormats('evaluation failed for argument = {0}');
        self::$EXPANSION_FACTOR_SMALLER_THAN_ONE = new LocalizedFormats('expansion factor smaller than one ({0})');
        self::$FACTORIAL_NEGATIVE_PARAMETER = new LocalizedFormats('must have n >= 0 for n!, got n = {0}');
        self::$FAILED_BRACKETING = new LocalizedFormats('number of iterations={0}, maximum iterations={1}, initial={2}, lower bound={3}, upper bound={4}, final a value={5}, final b value={6}, f(a)={7}, f(b)={8}');
        self::$FAILED_FRACTION_CONVERSION = new LocalizedFormats('Unable to convert {0} to fraction after {1} iterations');
        self::$FIRST_COLUMNS_NOT_INITIALIZED_YET = new LocalizedFormats('first {0} columns are not initialized yet');
        self::$FIRST_ELEMENT_NOT_ZERO = new LocalizedFormats('first element is not 0: {0}');
        self::$FIRST_ROWS_NOT_INITIALIZED_YET = new LocalizedFormats('first {0} rows are not initialized yet');
        self::$FRACTION_CONVERSION_OVERFLOW = new LocalizedFormats('Overflow trying to convert {0} to fraction ({1}/{2})');
        self::$FUNCTION_NOT_DIFFERENTIABLE = new LocalizedFormats('function is not differentiable');
        self::$FUNCTION_NOT_POLYNOMIAL = new LocalizedFormats('function is not polynomial');
        self::$GCD_OVERFLOW_32_BITS = new LocalizedFormats('overflow: gcd({0}, {1}) is 2^31');
        self::$GCD_OVERFLOW_64_BITS = new LocalizedFormats('overflow: gcd({0}, {1}) is 2^63');
        self::$HOLE_BETWEEN_MODELS_TIME_RANGES = new LocalizedFormats('{0} wide hole between models time ranges');
        self::$IDENTICAL_ABSCISSAS_DIVISION_BY_ZERO = new LocalizedFormats('identical abscissas x[{0}] == x[{1}] == {2} cause division by zero');
        self::$INDEX_LARGER_THAN_MAX = new LocalizedFormats('the index specified: {0} is larger than the current maximal index {1}');
        self::$INDEX_NOT_POSITIVE = new LocalizedFormats('index ({0}) is not positive');
        self::$INDEX_OUT_OF_RANGE = new LocalizedFormats('index {0} out of allowed range [{1}, {2}]');
        self::$INFINITE_ARRAY_ELEMENT = new LocalizedFormats('Array contains an infinite element, {0} at index {1}');
        self::$INFINITE_VALUE_CONVERSION = new LocalizedFormats('cannot convert infinite value');
        self::$INITIAL_CAPACITY_NOT_POSITIVE = new LocalizedFormats('initial capacity ({0}) is not positive');
        self::$INITIAL_COLUMN_AFTER_FINAL_COLUMN = new LocalizedFormats('initial column {0} after final column {1}');
        self::$INITIAL_ROW_AFTER_FINAL_ROW = new LocalizedFormats('initial row {0} after final row {1}');
        self::$INPUT_DATA_FROM_UNSUPPORTED_DATASOURCE = new LocalizedFormats('input data comes from unsupported datasource: {0}, supported sources: {1}, {2}');
        self::$INSTANCES_NOT_COMPARABLE_TO_EXISTING_VALUES = new LocalizedFormats('instance of class {0} not comparable to existing values');
        self::$INSUFFICIENT_DATA_FOR_T_STATISTIC = new LocalizedFormats('insufficient data for t statistic, needs at least 2, got {0}');
        self::$INSUFFICIENT_DIMENSION = new LocalizedFormats('insufficient dimension {0}, must be at least {1}');
        self::$INSUFFICIENT_OBSERVED_POINTS_IN_SAMPLE = new LocalizedFormats('sample contains {0} observed points, at least {1} are required');
        self::$INSUFFICIENT_ROWS_AND_COLUMNS = new LocalizedFormats('insufficient data: only {0} rows and {1} columns.');
        self::$INTEGRATION_METHOD_NEEDS_AT_LEAST_ONE_PREVIOUS_POINT = new LocalizedFormats('{0} method needs at least one previous point');
        self::$INTERNAL_ERROR = new LocalizedFormats('internal error, please fill a bug report at {0}');
        self::$INVALID_BRACKETING_PARAMETERS = new LocalizedFormats('invalid bracketing parameters:  lower bound={0},  initial={1}, upper bound={2}');
        self::$INVALID_INTERVAL_INITIAL_VALUE_PARAMETERS = new LocalizedFormats('invalid interval, initial value parameters:  lower={0}, initial={1}, upper={2}');
        self::$INVALID_ITERATIONS_LIMITS = new LocalizedFormats('invalid iteration limits: min={0}, max={1}');
        self::$INVALID_MAX_ITERATIONS = new LocalizedFormats('bad value for maximum iterations number: {0}');
        self::$INVALID_REGRESSION_ARRAY = new LocalizedFormats('input data array length = {0} does not match the number of observations = {1} and the number of regressors = {2}');
        self::$INVALID_ROUNDING_METHOD = new LocalizedFormats('invalid rounding method {0}, valid methods: {1} ({2}), {3} ({4}), {5} ({6}), {7} ({8}), {9} ({10}), {11} ({12}), {13} ({14}), {15} ({16})');
        self::$ITERATOR_EXHAUSTED = new LocalizedFormats('iterator exhausted');
        self::$LCM_OVERFLOW_32_BITS = new LocalizedFormats('overflow: lcm({0}, {1}) is 2^31');
        self::$LCM_OVERFLOW_64_BITS = new LocalizedFormats('overflow: lcm({0}, {1}) is 2^63');
        self::$LIST_OF_CHROMOSOMES_BIGGER_THAN_POPULATION_SIZE = new LocalizedFormats('list of chromosomes bigger than maxPopulationSize');
        self::$LOESS_EXPECTS_AT_LEAST_ONE_POINT = new LocalizedFormats('Loess expects at least 1 point');
        self::$LOWER_BOUND_NOT_BELOW_UPPER_BOUND = new LocalizedFormats('lower bound ({0}) must be strictly less than upper bound ({1})'); /* keep */
        self::$LOWER_ENDPOINT_ABOVE_UPPER_ENDPOINT = new LocalizedFormats('lower endpoint ({0}) must be less than or equal to upper endpoint ({1})');
        self::$MAP_MODIFIED_WHILE_ITERATING = new LocalizedFormats('map has been modified while iterating');
        self::$MAX_EVALUATIONS_EXCEEDED = new LocalizedFormats('maximal number of evaluations ({0}) exceeded');
        self::$MAX_ITERATIONS_EXCEEDED = new LocalizedFormats('maximal number of iterations ({0}) exceeded');
        self::$MINIMAL_STEPSIZE_REACHED_DURING_INTEGRATION = new LocalizedFormats('minimal step size ({0,number,0.00E00}) reached, integration needs {1,number,0.00E00}');
        self::$MISMATCHED_LOESS_ABSCISSA_ORDINATE_ARRAYS = new LocalizedFormats('Loess expects the abscissa and ordinate arrays to be of the same size, but got {0} abscissae and {1} ordinatae');
        self::$NAN_ELEMENT_AT_INDEX = new LocalizedFormats('element {0} is NaN');
        self::$NAN_VALUE_CONVERSION = new LocalizedFormats('cannot convert NaN value');
        self::$NEGATIVE_BRIGHTNESS_EXPONENT = new LocalizedFormats('brightness exponent should be positive or null, but got {0}');
        self::$NEGATIVE_COMPLEX_MODULE = new LocalizedFormats('negative complex module {0}');
        self::$NEGATIVE_ELEMENT_AT_2D_INDEX = new LocalizedFormats('element ({0}, {1}) is negative: {2}');
        self::$NEGATIVE_ELEMENT_AT_INDEX = new LocalizedFormats('element {0} is negative: {1}');
        self::$NEGATIVE_NUMBER_OF_SUCCESSES = new LocalizedFormats('number of successes must be non-negative ({0})');
        self::$NEGATIVE_NUMBER_OF_TRIALS = new LocalizedFormats('number of trials must be non-negative ({0})');
        self::$NEGATIVE_ROBUSTNESS_ITERATIONS = new LocalizedFormats('the number of robustness iterations must be non-negative, but got {0}');
        self::$START_POSITION = new LocalizedFormats('start position ({0})'); /* keep */
        self::$NON_CONVERGENT_CONTINUED_FRACTION = new LocalizedFormats('Continued fraction convergents failed to converge for value {0}');
        self::$NON_POSITIVE_MICROSPHERE_ELEMENTS = new LocalizedFormats('number of microsphere elements must be positive, but got {0}');
        self::$NON_POSITIVE_POLYNOMIAL_DEGREE = new LocalizedFormats('polynomial degree must be positive: degree={0}');
        self::$NON_REAL_FINITE_ABSCISSA = new LocalizedFormats('all abscissae must be finite real numbers, but {0}-th is {1}');
        self::$NON_REAL_FINITE_ORDINATE = new LocalizedFormats('all ordinatae must be finite real numbers, but {0}-th is {1}');
        self::$NON_REAL_FINITE_WEIGHT = new LocalizedFormats('all weights must be finite real numbers, but {0}-th is {1}');
        self::$NON_SQUARE_MATRIX = new LocalizedFormats('a {0}x{1} matrix was provided instead of a square matrix');
        self::$NORMALIZE_INFINITE = new LocalizedFormats('Cannot normalize to an infinite value');
        self::$NORMALIZE_NAN = new LocalizedFormats('Cannot normalize to NaN');
        self::$NOT_ADDITION_COMPATIBLE_MATRICES = new LocalizedFormats('{0}x{1} and {2}x{3} matrices are not addition compatible');
        self::$NOT_DECREASING_NUMBER_OF_POINTS = new LocalizedFormats('points {0} and {1} are not decreasing ({2} < {3})');
        self::$NOT_DECREASING_SEQUENCE = new LocalizedFormats('points {3} and {2} are not decreasing ({1} < {0})'); /* keep */
        self::$NOT_ENOUGH_DATA_FOR_NUMBER_OF_PREDICTORS = new LocalizedFormats('not enough data ({0} rows) for this many predictors ({1} predictors)');
        self::$NOT_ENOUGH_POINTS_IN_SPLINE_PARTITION = new LocalizedFormats('spline partition must have at least {0} points, got {1}');
        self::$NOT_INCREASING_NUMBER_OF_POINTS = new LocalizedFormats('points {0} and {1} are not increasing ({2} > {3})');
        self::$NOT_INCREASING_SEQUENCE = new LocalizedFormats('points {3} and {2} are not increasing ({1} > {0})'); /* keep */
        self::$NOT_MULTIPLICATION_COMPATIBLE_MATRICES = new LocalizedFormats('{0}x{1} and {2}x{3} matrices are not multiplication compatible');
        self::$NOT_OVERRIDEN = new LocalizedFormats('method not overriden');
        self::$NOT_POSITIVE_ALPHA = new LocalizedFormats('alpha must be positive ({0})');
        self::$NOT_POSITIVE_BETA = new LocalizedFormats('beta must be positive ({0})');
        self::$NOT_POSITIVE_COLUMNDIMENSION = new LocalizedFormats('invalid column dimension: {0} (must be positive)');
        self::$NOT_POSITIVE_DEFINITE_MATRIX = new LocalizedFormats('not positive definite matrix');
        self::$NOT_POSITIVE_DEGREES_OF_FREEDOM = new LocalizedFormats('degrees of freedom must be positive ({0})');
        self::$NOT_POSITIVE_ELEMENT_AT_INDEX = new LocalizedFormats('element {0} is not positive: {1}');
        self::$NOT_POSITIVE_EXPONENT = new LocalizedFormats('invalid exponent {0} (must be positive)');
        self::$NOT_POSITIVE_LENGTH = new LocalizedFormats('length must be positive ({0})');
        self::$LENGTH = new LocalizedFormats('length ({0})'); /* keep */
        self::$NOT_POSITIVE_MEAN = new LocalizedFormats('mean must be positive ({0})');
        self::$MEAN = new LocalizedFormats('mean ({0})'); /* keep */
        self::$NOT_POSITIVE_NUMBER_OF_SAMPLES = new LocalizedFormats('number of sample is not positive: {0}');
        self::$NUMBER_OF_SAMPLES = new LocalizedFormats('number of samples ({0})'); /* keep */
        self::$NOT_POSITIVE_PERMUTATION = new LocalizedFormats('permutation k ({0}) must be positive');
        self::$PERMUTATION_SIZE = new LocalizedFormats('permutation size ({0}'); /* keep */
        self::$NOT_POSITIVE_POISSON_MEAN = new LocalizedFormats('the Poisson mean must be positive ({0})');
        self::$NOT_POSITIVE_POPULATION_SIZE = new LocalizedFormats('population size must be positive ({0})');
        self::$NOT_POSITIVE_ROW_DIMENSION = new LocalizedFormats('invalid row dimension: {0} (must be positive)');
        self::$NOT_POSITIVE_SAMPLE_SIZE = new LocalizedFormats('sample size must be positive ({0})');
        self::$NOT_POSITIVE_SCALE = new LocalizedFormats('scale must be positive ({0})');
        self::$NOT_POSITIVE_SHAPE = new LocalizedFormats('shape must be positive ({0})');
        self::$NOT_POSITIVE_STANDARD_DEVIATION = new LocalizedFormats('standard deviation must be positive ({0})');
        self::$STANDARD_DEVIATION = new LocalizedFormats('standard deviation ({0})'); /* keep */
        self::$NOT_POSITIVE_UPPER_BOUND = new LocalizedFormats('upper bound must be positive ({0})');
        self::$NOT_POSITIVE_WINDOW_SIZE = new LocalizedFormats('window size must be positive ({0})');
        self::$NOT_POWER_OF_TWO = new LocalizedFormats('{0} is not a power of 2');
        self::$NOT_POWER_OF_TWO_CONSIDER_PADDING = new LocalizedFormats('{0} is not a power of 2, consider padding for fix');
        self::$NOT_POWER_OF_TWO_PLUS_ONE = new LocalizedFormats('{0} is not a power of 2 plus one');
        self::$NOT_STRICTLY_DECREASING_NUMBER_OF_POINTS = new LocalizedFormats('points {0} and {1} are not strictly decreasing ({2} <= {3})');
        self::$NOT_STRICTLY_DECREASING_SEQUENCE = new LocalizedFormats('points {3} and {2} are not strictly decreasing ({1} <= {0})'); /* keep */
        self::$NOT_STRICTLY_INCREASING_KNOT_VALUES = new LocalizedFormats('knot values must be strictly increasing');
        self::$NOT_STRICTLY_INCREASING_NUMBER_OF_POINTS = new LocalizedFormats('points {0} and {1} are not strictly increasing ({2} >= {3})');
        self::$NOT_STRICTLY_INCREASING_SEQUENCE = new LocalizedFormats('points {3} and {2} are not strictly increasing ({1} >= {0})'); /* keep */
        self::$NOT_SUBTRACTION_COMPATIBLE_MATRICES = new LocalizedFormats('{0}x{1} and {2}x{3} matrices are not subtraction compatible');
        self::$NOT_SYMMETRIC_MATRIX = new LocalizedFormats('not symmetric matrix');
        self::$NO_BIN_SELECTED = new LocalizedFormats('no bin selected');
        self::$NO_CONVERGENCE_WITH_ANY_START_POINT = new LocalizedFormats('none of the {0} start points lead to convergence');
        self::$NO_DATA = new LocalizedFormats('no data'); /* keep */
        self::$NO_DEGREES_OF_FREEDOM = new LocalizedFormats('no degrees of freedom ({0} measurements, {1} parameters)');
        self::$NO_DENSITY_FOR_THIS_DISTRIBUTION = new LocalizedFormats('This distribution does not have a density function implemented');
        self::$NO_FEASIBLE_SOLUTION = new LocalizedFormats('no feasible solution');
        self::$NO_OPTIMUM_COMPUTED_YET = new LocalizedFormats('no optimum computed yet');
        self::$NO_RESULT_AVAILABLE = new LocalizedFormats('no result available');
        self::$NO_SUCH_MATRIX_ENTRY = new LocalizedFormats('no entry at indices ({0}, {1}) in a {2}x{3} matrix');
        self::$NULL_NOT_ALLOWED = new LocalizedFormats('null is not allowed'); /* keep */
        self::$COVARIANCE_MATRIX = new LocalizedFormats('covariance matrix'); /* keep */
        self::$DENOMINATOR = new LocalizedFormats('denominator'); /* keep */
        self::$DENOMINATOR_FORMAT = new LocalizedFormats('denominator format'); /* keep */
        self::$FRACTION = new LocalizedFormats('fraction'); /* keep */
        self::$FFUNCTION = new LocalizedFormats('function'); /* keep */
        self::$IMAGINARY_FORMAT = new LocalizedFormats('imaginary format'); /* keep */
        self::$INPUT_ARRAY = new LocalizedFormats('input array'); /* keep */
        self::$NUMERATOR = new LocalizedFormats('numerator'); /* keep */
        self::$NUMERATOR_FORMAT = new LocalizedFormats('numerator format'); /* keep */
        self::$OBJECT_TRANSFORMATION = new LocalizedFormats('conversion exception in transformation'); /* keep */
        self::$REAL_FORMAT = new LocalizedFormats('real format'); /* keep */
        self::$WHOLE_FORMAT = new LocalizedFormats('whole format'); /* keep */
        self::$NUMBER_TOO_LARGE = new LocalizedFormats('{0} is larger than the maximum ({1})'); /* keep */
        self::$NUMBER_TOO_SMALL = new LocalizedFormats('{0} is smaller than the minimum ({1})'); /* keep */
        self::$NUMBER_TOO_LARGE_BOUND_EXCLUDED = new LocalizedFormats('{0} is larger than, or equal to, the maximum ({1})'); /* keep */
        self::$NUMBER_TOO_SMALL_BOUND_EXCLUDED = new LocalizedFormats('{0} is smaller than, or equal to, the minimum ({1})'); /* keep */
        self::$NUMBER_OF_SUCCESS_LARGER_THAN_POPULATION_SIZE = new LocalizedFormats('number of successes ({0}) must be less than or equal to population size ({1})');
        self::$NUMERATOR_OVERFLOW_AFTER_MULTIPLY = new LocalizedFormats('overflow, numerator too large after multiply: {0}');
        self::$N_POINTS_GAUSS_LEGENDRE_INTEGRATOR_NOT_SUPPORTED = new LocalizedFormats('{0} points Legendre-Gauss integrator not supported, number of points must be in the {1}-{2} range');
        self::$OBSERVED_COUNTS_ALL_ZERO = new LocalizedFormats('observed counts are all 0 in observed array {0}');
        self::$OBSERVED_COUNTS_BOTTH_ZERO_FOR_ENTRY = new LocalizedFormats('observed counts are both zero for entry {0}');
        self::$OUT_OF_BOUNDS_QUANTILE_VALUE = new LocalizedFormats('out of bounds quantile value: {0}, must be in (0, 100]');
        self::$OUT_OF_BOUND_SIGNIFICANCE_LEVEL = new LocalizedFormats('out of bounds significance level {0}, must be between {1} and {2}');
        self::$OUT_OF_ORDER_ABSCISSA_ARRAY = new LocalizedFormats('the abscissae array must be sorted in a strictly increasing order, but the {0}-th element is {1} whereas {2}-th is {3}');
        self::$OUT_OF_RANGE_ROOT_OF_UNITY_INDEX = new LocalizedFormats('out of range root of unity index {0} (must be in [{1};{2}])');
        self::$OUT_OF_RANGE_SIMPLE = new LocalizedFormats('{0} out of [{1}, {2}] range'); /* keep */
        self::$OVERFLOW_IN_FRACTION = new LocalizedFormats('overflow in fraction {0}/{1}, cannot negate');
        self::$OVERFLOW_IN_ADDITION = new LocalizedFormats('overflow in addition: {0} + {1}');
        self::$OVERFLOW_IN_SUBTRACTION = new LocalizedFormats('overflow in subtraction: {0} - {1}');
        self::$PERCENTILE_IMPLEMENTATION_CANNOT_ACCESS_METHOD = new LocalizedFormats('cannot access {0} method in percentile implementation {1}');
        self::$PERCENTILE_IMPLEMENTATION_UNSUPPORTED_METHOD = new LocalizedFormats('percentile implementation {0} does not support {1}');
        self::$PERMUTATION_EXCEEDS_N = new LocalizedFormats('permutation size ({0}) exceeds permuation domain ({1})'); /* keep */
        self::$POLYNOMIAL_INTERPOLANTS_MISMATCH_SEGMENTS = new LocalizedFormats('number of polynomial interpolants must match the number of segments ({0} != {1} - 1)');
        self::$POPULATION_LIMIT_NOT_POSITIVE = new LocalizedFormats('population limit has to be positive');
        self::$POSITION_SIZE_MISMATCH_INPUT_ARRAY = new LocalizedFormats('position {0} and size {1} don\'t fit to the size of the input array {2}');
        self::$POWER_NEGATIVE_PARAMETERS = new LocalizedFormats('cannot raise an integral value to a negative power ({0}^{1})');
        self::$PROPAGATION_DIRECTION_MISMATCH = new LocalizedFormats('propagation direction mismatch');
        self::$RANDOMKEY_MUTATION_WRONG_CLASS = new LocalizedFormats('RandomKeyMutation works only with RandomKeys, not {0}');
        self::$ROOTS_OF_UNITY_NOT_COMPUTED_YET = new LocalizedFormats('roots of unity have not been computed yet');
        self::$ROTATION_MATRIX_DIMENSIONS = new LocalizedFormats('a {0}x{1} matrix cannot be a rotation matrix');
        self::$ROW_INDEX_OUT_OF_RANGE = new LocalizedFormats('row index {0} out of allowed range [{1}, {2}]');
        self::$SAME_SIGN_AT_ENDPOINTS = new LocalizedFormats('function values at endpoints do not have different signs, endpoints: [{0}, {1}], values: [{2}, {3}]');
        self::$SAMPLE_SIZE_EXCEEDS_COLLECTION_SIZE = new LocalizedFormats('sample size ({0}) exceeds collection size ({1})'); /* keep */
        self::$SAMPLE_SIZE_LARGER_THAN_POPULATION_SIZE = new LocalizedFormats('sample size ({0}) must be less than or equal to population size ({1})');
        self::$SIMPLEX_NEED_ONE_POINT = new LocalizedFormats('simplex must contain at least one point');
        self::$SIMPLE_MESSAGE = new LocalizedFormats('{0}');
        self::$SINGULAR_MATRIX = new LocalizedFormats('matrix is singular');
        self::$SUBARRAY_ENDS_AFTER_ARRAY_END = new LocalizedFormats('subarray ends after array end');
        self::$TOO_LARGE_CUTOFF_SINGULAR_VALUE = new LocalizedFormats('cutoff singular value is {0}, should be at most {1}');
        self::$TOO_MANY_ELEMENTS_TO_DISCARD_FROM_ARRAY = new LocalizedFormats('cannot discard {0} elements from a {1} elements array');
        self::$TOO_SMALL_BANDWIDTH = new LocalizedFormats('the bandwidth must be large enough to accomodate at least 2 points. There are {0}  data points, and bandwidth must be at least {1}  but it is only {2}');
        self::$TOO_SMALL_COST_RELATIVE_TOLERANCE = new LocalizedFormats('cost relative tolerance is too small ({0}), no further reduction in the sum of squares is possible');
        self::$TOO_SMALL_INTEGRATION_INTERVAL = new LocalizedFormats('too small integration interval: length = {0}');
        self::$TOO_SMALL_ORTHOGONALITY_TOLERANCE = new LocalizedFormats('orthogonality tolerance is too small ({0}), solution is orthogonal to the jacobian');
        self::$TOO_SMALL_PARAMETERS_RELATIVE_TOLERANCE = new LocalizedFormats('parameters relative tolerance is too small ({0}), no further improvement in the approximate solution is possible');
        self::$TWO_OR_MORE_CATEGORIES_REQUIRED = new LocalizedFormats('two or more categories required, got {0}');
        self::$TWO_OR_MORE_VALUES_IN_CATEGORY_REQUIRED = new LocalizedFormats('two or more values required in each category, one has {0}');
        self::$UNABLE_TO_BRACKET_OPTIMUM_IN_LINE_SEARCH = new LocalizedFormats('unable to bracket optimum in line search');
        self::$UNABLE_TO_COMPUTE_COVARIANCE_SINGULAR_PROBLEM = new LocalizedFormats('unable to compute covariances: singular problem');
        self::$UNABLE_TO_FIRST_GUESS_HARMONIC_COEFFICIENTS = new LocalizedFormats('unable to first guess the harmonic coefficients');
        self::$UNABLE_TO_ORTHOGONOLIZE_MATRIX = new LocalizedFormats('unable to orthogonalize matrix in {0} iterations');
        self::$UNABLE_TO_PERFORM_QR_DECOMPOSITION_ON_JACOBIAN = new LocalizedFormats('unable to perform Q.R decomposition on the {0}x{1} jacobian matrix');
        self::$UNABLE_TO_SOLVE_SINGULAR_PROBLEM = new LocalizedFormats('unable to solve: singular problem');
        self::$UNBOUNDED_SOLUTION = new LocalizedFormats('unbounded solution');
        self::$UNKNOWN_MODE = new LocalizedFormats('unknown mode {0}, known modes: {1} ({2}), {3} ({4}), {5} ({6}), {7} ({8}), {9} ({10}) and {11} ({12})');
        self::$UNPARSEABLE_3D_VECTOR = new LocalizedFormats('unparseable 3D vector: \"{0}\"');
        self::$UNPARSEABLE_COMPLEX_NUMBER = new LocalizedFormats('unparseable complex number: \"{0}\"');
        self::$UNPARSEABLE_FRACTION_NUMBER = new LocalizedFormats('unparseable fraction number: \"{0}\"');
        self::$UNPARSEABLE_REAL_VECTOR = new LocalizedFormats('unparseable real vector: \"{0}\"');
        self::$UNSUPPORTED_EXPANSION_MODE = new LocalizedFormats('unsupported expansion mode {0}, supported modes are {1} ({2}) and {3} ({4})');
        self::$UNSUPPORTED_OPERATION = new LocalizedFormats('unsupported operation'); /* keep */
        self::$USER_EXCEPTION = new LocalizedFormats('exception generated in user code'); /* keep */
        self::$URL_CONTAINS_NO_DATA = new LocalizedFormats('URL {0} contains no data');
        self::$VALUES_ADDED_BEFORE_CONFIGURING_STATISTIC = new LocalizedFormats('{0} values have been added before statistic is configured');
        self::$VECTOR_LENGTH_MISMATCH = new LocalizedFormats('vector length mismatch: got {0} but expected {1}');
        self::$VECTOR_MUST_HAVE_AT_LEAST_ONE_ELEMENT = new LocalizedFormats('vector must have at least one element');
        self::$WEIGHT_AT_LEAST_ONE_NON_ZERO = new LocalizedFormats('weigth array must contain at least one non-zero value');
        self::$WRONG_BLOCK_LENGTH = new LocalizedFormats('wrong array shape (block length = {0}, expected {1})');
        self::$WRONG_NUMBER_OF_POINTS = new LocalizedFormats('{0} points are required, got only {1}');
        self::$NUMBER_OF_POINTS = new LocalizedFormats('number of points ({0})'); /* keep */
        self::$ZERO_DENOMINATOR = new LocalizedFormats('denominator must be different from 0');
        self::$ZERO_DENOMINATOR_IN_FRACTION = new LocalizedFormats('zero denominator in fraction {0}/{1}');
        self::$ZERO_FRACTION_TO_DIVIDE_BY = new LocalizedFormats('the fraction to divide by must not be zero: {0}/{1}');
        self::$ZERO_NORM = new LocalizedFormats('zero norm');
        self::$ZERO_NORM_FOR_ROTATION_AXIS = new LocalizedFormats('zero norm for rotation axis');
        self::$ZERO_NORM_FOR_ROTATION_DEFINING_VECTOR = new LocalizedFormats('zero norm for rotation defining vector');
        self::$ZERO_NOT_ALLOWED = new LocalizedFormats('zero not allowed here');
    }
}

LocalizedFormats::init();