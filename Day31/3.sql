#34583



SELECT *
FROM `imdb_movie_has_person`
INNER JOIN `imdb_person`
    ON `imdb_movie_has_person`.`imdb_person_id` = `imdb_person` . `imdb_id`
WHERE `imdb_movie_has_person`.`imdb_movie_id` = 34583


/* all actors from film */