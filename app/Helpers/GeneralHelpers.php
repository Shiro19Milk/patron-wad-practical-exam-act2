<?php

use Carbon\Carbon;

if (!function_exists('fullName')) {
    function fullName($fname, $mname = '', $lname = '') {
        return trim("{$lname} {$fname} {$mname}");
    }
}

if (!function_exists('dates')) {
    function dates($date) {
        return Carbon::parse($date)->format('F j Y');
    }
}

if (!function_exists('grades')) {
    function grades($grades) {
        
            if ($grades >= 90) 
                return 'Excellent';

            elseif ($grades >= 85) 
                return 'Very Good';

            elseif ($grades >= 80) 
                return 'Satisfactory';

            elseif ($grades >= 75) 
                return 'Passed';

            else 
                return 'Failed';     
    }

}
if (!function_exists('to_uppercase')) {
    function to_uppercase($string) {
        return strtoupper($string);
    }
}

if (!function_exists('to_lowercase')) {
    function to_lowercase($string)
    {
        return strtolower($string);
    }
}