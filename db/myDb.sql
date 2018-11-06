drop table job_worker;
drop table job;
drop table worker;
drop table project;
drop table program_user;

CREATE TABLE program_user
(
   id SERIAL PRIMARY KEY NOT NULL
   ,username VARCHAR(50) UNIQUE NOT NULL 
   ,password VARCHAR(256) NOT NULL
);

CREATE TABLE worker
(
   id SERIAL PRIMARY KEY NOT NULL
   ,name VARCHAR(50) NOT NULL
   ,program_user_id INT NOT NULL REFERENCES program_user(id)
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



delete from job_worker;
delete from job;
delete from worker;
delete from project;
delete from program_user;

   -- psql

ALTER TABLE program_user 
ALTER COLUMN password TYPE
VARCHAR (256);


INSERT INTO worker(name) VALUES
('kevin'),
('carl'),
('sam'),
('marc'),
('bill'),
('duke'),
('josh');


INSERT INTO program_user(username, password) VALUES
('priest advisor', 'a'),
('charity guy', 'b');

INSERT INTO project(program_user_id, title) VALUES
(3, 'Priest Quorum'),
(3, 'Scouts'),
(4, 'Charity');

INSERT INTO job(job_title, project_id) VALUES
('sacrament', 1),
('bread', 1),
('pray', 1),
('spiritual thought', 1),
('bring rope', 2),
('lead knot tying', 2),
('remind others', 2),
('bring food', 2),
('give money', 3), 
('count money', 3);

INSERT INTO job_worker(worker_id, job_id, instance_of_meeting) VALUES
(3,1,1),
(3,2,2),
(3,3,3),
(3,4,4),

(4,4,1),
(4,1,2),
(4,2,3),
(4,3,4),

(5,3,1),
(5,4,2),
(5,1,3),
(5,2,4),

(6,2,1),
(6,3,2),
(6,4,3),
(6,1,4);

INSERT INTO job_worker(worker_id, job_id, instance_of_meeting) VALUES
(6,5,1),
(6,6,2),
(6,7,3),

(7,7,1),
(7,5,2),
(7,6,3),

(8,6,1),
(8,7,2),
(8,5,3);

-- how to do all for a project
SELECT w.name, j.job_title, jw.instance_of_meeting, p.title FROM worker w
   JOIN job_worker jw ON w.id = jw.worker_id
   JOIN job j ON jw.job_id = j.id
   JOIN project p ON j.project_id = p.id
   WHERE p.title = 'Priest Quorum';

SELECT w.name, j.job_title, jw.instance_of_meeting, p.title FROM worker w
   JOIN job_worker jw ON w.id = jw.worker_id
   JOIN job j ON jw.job_id = j.id
   JOIN project p ON j.project_id = p.id
   WHERE p.title = 'Scouts';

-- how to find all for a worker
SELECT w.name, j.job_title, jw.instance_of_meeting, p.title FROM worker w
   JOIN job_worker jw ON w.id = jw.worker_id
   JOIN job j ON jw.job_id = j.id
   JOIN project p ON j.project_id = p.id
   WHERE w.name= 'marc';

SELECT username, password FROM program_user;

SELECT p.title FROM project p
   JOIN program_user pu ON p.program_user_id = pu.id
   WHERE pu.username = 'priest advisor';

SELECT * FROM project p
   JOIN program_user pu ON p.program_user_id = pu.id;


SELECT w.name, j.job_title, jw.instance_of_meeting, p.title, p.id,p.program_user_id,pu.id, pu.username,
                      j.project_id, j.id, jw.job_id, w.id, jw.worker_id FROM worker w
   JOIN job_worker jw ON w.id = jw.worker_id
   JOIN job j ON jw.job_id = j.id
   JOIN project p ON j.project_id = p.id
   JOIN program_user pu ON p.program_user_id = pu.id
   WHERE p.id = 6
   ORDER BY jw.instance_of_meeting, w.name;


SELECT name FROM worker w
   JOIN program_user pu ON w.program_user_id = pu.id
   WHERE pu.username = 'helpLab';