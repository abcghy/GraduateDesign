create table user (
	id INT(20) primary key auto_increment,
    email varchar(50) not null unique,
    password varchar(20) not null,
    nickname varchar(20) not null,
    phone varchar(12),
    rate TINYINT not null,
    province varchar(10),
    city varchar(10),
    address varchar(30),
    motto text
);

create table car (
	id INT(20) primary key auto_increment,
    make varchar(20) not null,
    model varchar(20) not null,
    type varchar(20) not null,
    price INT(10) not null,
    year DATE not null,
    mile INT(10) not null,
    fixed TINYINT(4) not null,
    description text not null
);

create database test;

select * from user;
select * from car;

drop table user;

insert into user(email, password, nickname, rate) values("beatbox_gao@hotmail.com", "19941024Abc", "beatbox_gao", 1);
insert into user(email, password, nickname, rate) values("452941120@qq.com", "19941024Abc", "高惠宇", 1);

show variables like 'character%';