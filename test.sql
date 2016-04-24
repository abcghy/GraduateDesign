create database test;

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
    model varchar(20) not null,
    type varchar(20) not null,
    price INT(10) not null,
    year year not null,
    mile INT(10) not null,
    fixed TINYINT(4) not null,
    title text not null,
    description text not null,
    user int(20) not null,
    foreign key (model) references model(id),
    foreign key (type) references type(id),
    foreign key (user) references user(id)
);

create table Make (
	id int(20) primary key auto_increment,
    make varchar(20) not null
);

create table Model (
	id int(20) primary key auto_increment,
    model varchar(20) not null,
    make int(20),
    foreign key (make) references Make(id)
);

create table Price (
	id int(20) primary key auto_increment,
    start int(20) not null,
    end int(20) not null,
    description varchar(20) not null
);

create table Type (
	id int(20) primary key auto_increment,
    description varchar(20) not null
);

create table Year (
	id int(20) primary key auto_increment,
    start int(20) not null,
    end int(20) not null,
    description varchar(20) not null
);

show variables like 'character%';

insert into make (make) values ('奥迪');
insert into make (make) values ('宝马');
insert into make (make) values ('保时捷');
insert into make (make) values ('奔驰');
insert into make (make) values ('本田');
insert into make (make) values ('比亚迪');
insert into make (make) values ('别克');
insert into make (make) values ('宾利');
insert into make (make) values ('大众');
insert into make (make) values ('东风');
insert into make (make) values ('法拉利');
insert into make (make) values ('丰田');
insert into make (make) values ('福特');
insert into make (make) values ('红旗');
insert into make (make) values ('吉利');
insert into make (make) values ('江淮');
insert into make (make) values ('凯迪拉克');
insert into make (make) values ('劳斯莱斯');
insert into make (make) values ('雷克萨斯');
insert into make (make) values ('雷诺');
insert into make (make) values ('林肯');
insert into make (make) values ('路虎');
insert into make (make) values ('马自达');
insert into make (make) values ('迈巴赫');
insert into make (make) values ('奇瑞');
insert into make (make) values ('日产');
insert into make (make) values ('特斯拉');
insert into make (make) values ('五菱');
insert into make (make) values ('夏利');
insert into make (make) values ('现代');
insert into make (make) values ('雪佛兰');
insert into make (make) values ('雪铁龙');
insert into make (make) values ('一汽');
insert into make (make) values ('英菲尼迪');

insert into model (model, make) values ('奥迪A3', 1);
insert into model (model, make) values ('奥迪A4', 1);
insert into model (model, make) values ('奥迪A4L', 1);
insert into model (model, make) values ('奥迪A6', 1);
insert into model (model, make) values ('奥迪A6L', 1);
insert into model (model, make) values ('奥迪Q3', 1);
insert into model (model, make) values ('奥迪Q5', 1);
insert into model (model, make) values ('奥迪A1', 1);
insert into model (model, make) values ('奥迪A3(进口)', 1);
insert into model (model, make) values ('奥迪A4(进口)', 1);
insert into model (model, make) values ('奥迪A5', 1);
insert into model (model, make) values ('奥迪A6(进口)', 1);
insert into model (model, make) values ('奥迪A7', 1);
insert into model (model, make) values ('奥迪A8L', 1);
insert into model (model, make) values ('奥迪Allroad quattro', 1);
insert into model (model, make) values ('奥迪Q3(进口)', 1);
insert into model (model, make) values ('奥迪Q5(进口)', 1);
insert into model (model, make) values ('奥迪Q7', 1);
insert into model (model, make) values ('奥迪R8', 1);
insert into model (model, make) values ('奥迪S3', 1);
insert into model (model, make) values ('奥迪S4', 1);
insert into model (model, make) values ('奥迪S5', 1);
insert into model (model, make) values ('奥迪S6', 1);
insert into model (model, make) values ('奥迪S7', 1);
insert into model (model, make) values ('奥迪S8', 1);
insert into model (model, make) values ('奥迪SQ5', 1);
insert into model (model, make) values ('奥迪TT', 1);
insert into model (model, make) values ('奥迪RS5', 1);
insert into model (model, make) values ('奥迪RS7', 1);

insert into model (model, make) values ('宝马2系旅行车', 2);
insert into model (model, make) values ('宝马3系', 2);
insert into model (model, make) values ('宝马5系', 2);
insert into model (model, make) values ('宝马X1', 2);
insert into model (model, make) values ('宝马1系', 2);
insert into model (model, make) values ('宝马2系', 2);
insert into model (model, make) values ('宝马2系多功能旅行车', 2);
insert into model (model, make) values ('宝马3系(进口)', 2);
insert into model (model, make) values ('宝马3系GT', 2);
insert into model (model, make) values ('宝马4系', 2);
insert into model (model, make) values ('宝马5系(进口)', 2);
insert into model (model, make) values ('宝马5系GT', 2);
insert into model (model, make) values ('宝马6系', 2);
insert into model (model, make) values ('宝马7系', 2);
insert into model (model, make) values ('宝马i8', 2);
insert into model (model, make) values ('宝马X1(进口)', 2);
insert into model (model, make) values ('宝马X3', 2);
insert into model (model, make) values ('宝马X4', 2);
insert into model (model, make) values ('宝马X5', 2);
insert into model (model, make) values ('宝马X6', 2);
insert into model (model, make) values ('宝马Z4', 2);
insert into model (model, make) values ('宝马1系M', 2);
insert into model (model, make) values ('宝马M3', 2);
insert into model (model, make) values ('宝马M4', 2);
insert into model (model, make) values ('宝马M5', 2);
insert into model (model, make) values ('宝马M6', 2);
insert into model (model, make) values ('宝马X5 M', 2);
insert into model (model, make) values ('宝马X6 M', 2);

