<?php 

/*
0 - Nada
1 - Executar
2 - Gravar
3 - Executar, Gravar
4 - Leitura
5 - Leitura, Executar
6 - Leitura, Gravar
7 - Leitura, Executar, Gravar

775
Owner, Group, Outros(visitantes) 
*/

$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Directório criado com sucesso";

 ?>