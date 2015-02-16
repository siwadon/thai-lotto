<?php

function ping($url)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_exec($ch);

    $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($retcode == 200) {
        echo "$url is working\n";
    }
    else {
        echo "$url is sleeping\n";
    }
}

$urls = [ 'thai-lotto.herokuapp.com', 'thai-lotto-staging.herokuapp.com' ];

foreach ($urls as $url) {
   ping($url);
}