insert into model (model, make) values ('保时捷911', 3);
insert into model (model, make) values ('保时捷918', 3);
insert into model (model, make) values ('保时捷Boxster', 3);
insert into model (model, make) values ('保时捷Cayenne', 3);
insert into model (model, make) values ('保时捷Cayman', 3);
insert into model (model, make) values ('保时捷Macan', 3);
insert into model (model, make) values ('保时捷Panamera', 3);

insert into model (model, make) VALUES ('奔驰C级', 4);
insert into model (model, make) VALUES ('奔驰E级', 4);
insert into model (model, make) VALUES ('奔驰GLA级', 4);
insert into model (model, make) VALUES ('奔驰GLC级', 4);
insert into model (model, make) VALUES ('奔驰GLK级', 4);
insert into model (model, make) VALUES ('奔驰A级', 4);
insert into model (model, make) VALUES ('奔驰B级', 4);
insert into model (model, make) VALUES ('奔驰CLA级', 4);
insert into model (model, make) VALUES ('奔驰CLK', 4);
insert into model (model, make) VALUES ('奔驰CLS级', 4);
insert into model (model, make) VALUES ('奔驰CL级', 4);
insert into model (model, make) VALUES ('奔驰C级(进口)', 4);
insert into model (model, make) VALUES ('奔驰E级(进口)', 4);
insert into model (model, make) VALUES ('奔驰GLA级(进口)', 4);
insert into model (model, make) VALUES ('奔驰GLE级', 4);
insert into model (model, make) VALUES ('奔驰GLK级(进口)', 4);
insert into model (model, make) VALUES ('奔驰GLS级', 4);
insert into model (model, make) VALUES ('奔驰GL级', 4);
insert into model (model, make) VALUES ('奔驰G级', 4);
insert into model (model, make) VALUES ('奔驰M级', 4);
insert into model (model, make) VALUES ('奔驰R级', 4);
insert into model (model, make) VALUES ('奔驰SLK级', 4);
insert into model (model, make) VALUES ('奔驰SL级', 4);
insert into model (model, make) VALUES ('奔驰S级', 4);
insert into model (model, make) VALUES ('劳伦士', 4);
insert into model (model, make) VALUES ('斯宾特Sprinter', 4);
insert into model (model, make) VALUES ('威霆(进口)', 4);
insert into model (model, make) VALUES ('唯雅诺(进口)', 4);
insert into model (model, make) VALUES ('奔驰V级', 4);
insert into model (model, make) VALUES ('凌特', 4);
insert into model (model, make) VALUES ('威霆', 4);
insert into model (model, make) VALUES ('唯雅诺', 4);
insert into model (model, make) VALUES ('AMG GT', 4);
insert into model (model, make) VALUES ('奔驰A级AMG', 4);
insert into model (model, make) VALUES ('奔驰CLA级AMG', 4);
insert into model (model, make) VALUES ('奔驰CLS级AMG', 4);
insert into model (model, make) VALUES ('奔驰C级AMG', 4);
insert into model (model, make) VALUES ('奔驰E级AMG', 4);
insert into model (model, make) VALUES ('奔驰GLA级AMG', 4);
insert into model (model, make) VALUES ('奔驰GLE级AMG', 4);
insert into model (model, make) VALUES ('奔驰GL级AMG', 4);
insert into model (model, make) VALUES ('奔驰G级AMG', 4);
insert into model (model, make) VALUES ('奔驰M级AMG', 4);
insert into model (model, make) VALUES ('奔驰SLK级AMG', 4);
insert into model (model, make) VALUES ('奔驰SLS级AMG', 4);
insert into model (model, make) VALUES ('奔驰SL级AMG', 4);
insert into model (model, make) VALUES ('奔驰S级AMG', 4);
insert into model (model, make) VALUES ('迈巴赫S级', 4);

insert into model (model, make) values ('奥德赛', 5);
insert into model (model, make) values ('缤智', 5);
insert into model (model, make) values ('飞度', 5);
insert into model (model, make) values ('锋范', 5);
insert into model (model, make) values ('锋范经典', 5);
insert into model (model, make) values ('歌诗图', 5);
insert into model (model, make) values ('凌派', 5);
insert into model (model, make) values ('思迪', 5);
insert into model (model, make) values ('雅阁', 5);
insert into model (model, make) values ('艾力绅', 5);
insert into model (model, make) values ('本田CR-V', 5);
insert into model (model, make) values ('本田XR-V', 5);
insert into model (model, make) values ('哥瑞', 5);
insert into model (model, make) values ('杰德', 5);
insert into model (model, make) values ('思铂睿', 5);
insert into model (model, make) values ('思域', 5);
insert into model (model, make) values ('奥德赛(进口)', 5);
insert into model (model, make) values ('本田CR-V(进口)', 5);
insert into model (model, make) values ('本田CR-Z', 5);
insert into model (model, make) values ('飞度(进口)', 5);
insert into model (model, make) values ('里程', 5);
insert into model (model, make) values ('时韵', 5);
insert into model (model, make) values ('思域(进口)', 5);
insert into model (model, make) values ('雅阁(进口)', 5);
insert into model (model, make) values ('音赛特', 5);
insert into model (model, make) values ('元素', 5);

