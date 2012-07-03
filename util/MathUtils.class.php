<?php

/**
 * Some useful additions to the built-in functions in {@link Math}.
 */
final class MathUtils {
    
    /**
     * Checks that the given array is sorted in strictly increasing order.
     *
     * @param val Values.
     * @throws NonMonotonousSequenceException if the array is not sorted.
     * @since 2.2
     */
    public static function checkOrder(array $val, $dir = OrderDirection::INCREASING, $strict = true) {
        $previous = $val[0];
        $ok = true;
        
        $max = count($val);
        for ($i = 1; $i < $max; $i++) {
            switch ($dir) {
                case OrderDirection::INCREASING:
                    if ($strict) {
                        if ($val[$i] <= $previous) {
                            $ok = false;
                        }
                    } else {
                        if ($val[$i] < $previous) {
                            $ok = false;
                        }
                    }                    
                    break;
                case OrderDirection::DECREASING:
                    if ($strict) {
                        if ($val[$i] >= $previous) {
                            $ok = false;
                        }
                    } else {
                        if ($val[$i] > $previous) {
                            $ok = false;
                        }
                    }                    
                    break;
                default:
                    // Should never happen.
                    throw new Exception('IllegalArgument');                    
            }
            if (!$ok) {
                throw new NonMonotonousSequenceException($val[$i], $previous, $i, $dir, $strict);
            }
            $previous = $val[$i];            
        }
    }
}

/**
 * Specification of ordering direction.
 */
class OrderDirection {
    /** Constant for increasing direction. */
    const INCREASING = 1;
    /** Constant for decreasing direction. */
    const DECREASING = 2;
}