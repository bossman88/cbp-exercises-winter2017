<?php
//$url = 'https://nghttp2.org/httpbin/headers';
$url = 'http://www.imdb.com/movies-in-theaters/';
$opts = ['http' => [
    'user_agent' => 'lol/1337',
    'header' => ["Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
                // "Accept-Encoding: gzip, deflate, sdch, br",    //PRETEND THAT WE CAN READ COMPRESSED PAGES!!!!!!!!!
                "Accept-Language: en-GB,en-US;q=0.8,en;q=0.6"
    ]
]];  //it will load page and send user agent header
$context = stream_context_create($opts);
$page = file_get_contents($url, false, $context);//true searches local files

echo $page;