insert into model (model, make) values ('比亚迪F0', 6);
insert into model (model, make) values ('比亚迪F3', 6);
insert into model (model, make) values ('比亚迪F3DM', 6);
insert into model (model, make) values ('比亚迪F3R', 6);
insert into model (model, make) values ('比亚迪F6', 6);
insert into model (model, make) values ('比亚迪G3', 6);
insert into model (model, make) values ('比亚迪G3R', 6);
insert into model (model, make) values ('比亚迪G5', 6);
insert into model (model, make) values ('比亚迪G6', 6);
insert into model (model, make) values ('比亚迪L3', 6);
insert into model (model, make) values ('比亚迪M6', 6);
insert into model (model, make) values ('比亚迪S6', 6);
insert into model (model, make) values ('比亚迪S7', 6);
insert into model (model, make) values ('比亚迪S8', 6);
insert into model (model, make) values ('福莱尔', 6);
insert into model (model, make) values ('秦', 6);
insert into model (model, make) values ('思锐', 6);
insert into model (model, make) values ('宋', 6);
insert into model (model, make) values ('速锐', 6);
insert into model (model, make) values ('唐', 6);

insert into model (model, make) values ('GL8', 7);
insert into model (model, make) values ('昂科拉', 7);
insert into model (model, make) values ('昂科威', 7);
insert into model (model, make) values ('君威', 7);
insert into model (model, make) values ('君越', 7);
insert into model (model, make) values ('凯越', 7);
insert into model (model, make) values ('林荫大道', 7);
insert into model (model, make) values ('荣御', 7);
insert into model (model, make) values ('赛欧', 7);
insert into model (model, make) values ('威朗', 7);
insert into model (model, make) values ('英朗', 7);
insert into model (model, make) values ('昂科雷', 7);

insert into model (model, make) values ('飞驰', 8);
insert into model (model, make) values ('慕尚', 8);
insert into model (model, make) values ('欧陆', 8);
insert into model (model, make) values ('添越', 8);
insert into model (model, make) values ('雅骏', 8);
insert into model (model, make) values ('雅致Arnage', 8);

insert into model (model, make) values ('宝来', 9);
insert into model (model, make) values ('宝来两厢', 9);
insert into model (model, make) values ('高尔夫', 9);
insert into model (model, make) values ('捷达', 9);
insert into model (model, make) values ('开迪', 9);
insert into model (model, make) values ('迈腾', 9);
insert into model (model, make) values ('速腾', 9);
insert into model (model, make) values ('一汽-大众CC', 9);
insert into model (model, make) values ('大众POLO', 9);
insert into model (model, make) values ('高尔', 9);
insert into model (model, make) values ('朗境', 9);
insert into model (model, make) values ('朗行', 9);
insert into model (model, make) values ('朗逸', 9);
insert into model (model, make) values ('凌渡', 9);
insert into model (model, make) values ('帕萨特', 9);
insert into model (model, make) values ('帕萨特领驭', 9);
insert into model (model, make) values ('桑塔纳·浩纳', 9);
insert into model (model, make) values ('桑塔纳·尚纳', 9);
insert into model (model, make) values ('桑塔纳经典', 9);
insert into model (model, make) values ('桑塔纳志俊', 9);
insert into model (model, make) values ('途安', 9);
insert into model (model, make) values ('途观', 9);
insert into model (model, make) values ('PASSAT(进口)', 9);
insert into model (model, make) values ('大众 R36(进口)', 9);
insert into model (model, make) values ('大众CC(进口)', 9);
insert into model (model, make) values ('大众Eos', 9);
insert into model (model, make) values ('大众Multivan', 9);
insert into model (model, make) values ('大众up!', 9);
insert into model (model, make) values ('高尔夫(进口)', 9);
insert into model (model, make) values ('辉腾', 9);
insert into model (model, make) values ('甲壳虫', 9);
insert into model (model, make) values ('凯路威', 9);
insert into model (model, make) values ('迈腾(进口)', 9);
insert into model (model, make) values ('尚酷', 9);
insert into model (model, make) values ('途观(进口)', 9);
insert into model (model, make) values ('途锐', 9);
insert into model (model, make) values ('蔚揽', 9);
insert into model (model, make) values ('夏朗', 9);

insert into model (model, make) values ('御风', 10);

insert into model (model, make) values ('360 Modena', 11);
insert into model (model, make) values ('575M Maranello', 11);
insert into model (model, make) values ('612 Scaglietti', 11);
insert into model (model, make) values ('California', 11);
insert into model (model, make) values ('F12 berlinetta', 11);
insert into model (model, make) values ('LaFerrari', 11);
insert into model (model, make) values ('法拉利458', 11);
insert into model (model, make) values ('法拉利488', 11);
insert into model (model, make) values ('法拉利599', 11);
insert into model (model, make) values ('法拉利F430', 11);
insert into model (model, make) values ('法拉利FF', 11);

