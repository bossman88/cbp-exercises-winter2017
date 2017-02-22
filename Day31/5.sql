/* all the countries for casablanca movie */

/*
SELECT *
FROM `imdb_movie_has_person`
INNER JOIN `imdb_person`
    ON `imdb_movie_has_person`.`imdb_person_id` = `imdb_person` . `imdb_id`
WHERE `imdb_movie_has_person`.`imdb_movie_id` = 34583
*/

SELECT * 
FROM `imdb_movie_has_origin_country`
LEFT JOIN `imdb_movie_origin_country`
    ON `imdb_movie_has_origin_country`.`imdb_movie_origin_country_id` = `imdb_movie_origin_country`.`id`
WHERE `imdb_movie_has_origin_country` . `imdb_movie_id` = 34583