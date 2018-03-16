use dbPHP7;

CREATE TABLE tb_usuarios (
	idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin NVARCHAR(64) NOT NULL,
    dessenha NVARCHAR(255) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios(deslogin,dessenha)
VALUES('Bruno','12345')

update tb_usuarios set deslogin = 'admin', dessenha = '123456' where idusuario = 2

DELETE FROM tb_usuarios WHERE idusuario = 4

select * from tb_usuarios