insert into model (model, make) values ('RAV4', 12);
insert into model (model, make) values ('花冠', 12);
insert into model (model, make) values ('皇冠', 12);
insert into model (model, make) values ('卡罗拉', 12);
insert into model (model, make) values ('柯斯达', 12);
insert into model (model, make) values ('兰德酷路泽', 12);
insert into model (model, make) values ('普拉多', 12);
insert into model (model, make) values ('普锐斯', 12);
insert into model (model, make) values ('锐志', 12);
insert into model (model, make) values ('特锐', 12);
insert into model (model, make) values ('威驰', 12);
insert into model (model, make) values ('YARiS L 致炫', 12);
insert into model (model, make) values ('汉兰达', 12);
insert into model (model, make) values ('凯美瑞', 12);
insert into model (model, make) values ('凯美瑞Hybrid', 12);
insert into model (model, make) values ('雷凌', 12);
insert into model (model, make) values ('雅力士', 12);
insert into model (model, make) values ('逸致', 12);
insert into model (model, make) values ('4Runner', 12);
insert into model (model, make) values ('FJ酷路泽', 12);
insert into model (model, make) values ('Fortuner', 12);
insert into model (model, make) values ('Sienna', 12);
insert into model (model, make) values ('埃尔法', 12);
insert into model (model, make) values ('丰田86', 12);
insert into model (model, make) values ('丰田MR2', 12);
insert into model (model, make) values ('丰田RAV4(进口)', 12);
insert into model (model, make) values ('丰田Wish', 12);
insert into model (model, make) values ('丰田海狮', 12);
insert into model (model, make) values ('丰田佳美(进口)', 12);
insert into model (model, make) values ('丰田赛利卡(进口)', 12);
insert into model (model, make) values ('海拉克斯(进口)', 12);
insert into model (model, make) values ('汉兰达(进口)', 12);
insert into model (model, make) values ('红杉', 12);
insert into model (model, make) values ('杰路驰', 12);
insert into model (model, make) values ('考斯特(进口)', 12);
insert into model (model, make) values ('兰德酷路泽(进口)', 12);
insert into model (model, make) values ('普拉多(进口)', 12);
insert into model (model, make) values ('普瑞维亚', 12);
insert into model (model, make) values ('坦途', 12);
insert into model (model, make) values ('威飒', 12);
insert into model (model, make) values ('亚洲龙', 12);

insert into model (model, make) values ('福克斯', 13);
insert into model (model, make) values ('福睿斯', 13);
insert into model (model, make) values ('嘉年华', 13);
insert into model (model, make) values ('金牛座', 13);
insert into model (model, make) values ('麦柯斯', 13);
insert into model (model, make) values ('蒙迪欧', 13);
insert into model (model, make) values ('蒙迪欧-致胜', 13);
insert into model (model, make) values ('锐界', 13);
insert into model (model, make) values ('翼搏', 13);
insert into model (model, make) values ('翼虎', 13);
insert into model (model, make) values ('E系列', 13);
insert into model (model, make) values ('Flex', 13);
insert into model (model, make) values ('F系列', 13);
insert into model (model, make) values ('福克斯(进口)', 13);
insert into model (model, make) values ('嘉年华(进口)', 13);
insert into model (model, make) values ('锐界(进口)', 13);
insert into model (model, make) values ('探险者', 13);
insert into model (model, make) values ('外交官', 13);
insert into model (model, make) values ('野马', 13);
insert into model (model, make) values ('翼虎/Kuga(进口)', 13);
insert into model (model, make) values ('征服者', 13);
insert into model (model, make) values ('撼路者', 13);

insert into model (model, make) values ('红旗', 14);
insert into model (model, make) values ('红旗H7', 14);
insert into model (model, make) values ('红旗旗舰', 14);
insert into model (model, make) values ('红旗盛世', 14);
insert into model (model, make) values ('明仕', 14);
insert into model (model, make) values ('世纪星', 14);

insert into model (model, make) values ('博瑞', 15);
insert into model (model, make) values ('博越', 15);
insert into model (model, make) values ('豪情', 15);
insert into model (model, make) values ('豪情SUV', 15);
insert into model (model, make) values ('美人豹', 15);
insert into model (model, make) values ('美日之星', 15);
insert into model (model, make) values ('优利欧', 15);
insert into model (model, make) values ('中国龙', 15);

insert into model (model, make) values ('宾悦', 16);
insert into model (model, make) values ('和悦', 16);
insert into model (model, make) values ('和悦A13', 16);
insert into model (model, make) values ('和悦A30', 16);
insert into model (model, make) values ('瑞风', 16);
insert into model (model, make) values ('瑞风M2', 16);
insert into model (model, make) values ('瑞风M3', 16);
insert into model (model, make) values ('瑞风M5', 16);
insert into model (model, make) values ('瑞风S2', 16);
insert into model (model, make) values ('瑞风S3', 16);
insert into model (model, make) values ('瑞风S5', 16);
insert into model (model, make) values ('瑞风改装车', 16);
insert into model (model, make) values ('瑞铃', 16);
insert into model (model, make) values ('瑞鹰', 16);
insert into model (model, make) values ('同悦', 16);
insert into model (model, make) values ('同悦RS', 16);
insert into model (model, make) values ('星锐', 16);
insert into model (model, make) values ('悦悦', 16);
insert into model (model, make) values ('金牛', 16);
insert into model (model, make) values ('威豹', 16);
insert into model (model, make) values ('雪豹X50', 16);

