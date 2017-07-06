SELECT COUNT(film.id_genre) AS 'nb_short-films'
FROM film
WHERE film.duration < 43;