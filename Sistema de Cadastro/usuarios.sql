CREATE TABLE `clientes` (
`nome` VARCHAR( 60 ) NOT NULL ,
`ddd` INT( 2 ) ,
`telefone` INT( 9 ) ,
`endereço` VARCHAR( 70 ) NOT NULL ,
`cidade` VARCHAR( 20 ) NOT NULL ,
`estado` VARCHAR( 2 ) NOT NULL ,
`bairro` VARCHAR( 20 ) NOT NULL ,
`id` INT( 200 ) AUTO_INCREMENT ,
UNIQUE (`id`)
);