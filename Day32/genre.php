<?php





        $query = "
        SELECT *
        FROM `game_has_genre`
        INNER JOIN `genre`
            ON `game_has_genre`.`genre_id` = `genre`.`id`

        
        ";

        $stmt = $pdo->prepare($query);


        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $objects = $stmt->fetchAll();


$genres_by_game = []; 
      foreach ($objects as $object)
           {
               $genres_by_game[$object->game_id][] = $object;
           }
           