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
    values('Jerry', 0, 1, 0);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Jonathan', 0, 1, 0);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Kimberly', 0, 1, 0);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Sally', 0, 1, 0);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Harry', 0, 1, 0);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Donald', 0, 1, 0);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Shaquila', 0, 1, 0);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Larry', 0, 1, 0);
insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values('Gordon', 0, 1, 0);