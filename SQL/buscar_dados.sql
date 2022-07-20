-- Buscar os dados - Select
-- Buscar todos os dados

select * from product;

-- Buscar todos os dados, porém com filtro

select * from product where id_product = 5;

select * from product where price >1.50;

select * from product where quantity between 100 and 400;

select * from product where quantity between 100 and 200 or price > 3;

select count(*) as 'Contagem de produtos' from product where quantity between 100 and 200;

select avg(price) as 'Média de preços' from product;

select * from product order by price desc;

-- Seleção entre tabelas
-- Nome produto, nome do fornecedor e preço do produto

select pd.product_name,pr.provider_name,pd.price from provider pr inner join product_provider pp on pr.provider_code = pp.provider_code inner join produc pd on pp.product_code = pd.product_code;