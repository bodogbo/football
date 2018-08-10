create database football;
use football;

create table analysis(id int not null auto_increment primary key, time datetime, left_team char(64) not null default '', right_team char(64) not null default '', rate_win float(3, 2) not null default 0, rate_even float(3, 2) not null default 0, rate_lose float(3, 2) not null default 0, handicap_up float(3, 2) not null default 0, handicap_score char(16) not null default '', handicap_down float(3, 2) not null default 0,  score char(4) not null default '', note varchar(200) not null default '');
