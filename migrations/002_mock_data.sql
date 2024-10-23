begin;

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

insert into article (journal_issue_id, employee_id, name) values
(1, 1, 'The Future of AI: How Machine Learning is Shaping Our World'),
(2, 2, 'Top 10 Web Development Trends to Watch in 2024'),
(3, 3, 'Mastering Time Management: Techniques for Productivity'),
(4, 4, 'The Rise of Remote Work: Challenges and Opportunities'),
(5, 5, 'Climate Change and Its Impact on Global Economies'),
(6, 6, 'The Psychology of Habits: How to Build Lasting Change'),
(7, 7, 'Blockchain Beyond Cryptocurrency: New Applications in 2024'),
(8, 8, 'Breaking Down Cybersecurity: Best Practices for Businesses'),
(9, 9, 'Exploring the Benefits of Mindfulness in Everyday Life'),
(10, 10, 'Decoding the Gig Economy: What It Means for the Future of Work'),
(11, 1, 'The Evolution of Digital Marketing: Strategies for Success'),
(12, 2, 'How 5G Technology Will Revolutionize the Internet'),
(13, 3, 'Sustainable Living: Small Changes for a Greener Future'),
(14, 4, 'The Intersection of Technology and Healthcare: Innovations to Watch'),
(15, 5, 'How Artificial Intelligence is Revolutionizing Customer Service');

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
(1, 1, '2024-07-01 09:00:00'),
(1, 2, '2024-07-01 09:30:00'),
(1, 3, '2024-07-01 10:30:00'),
(2, 4, '2024-08-15 12:00:00'),
(2, 5, '2024-08-15 12:30:00'),
(2, 6, '2024-08-15 13:30:00'),
(3, 7, '2024-09-20 14:00:00'),
(3, 8, '2024-09-20 15:00:00'),
(3, 9, '2024-09-20 15:30:00'),
(4, 10, '2024-10-05 11:00:00'),
(4, 11, '2024-10-05 11:30:00'),
(4, 12, '2024-10-05 12:30:00'),
(5, 13, '2024-11-10 13:00:00'),
(5, 14, '2024-11-10 13:30:00'),
(5, 15, '2024-11-10 14:30:00');

commit;
