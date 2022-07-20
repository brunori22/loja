set foreign_key_checks = 0; -- Desabilita a verificação

delete from provider where provider_code = 1;

delete from address where address_code = 1;

set foreign_key_checks = 1; -- Habilita a verificação