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
