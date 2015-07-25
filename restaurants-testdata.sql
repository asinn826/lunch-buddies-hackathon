drop table users;
drop database restaurants;
create database restaurants;
use restaurants;
create table users (
    PersonName varchar(255),
    PeanutAllergy tinyint(1),
    GlutenFree tinyint(1),
    Vegan tinyint(1)
);

insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Bob', 1, 1, 1);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Jim', 0, 0, 1);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Janice', 0, 1, 1);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Kim', 0, 1, 0);