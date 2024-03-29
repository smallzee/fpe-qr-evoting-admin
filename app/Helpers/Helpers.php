<?php

define( 'TIMEBEFORE_NOW','Just now' );
define( 'TIMEBEFORE_MINUTE','{num} minute ago' );
define( 'TIMEBEFORE_MINUTES','{num} minutes ago' );
define( 'TIMEBEFORE_HOUR', '{num} hour ago' );
define( 'TIMEBEFORE_HOURS', '{num} hours ago' );
define( 'TIMEBEFORE_YESTERDAY', 'yesterday' );
define( 'TIMEBEFORE_FORMAT',  '%e %b' );
define( 'TIMEBEFORE_FORMAT_YEAR', '%e %b, %Y' );

define( 'TIMEBEFORE_DAYS',    '{num} days ago' );
define( 'TIMEBEFORE_WEEK',    '{num} week ago' );
define( 'TIMEBEFORE_WEEKS',   '{num} weeks ago' );
define( 'TIMEBEFORE_MONTH',   '{num} month ago' );
define( 'TIMEBEFORE_MONTHS',  '{num} months ago' );

date_default_timezone_set("Africa/Lagos");

function time_ago($time){
    $out    = ''; // what we will print out
    $now    = time(); // current time
    $diff   = $now - $time; // difference between the current and the provided dates

    if( $diff < 60 ) // it happened now
        return TIMEBEFORE_NOW;

    elseif( $diff < 3600 ) // it happened X minutes ago
        return str_replace( '{num}', ( $out = round( $diff / 60 ) ), $out == 1 ? TIMEBEFORE_MINUTE : TIMEBEFORE_MINUTES );

    elseif( $diff < 3600 * 24 ) // it happened X hours ago
        return str_replace( '{num}', ( $out = round( $diff / 3600 ) ), $out == 1 ? TIMEBEFORE_HOUR : TIMEBEFORE_HOURS );

    elseif( $diff < 3600 * 24 * 2 ) // it happened yesterday
        return TIMEBEFORE_YESTERDAY;

    elseif( $diff < 3600 * 24 * 7 )
        return str_replace( '{num}', round( $diff / ( 3600 * 24 ) ), TIMEBEFORE_DAYS );

    elseif( $diff < 3600 * 24 * 7 * 4 )
        return str_replace( '{num}', ( $out = round( $diff / ( 3600 * 24 * 7 ) ) ), $out == 1 ? TIMEBEFORE_WEEK : TIMEBEFORE_WEEKS );

    elseif( $diff < 3600 * 24 * 7 * 4 * 12 )
        return str_replace( '{num}', ( $out = round( $diff / ( 3600 * 24 * 7 * 4 ) ) ), $out == 1 ? TIMEBEFORE_MONTH : TIMEBEFORE_MONTHS );


    else // falling back on a usual date format as it happened later than yesterday
        return strftime( date( 'Y', $time ) == date( 'Y' ) ? TIMEBEFORE_FORMAT : TIMEBEFORE_FORMAT_YEAR, $time );
}

function image_url($src){
    return asset('assets/images/'.$src);
}

function GetJSONResponse($responseMessage, $status = true, $responseBody = array()){
    $s = array(
        'status' => ($status == true) ? true : false,
        'responseMessage' => $responseMessage,
        'responseBody'=> $responseBody
    );
    echo json_encode($s);
    exit();
}


function get_settings($setting_key){
    $setting_data = \App\Settings::where("settings_key",$setting_key)->first();
    return @$setting_data->settings_value;
}

