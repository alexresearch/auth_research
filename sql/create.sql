create table users (
    id int unsigned not null auto_increment,
    login varchar(16) not null,
    password varchar(128) not null,
    hash varchar(128),
    ip int unsigned,
    photo varchar(128),
    primary key(id) 
) engine=MyISAM default charset=cp1251 auto_increment=1;