


SELECT *   
FROM `imdb_movie`
INNER JOIN `imdb_movie_type`
    ON `imdb_movie`.`imdb_movie_type_id` = `imdb_movie_type`.`id`
    WHERE `imdb_movie`.`imdb_id`= 96697;