insert into model (model, make) values ('凯迪拉克ATS-L', 17);
insert into model (model, make) values ('凯迪拉克CT6', 17);
insert into model (model, make) values ('凯迪拉克CTS', 17);
insert into model (model, make) values ('凯迪拉克XTS', 17);
insert into model (model, make) values ('凯迪拉克赛威', 17);
insert into model (model, make) values ('凯迪拉克ATS', 17);
insert into model (model, make) values ('凯迪拉克CTS COUPE', 17);
insert into model (model, make) values ('凯迪拉克CTS(进口)', 17);
insert into model (model, make) values ('凯迪拉克CTS-V(进口)', 17);
insert into model (model, make) values ('凯迪拉克DTS', 17);
insert into model (model, make) values ('凯迪拉克SRX', 17);
insert into model (model, make) values ('凯迪拉克XLR', 17);
insert into model (model, make) values ('凯迪拉克帝威', 17);
insert into model (model, make) values ('凯迪拉克加长版', 17);
insert into model (model, make) values ('凯迪拉克凯雷德', 17);

insert into model (model, make) values ('古斯特', 18);
insert into model (model, make) values ('幻影', 18);
insert into model (model, make) values ('魅影', 18);

insert into model (model, make) values ('雷克萨斯CT', 19);
insert into model (model, make) values ('雷克萨斯ES', 19);
insert into model (model, make) values ('雷克萨斯GS', 19);
insert into model (model, make) values ('雷克萨斯GX', 19);
insert into model (model, make) values ('雷克萨斯IS', 19);
insert into model (model, make) values ('雷克萨斯LF-A', 19);
insert into model (model, make) values ('雷克萨斯LS', 19);
insert into model (model, make) values ('雷克萨斯LX', 19);
insert into model (model, make) values ('雷克萨斯NX', 19);
insert into model (model, make) values ('雷克萨斯RC', 19);
insert into model (model, make) values ('雷克萨斯RX', 19);
insert into model (model, make) values ('雷克萨斯SC', 19);
insert into model (model, make) values ('雷克萨斯RC F', 19);

insert into model (model, make) values ('风景', 20);
insert into model (model, make) values ('风朗', 20);
insert into model (model, make) values ('卡缤', 20);
insert into model (model, make) values ('科雷傲', 20);
insert into model (model, make) values ('拉古那', 20);
insert into model (model, make) values ('雷诺威赛帝', 20);
insert into model (model, make) values ('梅甘娜', 20);
insert into model (model, make) values ('塔利斯曼', 20);
insert into model (model, make) values ('纬度', 20);
insert into model (model, make) values ('科雷嘉', 20);

insert into model (model, make) values ('城市', 21);
insert into model (model, make) values ('林肯MKC', 21);
insert into model (model, make) values ('林肯MKS', 21);
insert into model (model, make) values ('林肯MKT', 21);
insert into model (model, make) values ('林肯MKX', 21);
insert into model (model, make) values ('林肯MKZ', 21);
insert into model (model, make) values ('林肯加长版', 21);
insert into model (model, make) values ('领航员', 21);

insert into model (model, make) values ('发现', 22);
insert into model (model, make) values ('发现神行(进口)', 22);
insert into model (model, make) values ('揽胜', 22);
insert into model (model, make) values ('揽胜极光(进口)', 22);
insert into model (model, make) values ('揽胜运动版', 22);
insert into model (model, make) values ('路虎卫士', 22);
insert into model (model, make) values ('神行者2代', 22);
insert into model (model, make) values ('自由人', 22);
insert into model (model, make) values ('发现神行', 22);
insert into model (model, make) values ('揽胜极光', 22);

insert into model (model, make) values ('阿特兹', 23);
insert into model (model, make) values ('马自达6', 23);
insert into model (model, make) values ('马自达8', 23);
insert into model (model, make) values ('马自达CX-7', 23);
insert into model (model, make) values ('睿翼', 23);
insert into model (model, make) values ('马自达2', 23);
insert into model (model, make) values ('马自达3', 23);
insert into model (model, make) values ('马自达3 Axela昂克赛拉', 23);
insert into model (model, make) values ('马自达3星骋', 23);
insert into model (model, make) values ('马自达CX-5', 23);
insert into model (model, make) values ('海南马自达323', 23);
insert into model (model, make) values ('Mazda6(进口)', 23);
insert into model (model, make) values ('阿特兹ATENZA(进口)', 23);
insert into model (model, make) values ('马自达3(进口)', 23);
insert into model (model, make) values ('马自达5', 23);
insert into model (model, make) values ('马自达8(进口)', 23);
insert into model (model, make) values ('马自达CX-5(进口)', 23);
insert into model (model, make) values ('马自达CX-7(进口)', 23);
insert into model (model, make) values ('马自达CX-9', 23);
insert into model (model, make) values ('马自达MX-5', 23);
insert into model (model, make) values ('马自达RX-8', 23);

insert into model (model, make) values ('迈巴赫', 24);

