/* portfolios    
   imagem		   
   titulo          
   subtitulo       
   descricao  */     
create database if not exists agenciath;

use agenciath;

create table portfolios(
id int primary key auto_increment,
imagem varchar(255) not null,
titulo varchar(255) not null,
descricao text not null);

insert into portfolios (imagem, titulo, descricao) values
('cabin.png', 'Log Cabin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.');

SELECT * FROM portfolios;
