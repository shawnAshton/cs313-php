CREATE TABLE worker
(
   id SERIAL PRIMARY KEY NOT NULL
   ,name VARCHAR(50) NOT NULL
);

CREATE TABLE program_user
(
   id SERIAL PRIMARY KEY NOT NULL
   ,username VARCHAR(50) UNIQUE NOT NULL 
   ,password VARCHAR(50) NOT NULL
);

CREATE TABLE project
(
   id SERIAL PRIMARY KEY NOT NULL
   ,program_user_id INT NOT NULL REFERENCES program_user(id)
   ,title VARCHAR(50) NOT NULL
);

CREATE TABLE job
(
   id SERIAL PRIMARY KEY NOT NULL
   ,job_title VARCHAR(50) NOT NULL
   ,project_id INT NOT NULL REFERENCES project(id)
);

CREATE TABLE job_worker
(
   job_id INT NOT NULL REFERENCES job(id)
   ,worker_id INT NOT NULL REFERENCES worker(id)
   ,instance_of_meeting INT NOT NULL
);