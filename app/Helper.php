<?php namespace App;

use IntlDateFormatter;
use DateTime;

class Helper {
    
    public static function human_date($date)
    {
        $lang = config('app.locale') == 'th' ? 'th_TH@calendar=BUDDHIST' : 'en_EN';
        $formatter = IntlDateFormatter::create(
            $lang,
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            "GMT+07:00",
            IntlDateFormatter::TRADITIONAL
        );

        return $formatter->format(new DateTime($date));
    }         
}