insert into model (model, make) values ('艾瑞泽3', 25);
insert into model (model, make) values ('艾瑞泽5', 25);
insert into model (model, make) values ('艾瑞泽7', 25);
insert into model (model, make) values ('艾瑞泽M7', 25);
insert into model (model, make) values ('东方之子', 25);
insert into model (model, make) values ('东方之子CROSS', 25);
insert into model (model, make) values ('风云', 25);
insert into model (model, make) values ('风云2', 25);
insert into model (model, make) values ('奇瑞A1', 25);
insert into model (model, make) values ('奇瑞A3', 25);
insert into model (model, make) values ('奇瑞A5', 25);
insert into model (model, make) values ('奇瑞E3', 25);
insert into model (model, make) values ('奇瑞E5', 25);
insert into model (model, make) values ('奇瑞QQ', 25);
insert into model (model, make) values ('奇瑞QQ6', 25);
insert into model (model, make) values ('奇瑞QQme', 25);
insert into model (model, make) values ('奇瑞X1', 25);
insert into model (model, make) values ('旗云', 25);
insert into model (model, make) values ('旗云1', 25);
insert into model (model, make) values ('旗云2', 25);
insert into model (model, make) values ('旗云3', 25);
insert into model (model, make) values ('旗云5', 25);
insert into model (model, make) values ('瑞虎', 25);
insert into model (model, make) values ('瑞虎3', 25);
insert into model (model, make) values ('瑞虎5', 25);
insert into model (model, make) values ('奇瑞QQ3EV', 25);

insert into model (model, make) values ('LANNIA 蓝鸟', 26);
insert into model (model, make) values ('骏逸', 26);
insert into model (model, make) values ('蓝鸟', 26);
insert into model (model, make) values ('骊威', 26);
insert into model (model, make) values ('楼兰', 26);
insert into model (model, make) values ('玛驰', 26);
insert into model (model, make) values ('奇骏', 26);
insert into model (model, make) values ('骐达', 26);
insert into model (model, make) values ('天籁', 26);
insert into model (model, make) values ('逍客', 26);
insert into model (model, make) values ('轩逸', 26);
insert into model (model, make) values ('阳光', 26);
insert into model (model, make) values ('颐达', 26);
insert into model (model, make) values ('D22皮卡', 26);
insert into model (model, make) values ('D22厢式车', 26);
insert into model (model, make) values ('帕拉丁', 26);
insert into model (model, make) values ('日产ZN6493', 26);
insert into model (model, make) values ('日产ZN6494', 26);
insert into model (model, make) values ('郑州日产NV200', 26);
insert into model (model, make) values ('碧莲', 26);
insert into model (model, make) values ('贵士', 26);
insert into model (model, make) values ('楼兰(进口)', 26);
insert into model (model, make) values ('奇骏(进口)', 26);
insert into model (model, make) values ('日产350Z', 26);
insert into model (model, make) values ('日产370Z', 26);
insert into model (model, make) values ('日产GT-R', 26);
insert into model (model, make) values ('日产Juke', 26);
insert into model (model, make) values ('日产风度', 26);
insert into model (model, make) values ('日产风雅', 26);
insert into model (model, make) values ('途乐', 26);

insert into model (model, make) values ('Model S', 27);

insert into model (model, make) values ('五菱宏光', 28);
insert into model (model, make) values ('五菱鸿途', 28);
insert into model (model, make) values ('五菱荣光', 28);
insert into model (model, make) values ('五菱荣光V', 28);
insert into model (model, make) values ('五菱小旋风', 28);
insert into model (model, make) values ('五菱兴旺', 28);
insert into model (model, make) values ('五菱扬光', 28);
insert into model (model, make) values ('五菱之光', 28);

insert into model (model, make) values ('夏利', 29);
insert into model (model, make) values ('夏利2000', 29);
insert into model (model, make) values ('夏利A+', 29);
insert into model (model, make) values ('夏利N3', 29);
insert into model (model, make) values ('夏利N3+', 29);
insert into model (model, make) values ('夏利N5', 29);
insert into model (model, make) values ('夏利N7', 29);

insert into model (model, make) values ('MISTRA名图', 30);
insert into model (model, make) values ('北京现代i30', 30);
insert into model (model, make) values ('北京现代ix25', 30);
insert into model (model, make) values ('北京现代ix35', 30);
insert into model (model, make) values ('朗动', 30);
insert into model (model, make) values ('领动', 30);
insert into model (model, make) values ('领翔', 30);
insert into model (model, make) values ('名驭', 30);
insert into model (model, make) values ('全新胜达', 30);
insert into model (model, make) values ('瑞纳', 30);
insert into model (model, make) values ('瑞奕', 30);
insert into model (model, make) values ('索纳塔', 30);
insert into model (model, make) values ('途胜', 30);
insert into model (model, make) values ('雅绅特', 30);
insert into model (model, make) values ('伊兰特', 30);
insert into model (model, make) values ('御翔', 30);
insert into model (model, make) values ('悦动', 30);
insert into model (model, make) values ('飞思', 30);
insert into model (model, make) values ('格锐', 30);
insert into model (model, make) values ('辉翼', 30);
insert into model (model, make) values ('捷恩斯', 30);
insert into model (model, make) values ('君爵', 30);
insert into model (model, make) values ('酷派', 30);
insert into model (model, make) values ('劳恩斯', 30);
insert into model (model, make) values ('劳恩斯coupe', 30);
insert into model (model, make) values ('全新胜达(进口)', 30);
insert into model (model, make) values ('世纪', 30);
insert into model (model, make) values ('索纳塔(进口)', 30);
insert into model (model, make) values ('维拉克斯', 30);
insert into model (model, make) values ('现代美佳', 30);
insert into model (model, make) values ('新胜达(进口)', 30);
insert into model (model, make) values ('雅科仕', 30);
insert into model (model, make) values ('雅尊', 30);

