insert into institution (name) values
('Tech University');

insert into speciality (name) values
('Computer Science'),
('Mechanical Engineering'),
('Medicine'),
('Physics'),
('Chemistry'),
('Electrical Engineering'),
('Mathematics'),
('Data Science'),
('Biotechnology'),
('Environmental Science');

insert into position (name) values
('Professor'),
('Assistant Professor'),
('Lecturer'),
('Research Scientist'),
('Postdoctoral Fellow'),
('PhD Student'),
('Dean'),
('Department Head'),
('Lab Technician'),
('Research Assistant');

insert into journal (name) values
('Journal of Artificial Intelligence'),
('Journal of Quantum Mechanics'),
('Journal of Medical Research'),
('Journal of Chemistry'),
('Physics Today'),
('Data Science Monthly'),
('Environmental Advances'),
('Journal of Biotechnology'),
('Electrical Engineering Journal'),
('Journal of Applied Mathematics');

insert into employee (institution_id, speciality_id, position_id, name) values
(1, 1, 1, 'Alice Johnson'),
(1, 2, 2, 'Bob Smith'),
(1, 3, 3, 'Carol Williams'),
(1, 4, 4, 'David Brown'),
(1, 5, 5, 'Eva Green'),
(1, 6, 6, 'Frank Harris'),
(1, 7, 7, 'Grace King'),
(1, 8, 8, 'Henry Clark'),
(1, 9, 9, 'Ivy Lewis'),
(1, 10, 10, 'Jack Davis');

insert into journal_issue (journal_id, year, issue) values
(1, 2024, 1),
(2, 2024, 1),
(3, 2024, 2),
(4, 2024, 3),
(5, 2023, 2),
(6, 2023, 3),
(7, 2023, 4),
(8, 2023, 1),
(9, 2022, 2),
(10, 2022, 3),
(1, 2023, 2),
(2, 2023, 3),
(3, 2022, 1),
(4, 2022, 4),
(5, 2021, 1);

insert into article (journal_issue_id, employee_id) values
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 1),
(12, 2),
(13, 3),
(14, 4),
(15, 5);

insert into conference (name, date) values
('International AI Conference', '2024-07-01 09:00:00'),
('Quantum Mechanics Symposium', '2024-08-15 10:30:00'),
('Medical Research Congress', '2024-09-20 11:45:00'),
('Chemistry World Expo', '2024-10-05 09:00:00'),
('Physics Annual Conference', '2024-11-10 13:00:00'),
('Data Science Summit', '2024-12-15 10:00:00'),
('Biotechnology Forum', '2025-01-20 14:00:00'),
('Environmental Science Summit', '2025-02-25 09:30:00'),
('Advanced Robotics Conference', '2025-03-15 11:00:00'),
('Quantum Computing Symposium', '2025-04-05 10:45:00');

insert into conference_report (conference_id, article_id, report_time) values
(1, 1, '2024-07-01 10:00:00'), 
(2, 2, '2024-08-15 11:00:00'), 
(3, 3, '2024-09-20 12:00:00'), 
(4, 4, '2024-10-05 10:00:00'), 
(5, 5, '2024-11-10 14:00:00'), 
(6, 6, '2024-12-15 11:00:00'), 
(7, 7, '2025-01-20 15:00:00'), 
(8, 8, '2025-02-25 10:30:00'), 
(9, 9, '2025-03-15 12:00:00'), 
(10, 10, '2025-04-05 11:30:00');
