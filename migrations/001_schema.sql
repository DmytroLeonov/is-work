create table institution (
    id serial primary key,
    name varchar(100) not null unique
);

create table speciality (
    id serial primary key,
    name varchar(100) not null unique
);

create table position (
    id serial primary key,
    name varchar(100) not null unique
);

create table journal (
    id serial primary key,
    name varchar(100) not null unique
);

create table employee (
    id serial primary key,
    institution_id bigint unsigned not null,
    speciality_id bigint unsigned not null,
    position_id bigint unsigned not null,
    name varchar(100) not null,
    foreign key (institution_id) references institution (id),
    foreign key (speciality_id) references speciality (id),
    foreign key (position_id) references position (id)
);

create table journal_issue (
    id serial primary key,
    journal_id bigint unsigned not null,
    year int unsigned not null,
    issue int unsigned not null,
    foreign key ( journal_id ) references journal (id),
    unique (journal_id, year, issue)
);

create table article (
    id serial primary key,
    journal_issue_id bigint unsigned not null,
    employee_id bigint unsigned not null,
    name varchar(100) not null, 
    foreign key (journal_issue_id) references journal_issue (id),
    foreign key (employee_id) references employee (id)
);

create table conference (
    id serial primary key,
    name varchar(100) not null unique,
    date datetime not null
);

create table conference_report (
    id serial primary key,
    conference_id bigint unsigned not null,
    article_id bigint unsigned not null,
    report_time datetime not null,
    foreign key (conference_id) references conference (id),
    foreign key (article_id) references article (id)
);
