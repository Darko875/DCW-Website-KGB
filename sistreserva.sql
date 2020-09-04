CREATE DATABASE sistreserva;

use sistreserva;

CREATE TABLE user(
    uid int PRIMARY KEY AUTO_INCREMENT,
    user varchar(20) not null,
    email varchar(120) UNIQUE NOT NULL,
    password varchar(100) Not NULL
)

CREATE TABLE hospede(
nid int PRIMARY Key NOT NULL AUTO_INCREMENT,
nome varchar(30) NOT NULL,
data_nascimento date NOT NULL,
nacionalidade varchar(30) NOT NULL,
n_cont int NOT NULL,
uid int,
FOREIGN KEY (uid) REFERENCES user(uid) ON DELETE CASCADE
);

CREATE TABLE imovel(
idc int PRIMARY Key NOT NULL AUTO_INCREMENT,
tipo varchar(10) NOT NULL,
tipologia varchar(10) NOT NULL,
preco real NOT NULL,
descricao char(200) NOT NULL,
cidade_im varchar(80) NOT NULL,
image varchar(255) NOT NULL);

CREATE TABLE reserva(
idf int PRIMARY Key NOT NULL AUTO_INCREMENT,
data_entrada datetime NOT NULL,
data_saida datetime NOT NULL,
npessoas int NOT NULL, 
uid int NOT NULL,
idc int NOT NULL,
FOREIGN kEY (uid) REFERENCES user(uid) ON DELETE CASCADE,
FOREIGN kEY (idc) REFERENCES imovel(idc) ON DELETE CASCADE);

insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (1, 'Apartamento', 'T0', '200.86', 'hhusdahudhauhsd', 'Smilavichy', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (2, 'Apartamento', 'T1', '600.00', 'adhasdhasudhausdha', 'Shōbara', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (3, 'Apartamento', 'T2', '500.86', 'adsasdasdasdasda', 'San Martin', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (4, 'Apartamento', 'T3', '300.05', 'dasasdasdasdad', 'Des Moines', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (5, 'Apartamento', 'T0', '100.53', 'adsdasdssadasdsa', 'Vrbas', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (6, 'Apartamento', 'T1', '300.33', 'dsadsasdasdasaddsa', 'Badaogu', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (7, 'Apartamento', 'T2', '800.10', 'dasdssadsdadsaassadsad', 'White City', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (8, 'Moradia', 'T2', '300.47', 'sdadsadsadsasadasdsaasdsd', 'Kihancha', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (9, 'Moradia', 'T1', '200.04', 'sdadasdsadsasdsadsadasdsadsadsad', 'Dunaivtsi', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (10, 'Moradia', 'T0', '900.50', 'dsadasdassdasdaaaaaaaaasadddddddd', 'Sopo', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (11, 'Moradia', 'T1', '600.96', 'asddsaaaaaaaaaaaasdaaaaaaaaaaaa', 'Baishigou', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (12, 'Moradia', 'T2', '900.58', 'asddddddddddddddddddddddddddsdadsadsa', 'Kainan', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (13, 'Moradia', 'T3', '900.13', 'saddsaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Planken', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (14, 'Moradia', 'T1', '200.88', 'sadddddddddddddddddddddddddddddd', 'Guojia', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');
insert into imovel (idc, tipo, tipologia, preco, descricao, cidade_im, image) values (15, 'Moradia', 'T2', '400.32', 'dsadssssssssssssssssssssssssssssdsaasd', 'Shuiyang', 'http://dummyimage.com/179x108.jpg/cc0000/ffffff');