insert into model (model, make) values ('爱唯欧', 31);
insert into model (model, make) values ('创酷', 31);
insert into model (model, make) values ('景程', 31);
insert into model (model, make) values ('科鲁兹', 31);
insert into model (model, make) values ('科帕奇', 31);
insert into model (model, make) values ('乐骋', 31);
insert into model (model, make) values ('乐风', 31);
insert into model (model, make) values ('乐风RV', 31);
insert into model (model, make) values ('迈锐宝', 31);
insert into model (model, make) values ('迈锐宝XL', 31);
insert into model (model, make) values ('赛欧', 31);
insert into model (model, make) values ('乐驰', 31);
insert into model (model, make) values ('科尔维特', 31);
insert into model (model, make) values ('科迈罗', 31);
insert into model (model, make) values ('科帕奇(进口)', 31);
insert into model (model, make) values ('斯帕可', 31);
insert into model (model, make) values ('沃蓝达', 31);
insert into model (model, make) values ('雪佛兰EXPRESS', 31);
insert into model (model, make) values ('雪佛兰开拓者', 31);

INSERT into model (model, make) values ('C4世嘉', 32);
INSERT into model (model, make) values ('爱丽舍', 32);
INSERT into model (model, make) values ('富康', 32);
INSERT into model (model, make) values ('凯旋', 32);
INSERT into model (model, make) values ('萨拉-毕加索', 32);
INSERT into model (model, make) values ('赛纳', 32);
INSERT into model (model, make) values ('世嘉', 32);
INSERT into model (model, make) values ('雪铁龙C2', 32);
INSERT into model (model, make) values ('雪铁龙C3-XR', 32);
INSERT into model (model, make) values ('雪铁龙C4L', 32);
INSERT into model (model, make) values ('雪铁龙C5', 32);
INSERT into model (model, make) values ('C4 AIRCROSS', 32);
INSERT into model (model, make) values ('C4毕加索', 32);
INSERT into model (model, make) values ('雪铁龙C3', 32);
INSERT into model (model, make) values ('雪铁龙C4', 32);
INSERT into model (model, make) values ('雪铁龙C5(进口)', 32);
INSERT into model (model, make) values ('雪铁龙C6', 32);

insert into model (model, make) values ('佳宝', 33);
insert into model (model, make) values ('森雅M80', 33);
insert into model (model, make) values ('森雅S80', 33);
insert into model (model, make) values ('一汽奥星', 33);
insert into model (model, make) values ('骏派D60', 33);
insert into model (model, make) values ('威乐', 33);
insert into model (model, make) values ('威志', 33);
insert into model (model, make) values ('威志V2', 33);
insert into model (model, make) values ('威志V5', 33);
insert into model (model, make) values ('威姿', 33);
insert into model (model, make) values ('自由风', 33);
insert into model (model, make) values ('森雅', 33);
insert into model (model, make) values ('一汽佳星幸福使者', 33);
insert into model (model, make) values ('坤程', 33);

insert into model (model, make) values ('英菲尼迪ESQ', 34);
insert into model (model, make) values ('英菲尼迪EX', 34);
insert into model (model, make) values ('英菲尼迪FX', 34);
insert into model (model, make) values ('英菲尼迪G', 34);
insert into model (model, make) values ('英菲尼迪JX35(QX60)', 34);
insert into model (model, make) values ('英菲尼迪M', 34);
insert into model (model, make) values ('英菲尼迪Q50', 34);
insert into model (model, make) values ('英菲尼迪Q60', 34);
insert into model (model, make) values ('英菲尼迪Q60S', 34);
insert into model (model, make) values ('英菲尼迪Q70L', 34);
insert into model (model, make) values ('英菲尼迪QX50(进口)', 34);
insert into model (model, make) values ('英菲尼迪QX60', 34);
insert into model (model, make) values ('英菲尼迪QX70', 34);
insert into model (model, make) values ('英菲尼迪QX80(QX56)', 34);
insert into model (model, make) values ('英菲尼迪Q50L', 34);
insert into model (model, make) values ('英菲尼迪QX50', 34);

insert into price (start, end, description) values (0, 20000, '低于2万');
insert into price (start, end, description) values (20000, 50000, '2-5万');
insert into price (start, end, description) values (50000, 80000, '5-8万');
insert into price (start, end, description) values (80000, 120000, '8-12万');
insert into price (start, end, description) values (120000, 160000, '12-16万');
insert into price (start, end, description) values (160000, 200000, '16-20万');
insert into price (start, end, description) values (200000, 300000, '20-30万');
insert into price (start, end, description) values (300000, 400000, '30-40万');
insert into price (start, end, description) values (400000, 500000, '40-50万');
insert into price (start, end, description) values (500000, 1000000, '50-100万');

insert into type (id, description) values (1, 'SUV');
insert into type (id, description) values (2, '轿车');
insert into type (id, description) values (3, '敞篷车');
insert into type (id, description) values (4, '跑车');
insert into type (id, description) values (5, '混合动力');
insert into type (id, description) values (6, '卡车');
insert into type (id, description) values (7, '房车');
insert into type (id, description) values (8, '省油车');
insert into type (id, description) values (9, '经济代步');
insert into type (id, description) values (10, '高性价比');

