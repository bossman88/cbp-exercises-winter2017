<?php
require_once 'database.php';
require_once 'genre.php';




$query = "
    SELECT *
    FROM `game`
    where 1
";

$stmt = $pdo->prepare($query);


$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_OBJ);


//gets an array of results
$games = $stmt->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">


        <script>
                $(document).ready(function(){
                    // code here to be run after document is ready

                });

                $(function(){
                var headings = $('.h2:first');
                    console.log(headings);
                });

        </script>
    </head>
    <body>
        <div class="container-fluid">
            <h1>List of games</h1>

<?php        foreach ($games as $game) :   ?>
           <div class="game container">
               <div class="row">
                    <div class="col-md-4">
                        <div class="image img-fluid ">
                            <img src=" <?php echo $game->image_url; ?> " />
                        </div>
                </div>
                    <div class="col-md-8">
                        <div class="info">
                            <h2 class="name"><?php echo $game->name; ?></h2>
                            <div class="release"><?php echo $game->released_at; ?></div>
                            <div class="genres">
                                <?php foreach ($genres_by_game[$game->id] as $genre) : ?>
                                    <a href="#"><?php echo $genre->name; ?></a>

                        <?php endforeach; ?>
                    </div>
           </div>
        <div>
        <div class="description jumbotron">
            <?php echo $game->description; ?>
        </div>
        <div class="rating">77%</div>        
    </div>
</div>

<?php endforeach; ?>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</div>
    </body>
</html>
