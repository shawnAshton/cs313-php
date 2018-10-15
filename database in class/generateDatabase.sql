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