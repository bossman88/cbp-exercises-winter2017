#71615  


SELECT `imdb_movie_has_genre` . * 
FROM `imdb_movie_has_genre`
INNER JOIN `imdb_genre`
    ON `imdb_movie_has_genre`.`imdb_genre_id` = `imdb_genre`.`id`
WHERE `imdb_movie_has_genre` . `imdb_movie_id` = 71615
ORDER BY `imdb_movie_has_genre`.`priority` ASC;