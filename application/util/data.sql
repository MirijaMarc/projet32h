--------------------SCHEMA--------------------

create table User(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email varchar(50) NOT NULL,
    nom varchar(50) NOT NULL,
    datenaissance date NOT NULL,
    password varchar(50) NOT NULL,
    isadmin int NOT NULL
);


------------------DATA----------------------

insert into User values
    (null,'miri@gmail.com','mirija','2003/11/30','bonjour',0),
    (null,'wijjy@gmail.com','wijjy','2000/10/12','wijjy66',0),
    (null,'hasina@gmail.com','hasina','2004/07/02','bonjour2',0),
    (null,'clara@gmail.com','clara','2005/01/22','123456',0),
    (null,'morgane@gmail.com','morgane','2007/12/23','mdp25',0);
insert into User (email,nom,datenaissance,password,isadmin) values ('jean@gmail.com','jean','2008-04-23','jojo',0);
insert into User (email,nom,datenaissance,password,isadmin) values ('root@gmail.com','root','2002-04-20','root',1);




