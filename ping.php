<?php
/*
 * heroku-ping-php
 *
 * PHP script to ping your Heroku apps to keep them awake
 *
 * @package		heroku-ping-php
 * @author		Dan Chen
*/

// add Heroku app urls
$sites = array('http://thai-lotto.herokuapp.com/', 'http://thai-lotto-staging.herokuapp.com');

// ----------------------------------------------------------------- //

$handles = array();

foreach ($sites as $i => $url) {
	$ch = $handles[$i] = curl_init();

	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
}

// create the multiple cURL handle
$mh = curl_multi_init();

// add the handles
foreach ($handles as $ch) {
	curl_multi_add_handle($mh, $ch);
}

$active = null;
// execute the handles
do {
    $mrc = curl_multi_exec($mh, $active);
} while ($mrc == CURLM_CALL_MULTI_PERFORM);

while ($active && $mrc == CURLM_OK) {
    if (curl_multi_select($mh) != -1) {
        do {
            $mrc = curl_multi_exec($mh, $active);
        } while ($mrc == CURLM_CALL_MULTI_PERFORM);
    }
}

// close the handles
foreach ($handles as $ch) {
	curl_multi_remove_handle($mh, $ch);
}
curl_multi_close($mh);

// write to log
// you can check this script is being run by running:
// heroku logs -t
error_log('Completed at ' . date('r'));
