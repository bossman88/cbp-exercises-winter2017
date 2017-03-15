<?php


//header being sent to REMOTE SERVER SO WE NEED TO USE HTTP BIN TO CHECK WHAT WE ARE SENDING
$url = 'http://www.imdb.com/movies-in-theaters/';
$ch = curl_init();
curl_setopt_array($ch, [
    	CURLOPT_URL => $url,
        CURLOPT_HEADER => false,
        CURLOPT_RETURNTRANSFER => true,  
        CURLOPT_USERAGENT => 'Mozilla',    // see https://user-agents.me/
        CURLOPT_HTTPHEADER => [
            'Accept: foobar',
            'Foo:bar'
        ]
      
]);
                    
$page = curl_exec($ch);
echo $page;


