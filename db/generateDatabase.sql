CREATE TABLE users
(
   id SERIAL PRIMARY KEY NOT NULL
   ,username VARCHAR(50) UNIQUE NOT NULL -- cant be bigger than 50.. datatype like string
   ,password VARCHAR(50) NOT NULL
);

-- copy and paste to create above table... semicolon are important
CREATE TABLE speakers
(
   id SERIAL PRIMARY KEY
   ,name VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE sessions
(
   id SERIAL PRIMARY KEY
   ,month SMALLINT NOT NULL
   ,year SMALLINT NOT NULL
);

CREATE TABLE notes
(
   id SERIAL PRIMARY KEY
   ,content TEXT
   ,date DATE NOT NULL
   ,user_id INT NOT NULL REFERENCES users(id) -- same as foreign key
   ,speaker_id INT NOT NULL REFERENCES speakers(id)
   ,session_id INT NOT NULL REFERENCES sessions(id)
);





--------------------------------------------------------------------------------------------
-- NOTES
--------------------------------------------------------------------------------------------
-- /dt - psql command to show tables
-- psql datatypes
-- DROP TABLE users - poof gone psql command
-- find out how to alter a table
-- serial auto increments
-- its nice to capitalize all commands... type comes after variable naming...
-- get out of psql it is \q command




CREATE TABLE scripture
(
   id SERIAL PRIMARY KEY NOT NULL
   ,book VARCHAR(20) NOT NULL
   ,chapter SMALLINT NOT NULL
   ,verse SMALLINT NOT NULL
   ,content VARCHAR(500)
);

INSERT INTO scripture(book,chapter,verse,content) VALUES ('john',1,5,'And the light shineth in darkness; and the darkness comprehended it not.');
INSERT INTO scripture(book,chapter,verse,content) VALUES ('D&C',88,49,'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.');
INSERT INTO scripture(book,chapter,verse,content) VALUES ('D&C',93,28,'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');
INSERT INTO scripture(book,chapter,verse,content) VALUES ('Mosiah',16,9,'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');