create database petstore;
use petstore;

CREATE TABLE customer (
    customer_id int not null AUTO_INCREMENT,
    email varchar(80) not null,
	password varchar(25) not null,
    firstname varchar(80) not null,
    lastname varchar(80) not null,
    addr1 varchar(80) not null,
    addr2 varchar(40) null,
    city varchar(80) not  null,
    state varchar(80) not null,
    zip varchar(20) not null,
    country varchar(20) not null,
    phone varchar(80) not null,
PRIMARY KEY (customer_id));

ALTER TABLE CUSTOMER AUTO_INCREMENT = 9001;

CREATE TABLE orders(
order_id int not null AUTO_INCREMENT,
customer_id int not null,
orderdate date not null,
totalamount decimal(10,2) not null,
PRIMARY KEY (order_id),
FOREIGN KEY(customer_id) REFERENCES customer(customer_id) ON DELETE CASCADE);

ALTER TABLE ORDER AUTO_INCREMENT = 901;

CREATE TABLE order_details(
orderdetail_id int not null AUTO_INCREMENT,
order_id int not null,
pettype_id int not null,
quantity int not null,
primary key(orderdetail_id),
FOREIGN KEY(order_id) REFERENCES orders(order_id) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(pettype_id) REFERENCES pet(pettype_id) ON DELETE CASCADE ON UPDATE CASCADE
);
ALTER TABLE ORDER AUTO_INCREMENT = 10001;

CREATE TABLE CATEGORY(
category_id int not null,
categoryname varchar(30) not null,
primary key (category_id)
);

CREATE TABLE PET(
pettype_id int not null,
category_id int not null,
typename varchar(30) not null,
description varchar(150) not null,
stock int not null,
price decimal(10,2) not null,
primary key (pettype_id),
FOREIGN KEY(category_id) REFERENCES category(category_id) on DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO CATEGORY VALUES(101,'Dog');
INSERT INTO CATEGORY VALUES(102,'Cat');
INSERT INTO CATEGORY VALUES(103,'Fish');
INSERT INTO CATEGORY VALUES(104,'Birds');
INSERT INTO CATEGORY VALUES(105,'Reptile');



INSERT INTO PET VALUES(1001,101,'German Sheperd Dog','Gentle, Intelligent, Good-tempered, Kind, Outgoing, Agile', 10, 79.99);
INSERT INTO PET VALUES(1002,101,'Hamilton Hound Dog','Courageous, Devoted, Patient, Energetic, Even Tempered, Friendly',10,89.99);
INSERT INTO PET VALUES(1003,101,'American Akita','Dignified, Alert, Friendly, Courageous, Docile, Responsive',10,69.99);
INSERT INTO PET VALUES(1004,101,'Portuguese Podengo','Friendly, Companionable, Active, Lively, Intelligent, Hardy',10,99.99);
INSERT INTO PET VALUES(1005,101,'Pomerian','Active, Playful, Intelligent, Sociable, Friendly, Extroverted',10,49.99);
INSERT INTO PET VALUES(1006,102,'Persian','Short, heavily boned legs support the Persian boxy body',10,29.99);
INSERT INTO PET VALUES(1007,102,'Scottish Fold','Sweet disposition,playful',10,39.99);
INSERT INTO PET VALUES(1008,102,'Somali','Light and quick on its paws,intelligent like fox',10,49.99);
INSERT INTO PET VALUES(1009,102,'Turkish Angora','sensuously silky, luxurious texture',10,59.99);
INSERT INTO PET VALUES(1010,102,'Korat','territorial,faithful,demanding, companion',10,69.99);
INSERT INTO PET VALUES(1011,103,'Tetra','active schooling fish that work well in the peaceful community aquarium',10,3.99);
INSERT INTO PET VALUES(1012,103,'Pleco','housed in a community tank as a single member of its species',10,2.99);
INSERT INTO PET VALUES(1013,103,'Goldfish','Strong associative learning abilities,social learning skills',10,7.99);
INSERT INTO PET VALUES(1014,103,'Betta','small, often colorful',10,4.99);
INSERT INTO PET VALUES(1015,103,'Guppies','more abundant in smaller streams and pools than in large, deep rivers',10,8.99);
INSERT INTO PET VALUES(1016,104,'Blackcap Conure',' diverse, loosely-defined group of small to medium-sized parrot',10,10.99);
INSERT INTO PET VALUES(1017,104,'Canary','small but looks nice',10,15.99);
INSERT INTO PET VALUES(1018,104,'Dove','comes under pigeon family',10,20.99);
INSERT INTO PET VALUES(1019,104,'Finch','seed-eating songbirds',10,8.99);
INSERT INTO PET VALUES(1020,104,'Parakeet','species of parrot',10,7.99);
INSERT INTO PET VALUES(1021,105,'African Dwarf Frog','small aquatic frogs',10,15.99);
INSERT INTO PET VALUES(1022,105,'African Turtle','third largest tortoise species',10,24.99);
