<?php
$movies = array(
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
);
?>
<?php
$movie_names = array(
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
);
$movie_ratings = array(
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
);
$messages = array(
  'error' => array(
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ),
  'warning' => array(
    'This is your first warning',
    'This is your final warning'
  ),
  'success' => array(
    'Finally, something was successful.'
  )
);

function do_something_risky() {
  // do the risky stuff

  // return new messages
  return array(
    'error' => array(
      'I knew this would happen!',
      'This always happens.'
    ),
    'warning' => array(
      'You should fix this before proceeding'
    ),
    'success' => array()
  );
}

?>







<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1> DAY 1 WEEK 4 </h1>
        <h2> Exercise 1 </h2>
        <ol>
            <?php foreach ($movies as $value){echo "<li> $value <br> </li>";} ?> 
        </ol>

        <h2>Exercise 2</h2>
        <ol>
         <?php   for ($x = 0; $x <count($movies); $x++) {
         echo "<li>  $movies[$x] <br> </li>";  } ?>

        </ol>


        <h2> Exercise 3 </h2>
            <ol>
         <?php 
              sort($movies);
           for ($x = 0; $x <count($movies); $x++) {
         echo "<li>  $movies[$x] <br> </li>";  } ?>

        </ol>

        <h2> Exercise 4 </h2> 
            <ol>
            <?php  
                foreach ($movie_names as $key => $value) {
                    echo $value;
                    echo $movie_ratings[$key]  ;
                } ?>
              </ol>  

        <h2>Exercise 5</h2>

        <?php asort($movie_ratings); ?>
            <ol>
                <li>
                    <?php echo '$movie_names' ?>



                </li>



            </ol>

        <?php asort($movie_names); ?>
            <ol>
                <li>






                </li>
                



            </ol>

            <h2>Exercise 7 </>

            <?php foreach($messages as $message_type => $messages_of_type) : ?>

                <?php foreach($messages_of_type as $message_text) : ?>
                    <div class="message <?php echo $message_type; ?>"><?php echo $message_text; ?></div>
                <?php endforeach; ?>

            <?php endforeach; ?>

             <h2> Exercise 8  </h2?
    </body>
</html>
