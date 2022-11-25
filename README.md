Required database SQL

For users table:

CREATE TABLE users(
    id int auto_increment primary key,
    email varchar(80) unique,
    fullName varchar(100) not null,
    password varchar(200) not null);

For goal tables:

CREATE TABLE goal(
 id int primary key auto_increment,
 goalTitle varchar(250) not null,
 goalAccomplishDate datetime,
 description text,
 status varchar(250) DEFAULT "Incomplete",
 user_id int,
 foreign key(user_id) references users(id));
 
 
 Xampp server required..
