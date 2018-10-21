CREATE TABLE actor
(
   id SERIAL PRIMARY KEY
   ,name VARCHAR(100) NOT NULL
   ,birthYear SMALLINT
);

CREATE TABLE movie
(
   id SERIAL PRIMARY KEY
   ,title VARCHAR(100) NOT NULL
   ,runtime SMALLINT
   ,year SMALLINT 
);

CREATE TABLE actor_movie
(
   id SERIAL PRIMARY KEY
   ,actor_id INT NOT NULL REFERENCES actor(id)
   ,movie_id INT NOT NULL REFERENCES movie(id)
);



INSERT INTO actor (name, birthYear) VALUES ('jimmy stewart', 1908);
INSERT INTO actor (name, birthYear) VALUES ('Chris Pratt', 1979);
INSERT INTO actor (name, birthYear) VALUES ('Tom Cruise', 1962)
                                          ,('Carrie Fisher', 1949);

INSERT INTO actor_movie(actor_id, movie_id) VALUES (2,3)
                                                   ,(1,1)
                                                   ,(1,3)
                                                   ,(4,2)
                                                   ,(1,2);

INSERT INTO movie(title, runtime, year) VALUES ('It''s a wonderful life', 120, 1957)
                                             ,('The Devil wears prada', 125, 2006)
                                             ,('Guardians of the galaxy', 140, 2014);

SELECT * FROM actor;
SELECT name, birthYear FROM actor ORDER BY birthYear;

SELECT * FROM movie WHERE title = 'It''s a wonderful life';

-- any movie that contains a w in the title
SELECT * FROM movie WHERE title LIKE '%w%';


SELECT * FROM movie 
   JOIN actor_movie am ON movie.id = am.movie_id
   JOIN actor a ON am.actor_id = a.id
   WHERE movie.title LIKE 'The Devil%'
   ORDER BY a.birthYear;

SELECT movie.title, a.name FROM movie 
   JOIN actor_movie am ON movie.id = am.movie_id
   JOIN actor a ON am.actor_id = a.id
   WHERE movie.title LIKE 'The Devil%'
   ORDER BY a.birthYear;

  -- db folder.... web 05 movies slack