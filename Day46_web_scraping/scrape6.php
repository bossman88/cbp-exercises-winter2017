<?php

//pick 1 thring from a movie and scrape it!!!!


//TRYING TO SCRAPE JUST 1 element not thw whole page 

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


libxml_use_internal_errors(true);
$doc = new DOMDocument();
$doc->loadHTML($page);
$xml = simplexml_import_dom($doc->getElementById('main'));   //we get main element by id 
?>
<h1>Movies Now in Theaters</h1>
<ol>
    
<?php
foreach($xml->div->div[1]->div[1] as $div) {
   //$movie =  $div->table->tbody->tr->td[1]->h4->a[1];
   $movie =  $div;
   echo $movie;
}
?>
</ol>


<style>
   
    h1 {
        text-align: center;

    }

    ul {
        margin-left:30%;
    }

</style>
