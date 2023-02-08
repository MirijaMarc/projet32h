create table  User(
    id int Not null auto_increment primary key,
    email VARCHAR(50) not null,
    nom VARCHAR (50) not null,
    datenaissance date not null,
    password varchar(50) not null,
    isadmin int not null
 );

 CREATE table categorie (
    id int not null auto_increment primary key,
    nomcategorie VARCHAR(50) not null
 );

CREATE table objet(
   id int not null auto_increment primary key,
   nomobjet VARCHAR(50) not null,
   description TEXT not null,
   prix decimal not null,
   iduser int not null,
   idcategorie int not null,
   foreign key (iduser) references User(id),
   foreign key (idcategorie) references categorie(id)

);

 create table photo(
   id int not null auto_increment primary key,
   idobjet int not null,
   lien VARCHAR(100)not null,
   foreign key (idobjet) references objet(id)
 );
 create table echange(
   id int not null auto_increment primary key,
   iddemandant int not null,
   iddemande int not null,
   etat int,
   foreign key (iddemandant) references objet(id),
   foreign key (iddemande) references objet(id)
 );

 create table Historique(
    id int not null auto_increment primary key,
    idobjet int not null,
    iduser int not null,
    dateappartenance date not null,
    foreign key (idobjet) references objet(id),
    foreign key (iduser) references User(id)
 );


insert into User values
    (null,'miri@gmail.com','mirija','2003/11/30','bonjour',0),
    (null,'wijjy@gmail.com','wijjy','2000/10/12','wijjy66',0),
    (null,'hasina@gmail.com','hasina','2004/07/02','bonjour2',0),
    (null,'clara@gmail.com','clara','2005/01/22','123456',0),
    (null,'morgane@gmail.com','morgane','2007/12/23','mdp25',0);
insert into User (email,nom,datenaissance,password,isadmin) values ('jean@gmail.com','jean','2008-04-23','jojo',0);
insert into User (email,nom,datenaissance,password,isadmin) values ('root@gmail.com','root','2002-04-20','root',1);


insert into categorie(nomcategorie) values
    ('vetements'),
    ('electronique'),
    ('literature');

insert into objet(nomobjet,description,prix,iduser,idcategorie) values
    ('pantalon','Jean gris LEVIS de taille 32 du modele XXX',12000,2,1), 
    ('tee-shirt','Tee-shirt Blue de taille XL ideale pour la plage',10000,4,1),
    ('short','Short beige taille 36 tres confortable ideale pour les rendonnee',7000,3,1),
    ('casquette','Casquette Red Bull Racing F1 kids 2022 signe par Verstapen',50000,1,1), 
    ('gant','Thw Glove S22 Thor MX Spectrum, tres confortable, edition limitee ',25000,3,1),
    ('imprimante','Imprimante HP modele XXX 2019',50000,2,2),
    ('camera','Nikon 5D grande ouverture, avec zoom x3,x5,x10 ',80000,3,2),
    ('ordinateur','Asus XXX modele 2022 core i9 12267X, RTX 4090, SSD 2To',1500000,1,2),
    ('telephone','Samsung Galaxy S23 Ultra: snapdragon 8Gen2, 1To, Ram 12GO',1000000,3,2),
    ('tablette','Galaxie Tab s8 ultra: snapdragon 8Gen2, 1To, Ram 12GO',1200000,2,2),
    ('Harry Potter','Harry potter Tome 1 auteur J.K.Rowling vendu a 1 milliard d exemplaire',50000,5,3),
    ('Les miserables','Livre de poche ecrit par Victor Hugo vendu a 100000 exemplaire',30000,2,3),
    ('Orgeuil et prejuges','livre de poche ecrit par Jane Austen vendu 10000000 d exemplaire',40000,3,3),
    ('Le petit prince','Livre de poche ecrit par Antoine de Saint-Exupery edition XXX',20000,4,3),
    ('Art de la guerre','Livre de poche ecrit par Sun Zu vendu a 8000000 d exemplaire partout dans le monde',30000,3,3);

insert into photo(idobjet,lien) values
    (1,'img/vetements/1'),
    
    (2,'img/vetements/2'),
    
    (3,'img/vetements/3'),
    
    (4,'img/vetements/4'),
  
    (5,'img/vetements/5'),
    
    (6,'img/electronique/6'),
    
    (7,'img/electronique/7'),
    
    (8,'img/electronique/8'),
    
    (9,'img/electronique/9'),
   
    (10,'img/electronique/10'),
   
    (11,'img/literature/11'),
    
    (12,'img/literature/12'),
    
    (13,'img/literature/13'),
    
    (14,'img/literature/14'),
    
    (15,'img/literature/15'),




insert into Historique (idobjet,iduser,dateappartenance) values
    (1,2,current_date),
    (2,4,current_date),
    (3,3,current_date),
    (4,1,current_date),
    (5,3,current_date),
    (6,2,current_date),
    (7,3,current_date),
    (8,1,current_date),
    (9,3,current_date),
    (10,2,current_date),
    (11,5,current_date),
    (12,2,current_date),
    (13,3,current_date),
    (14,4,current_date),
    (15,3,current_date);

select o.id, o.nomobjet,o.description,o.prix,u.nom, c.nomcategorie from objet as o Join user as u on o.iduser=u.id JOIN categorie as c on o.idcategorie=c.id where o.id Not IN (Select idobjet from valide) AND o.iduser=4;

select o.id, o.nomobjet,o.description,o.prix,u.nom, c.nomcategorie from objet as o Join user as u on o.iduser=u.id JOIN categorie as c on o.idcategorie=c.id where o.id Not IN (Select idobjet from valide) AND o.iduser=4 AND o.id NOT IN (SELECT iddemandant from echange where iddemande= and etat=0);

select e.id,e.iddemandant,e.iddemande,c.nomcategorie as nom1,c2.nomcategorie as nom2 from echange as e JOIN objet as o ON e.iddemandant=o.id JOIN objet as o2 ON e.iddemande=o2.id JOIN categorie as c2 ON o2.idcategorie=c2.id JOIN categorie as c ON o.idcategorie=c.id where e.iddemande IN(select id from objet where iduser=4 and etat=0);

select o.id, o.nomobjet,o.description,o.prix,u.nom, c.nomcategorie from objet as o Join user as u on o.iduser=u.id JOIN categorie as c on o.idcategorie=c.id where o.description like '%modele%' and o.idcategorie=2;

select u.nom,h.dateappartenance from Historique as h Join User as u On h.iduser=u.id Where h.idobjet=3 ORDER by h.dateappartenance;