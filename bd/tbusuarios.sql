use dbPHP7;

CREATE TABLE tb_usuarios (
	idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin NVARCHAR(64) NOT NULL,
    dessenha NVARCHAR(255) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios(deslogin,dessenha)
VALUES('root','123456'); 


delete tb_usuarios where idusuario = 2
select * from tb_usuarios