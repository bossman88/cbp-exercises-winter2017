<?php


//ADD PICTURE
//add regular expression to title to remove year!!


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

try {
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();
        $doc->loadHTML($page);
        $xml = simplexml_import_dom($doc->getElementById('main'));   //we get main element by id 
        ?>
        <h1>Movies Now in Theaters</h1>
        <ol>
            
        <?php
        foreach($xml->div->div[1]->div as $div) {
            if (strpos($div['class'], 'list_item')=== false) {   //haystack div class  we want to search if there is something in the class, we want to search for list item
                throw new Exception('Div does not have list_item class');
            } 
           if((string)$div->table->tbody->tr->td[1]->h4['itemprop'] !=='name') {
               throw new Exception('H4 has unknown itemprop');
           }
           $picture =  $div->table->tbody->tr->td[0]->div->a->div->img;
        $movie =  $div->table->tbody->tr->td[1]->h4->a;
   
         if ((string)$movie['itemprop'] !== 'url'){
            throw new Exception('A has unknown itemprop');
            }    
         if   (!preg_match('~(.+) \(([0-9]{4})\)$~', trim($movie), $matches)){
                throw new Exception('Movie name does not match');
            } 
        echo '<li><img src="'.$picture['src'].'">'. '<br>' . '<a href="http://www.imdb.com/'. $movie['href'] . '">'. $matches[1] . '</a><br> year:'
        .$matches[2] . '</li>' . '<br>';
        }
    } catch(Exception $e){
        echo $e->getMessage();
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
