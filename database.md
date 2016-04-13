# database

## 创建数据库
    create database test;
    
## 创建用户表
    create table User (
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
    
## 创建车表
    create table Car (
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
    
## 创建品牌表
    create table Make (
        id INT(20) primary key auto_increment,
        make varchar(20) not null
    );
    
## 创建型号表
    create table Model (
    	id int(20) primary key auto_increment,
        model varchar(20) not null,
        make int(20),
        foreign key (make) references Make(id)
    );