drop database if exists framework;
create database framework;
use framework;


create table Country(
	id int(10) UNSIGNED NOT NULL auto_increment,
    name varchar(300) NOT null,
    capitalCity varchar(300) not null,
    continent enum('Afrika', 'Azie', 'Oceanië', 'Europa', 'Noord-Amerika', 'Zuid-Amerika') NOT NULL,
    population int(10) UNSIGNED NOT NULL,
    PRIMARY KEY (id)
    ) engine = InnoDB CHARSET = latin1;
    
insert into Country values(null, 'Nederland', 'Amsterdam', 'Europa', '17134872');
insert into Country values(null, 'Duitsland', 'Berlijn', 'Europa', '87566872');
insert into Country values(null, 'Belgie', 'Brussel', 'Europa', '17134872');
insert into Country values(null, 'Verenigde Staten', 'Washington', 'Noord-Amerika', '271348724');
insert into Country values(null, 'Australie', 'Canberra', 'Oceanië', '29134874');


select* from Country;
