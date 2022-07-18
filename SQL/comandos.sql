use loja_de_varejo;
describe product;

/*alterar coisa dentro de uma tabela*/
alter table address add column street_name varchar(40) not null after publicPlace;
/* inserindo um provider para conseguir cadastrar um produto novo */
insert into provider values(1,'00.000.000/0000-00','podecre','99929',4);
/* cadastrando um produto com o fornecedor anterior */
insert into product values(null, 'Bolacha Passatempo',2.00,100,1);
insert into product values(null,'guarana pichula',1.50,200,1);
insert into product values(null, 'bala 7 belo pc 2kg',20,400,1);
/* Add address */
insert into address values(1,'avenida',325,'casa','Castelo branco','Gravatai','00000-000');
/*--------------------------*/
insert into provider values (1,'40.494.444/0001-45','Jaqueline e Osvaldo Adega Ltda','(11) 3535-1105',5);
insert into idprovider values (1,3);
insert into idprovider values (3,2);
insert into idprovider values (1,1);