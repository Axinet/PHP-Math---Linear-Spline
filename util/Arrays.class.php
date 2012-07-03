<?php

/**
 * Utility class, mimics Arrays.binarySearch from Java core required in algorithm.
 * Based on @link http://terenceyim.wordpress.com/2011/02/01/all-purpose-binary-search-in-php/
 */
class Arrays {
    
    public static function binarySearch(array &$a, $value){
        return self::binary_search($a, 0, count($a), $value, array('Arrays', 'cmp'));
    }
    
    private static function cmp($a, $b) {
        return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
    }    
    
    /**
     * Parameters: 
     *   $a - The sort array.
     *   $first - First index of the array to be searched (inclusive).
     *   $last - Last index of the array to be searched (exclusive).
     *   $key - The key to be searched for.
     *   $compare - A user defined function for comparison. Same definition as the one in usort
     *
     * Return:
     *   index of the search key if found, otherwise return (-insert_index - 1). 
     *   insert_index is the index of smallest element that is greater than $key or sizeof($a) if $key
     *   is larger than all elements in the array.
     * 
     * @link http://terenceyim.wordpress.com/2011/02/01/all-purpose-binary-search-in-php/
     */
    private static function binary_search(array &$a, $first, $last, $key, $compare) {
        $lo = $first; 
        $hi = $last - 1;

        while ($lo <= $hi) {
            $mid = (int)(($hi - $lo) / 2) + $lo;
            $cmp = call_user_func($compare, $a[$mid], $key);

            if ($cmp < 0) {
                $lo = $mid + 1;
            } elseif ($cmp > 0) {
                $hi = $mid - 1;
            } else {
                return $mid;
            }
        }
        return -($lo + 1);
    }
}
