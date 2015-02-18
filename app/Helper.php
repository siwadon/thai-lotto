<?php namespace App;

use IntlDateFormatter;
use DateTime;

class Helper {
    
    public static function human_date($date)
    {
        $formatter = IntlDateFormatter::create(
            "th_TH@calendar=BUDDHIST",
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            "GMT+07:00",
            IntlDateFormatter::TRADITIONAL
        );

        return $formatter->format(new DateTime($date));
    }         
}