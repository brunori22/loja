create database if not exists lojaDeVarejo;
use lojaDeVarejo;

create table if not exists address(
	idaddress int not null ,
    publicPlace varchar(45) not null,
    numberOfStreet varchar(45) not null,
    complement varchar(45) not null,
    neighborhood varchar(45) not null,
    city varchar(45) not null,
    zipCode varchar(45) not null,
    primary key (idaddress)
);
create table if not exists provider(
	idprovider int not null,
    cnpj varchar(20) not null,
    provider_name varchar(50) not null,
    phone varchar(45) not null,
    address_idaddress int not null,
    primary key (idprovider)
);
create table if not exists product(
	id_product int,
    product_name varchar(50) not null,
    price float(10,2) not null,
    quantity int not null,
    provider_idprovider int not null,
    constraint fk_product_provider foreign key (provider_idprovider) references provider(idprovider),
    primary key(id_product)
);
