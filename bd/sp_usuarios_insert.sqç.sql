
use dbphp7;

CREATE PROCEDURE 'sp_usuarios_insert' (
pdeslogin VARCHAR(64),
pdessenha VARCHAR(255)
)
BEGIN
		INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(pdeslogin, pdessenha);
        
        SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();
END