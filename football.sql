create database football;
use football;

create table analysis(id int not null auto_increment primary key, time datetime, left_team char(64) not null default '', right_team char(64) not null default '', rate_win float(3, 2) not null default 0, rate_even float(3, 2) not null default 0, rate_lose float(3, 2) not null default 0, handicap_up float(3, 2) not null default 0, handicap_score char(16) not null default '', handicap_down float(3, 2) not null default 0,  score char(4) not null default '', note varchar(200) not null default '', rate_result char(10) not null default '', handicap_note varchar(20) not null default '', macao_result char(10) not null default '', recheck varchar(20) not null default '', last_result varchar(20) not null default '', gamble_result char(1) not null default '');

alter table analysis add column rate_result char(10) not null default '';
alter table analysis add column handicap_note varchar(20) not null default '';
alter table analysis add column macao_result char(10) not null default '';
alter table analysis add column recheck varchar(20) not null default '';
alter table analysis add column last_result varchar(20) not null default '';
alter table analysis add column gamble_result char(1) not null default '';
