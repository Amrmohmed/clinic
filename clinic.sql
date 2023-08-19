Create Database clinic;
use clinic;
create table doctors(
  id int unsigned primary key auto_increment,
  name varchar(50) not null,
  city varchar(50) not null,
  image varchar(255),
  major_id int unsigned,
  created_at datetime default current_timestamp
);

create table booking(
  id int unsigned primary key auto_increment,
  name varchar(50) not null,
  email varchar(255) not null,
  phone varchar(50),
  doctor_id int unsigned,
  created_at datetime default current_timestamp
);

create table major(
  id int unsigned primary key auto_increment,
  title varchar(50) not null,
  created_at datetime default current_timestamp
);

create table rate(
  id int unsigned primary key auto_increment,
  rate tinyint not null,
  doctor_id int unsigned,
  created_at datetime default current_timestamp
);

create table users(
  id int unsigned primary key auto_increment,
  name varchar(50) not null,
  email varchar(255) not null,
  phone varchar(50),
  password varchar(255) not null,
  type enum('user','doctor','admin'),
  created_at datetime default current_timestamp
);

create table contact_us(
  id int unsigned primary key auto_increment,
  name varchar(50) not null,
  email varchar(255) not null,
  phone varchar(50),
  subject varchar(255) not null,
  message varchar(255) not null,
  created_at datetime default current_timestamp
);