insert into year (start, end, description) values (2016, 2016, '2016');
insert into year (start, end, description) values (2015, 2015, '2015');
insert into year (start, end, description) values (2014, 2014, '2014');
insert into year (start, end, description) values (2013, 2013, '2013');
insert into year (start, end, description) values (2012, 2012, '2012');
insert into year (start, end, description) values (2011, 2011, '2011');
insert into year (start, end, description) values (2010, 2010, '2010');
insert into year (start, end, description) values (2009, 2009, '2009');
insert into year (start, end, description) values (2008, 2008, '2008');
insert into year (start, end, description) values (2000, 2007, '2000 - 2007');
insert into year (start, end, description) values (1993, 1999, '1993 - 1999');

insert into car (model, type, price, year, mile, fixed, title, description, user) values (439, 2, 62800, 2008, 121100, 0, "哈哈哈", 4);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (11, 2, 378500, 2014, 14400, 0, "奥迪 2014年款 A5 Coupe 2.0TFSI 无级 45TFSI", "奥迪 2014年款 A5 Coupe 2.0TFSI 无级 45TFSI", 3);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (65, 2, 248900, 2013, 40700, 0, "奔驰 2013年款 C 260 1.8T 手自一体 时尚型Grand Edition", "奔驰 2013年款 C 260 1.8T 手自一体 时尚型Grand Edition", 5);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (66, 2, 366800, 2015, 37200, 0, "奔驰 2015年款 E 260 L 2.0T 手自一体(改款)", "奔驰 2015年款 E 260 L 2.0T 手自一体(改款)", 5);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (419, 9, 22000, 2012, 12300, 0, "奇瑞 2012年款 QQ3 1.0 手动 时尚版启航型", "奇瑞 2012年款 QQ3 1.0 手动 时尚版启航型", 4);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (514, 2, 78000, 2014, 22100, 0, "雪佛兰 2013年款 科鲁兹 1.6 手动 SE", "雪佛兰 2013年款 科鲁兹 1.6 手动 SE", 3);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (154, 2, 163800, 2015, 15800, 0, "比亚迪 2015年款 秦 1.5T 双离合 双冠旗舰版", "比亚迪 2015年款 秦 1.5T 双离合 双冠旗舰版", 3);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (169, 2, 99800, 2015, 15000, 0, "别克 2014年款 英朗XT 1.6 手自一体 时尚版", "别克 2014年款 英朗XT 1.6 手自一体 时尚版", 5);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (62, 4, 665800, 2015, 6300, 0, "X2.7T自动涡轮增压。 出售2015年6月上牌保时捷，2.7V6发动机，电动车窗，电动调节后视镜，自动调节空调，自动大灯，大灯清洗装置，倒车雷达，真皮坐椅，前排电动座椅，前排座椅电加热，多安全气囊。公里数少，车主当时加装十几万，类似新车。。本公司购车可贷款，不限年限，利率低。您所购买的任何车型均可享受（发动机、变速箱、差速器、涡轮增压器、冷却系统、制动系统、电气系统、转向系统）质保1年（不限地区），本车经过车易拍268V行认证， 让您买的称心，用的放心.", 4);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (63, 1, 596000, 2014, 25000, 0, "保时捷 2014年款 Macan 2.0T 双离合", "", 5);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (197, 1, 108900, 2012, 48500, 0, "大众 2011年款 途安 1.4TSI 双离合 5座智雅版", "", 3);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (159, 1, 179800, 2011, 163700, 0, "别克 2011年款 GL8 豪华商务车 2.4 手自一体 LT 行政版", "", 3);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (388, 9, 123800, 2012, 57100, 0, "马自达 2011年款 睿翼 2.0 手自一体 精英版", "", 4);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (277, 1, 183800, 2014, 20400, 0, "福特 2013年款 翼虎 1.6GTDi 手自一体 四驱精英型", "", 5);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (572, 1, 428000, 2014, 13000, 0, "英菲尼迪 2014年款 QX60 Hybrid [QX60 油电混合] 2.5T 无级 两驱卓越版", "", 2);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (563, 1, 318000, 2010, 13000, 0, "英菲尼迪 2010年款 FX35 3.5 手自一体 标准版", "X3.5T自动涡轮增压。 私家一手车保养好成色新，无泡水无事故，全程4S店保养，全国可以上牌，支持按揭。欢迎询价来店看车有优惠。上海歆顺精品二手车承诺： 1. 本公司从事汽车行业多年，主要经营精品二手车, 秉承收购车辆严谨，车况实事求实；诚信为本、只做精品、不做泡水车、事故车、手续不全和 营运车；2. 所有发布的车辆照片都是真车实照，客户可以要求实时传送照片鉴别。所有车型都经过严格检测认证后进入网站销售。3. 所有车型均可享受 发动机、变速箱 质保3个月。4. 所有购车者免费赠送牌照，按国家政策上牌，因为我们的专业致使你们的放心！5. 贷款分期购车，可以享受免月供、免利息优惠。无担保，无需任何抵押。", 2);
insert into car (model, type, price, year, mile, fixed, title, description, user) values (127, 9, 133800, 2012, 74100, 0, "英菲尼迪 2014年款 QX60 Hybrid [QX60 油电混合] 2.5T 无级 两驱卓越版", "", 4);