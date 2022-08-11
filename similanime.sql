create database similanime;
use similanime;

create table users(
username varchar(20),
password varchar(255) not null,
name varchar(40),
weight double,
height double,
blood_type varchar(3),
gender varchar(9),
sexuality varchar(13),
birth_date date,
zodiac_sign varchar(11),
mbti char(4),
occupation varchar(30),
primary key(username));

create table characters(
name varchar(40),
weight double,
height double,
blood_type varchar(3),
gender varchar(9),
sexuality varchar(9),
birth_date date,
zodiac_sign varchar(11),
mbti char(4),
occupation varchar(30),
user varchar(20),
similarity double,
primary key(name),
foreign key(user) references users(username));

-- users = (username, password, name, weight, height, blood_type, gender, sexuality, birth_date, zodiac_sign, mbti, occupation)

-- characters = (name, weight, height, blood_type, gender, sexuality, birth_date, zodiac_sign, mbti, occupation, user, similarity)
-- user = FK user(name)

insert into users values('ervnc', 'impretty', 'Evandro Risso', 54, 1.65, null, 'male', 'straight', '2004-08-06', 'gemini', 'ISFJ', 'student');
insert into users values('laupt', 'secretpwd', 'Laura Pessine', 55, 1.60, null, 'female', 'bi', '2005-12-06', 'sagittarius', 'INFJ', 'student');
insert into users values('dabgod', 'kysha321', 'Herick Victor', 54, 1.73, null, 'male', 'straight', '2004-11-06', 'scorpio', 'ISFP', 'student');
insert into users values('gperuchi', 'meg111', 'Giulia Peruchi', 48, 1.55, null, 'female', 'gay', '2005-12-17', 'sagittarius', null, 'student');
insert into users values('shinystar', 'cat5678', 'Jane Pessine', 60, 1.56, null, 'female', 'straight', '1972-01-18', 'capricorn', 'ISTJ', 'administrative assistant');

insert into characters values('Sakurajima Mai', null, 1.65, null, 'female', 'straight', null, 'sagittarius', 'ISTJ', 'student', 'laupt', null);
insert into characters values('Light Yagami', 54, 1.79, null, 'male', 'straight', '1986-02-28', 'pisces', 'ENTJ', 'student', 'gperuchi', null);
insert into characters values('Naruto Uzumaki', 50.9, 1.80, 'B', 'male', 'straight', null, 'libra', 'ENFP', 'ninja', 'ervnc', null);
insert into characters values('Killua Zaoldyeck', null, null, null, 'male', null, null, 'cancer', 'INTP', 'hunter', 'dabgod', null);
insert into characters values('Violet Evergarden', null, 1.61, 'O', 'female', 'straight', null, 'cancer', 'ISTJ', 'auto memory doll', 'shinystar', null);