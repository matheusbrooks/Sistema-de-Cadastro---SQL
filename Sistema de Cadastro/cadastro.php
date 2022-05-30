<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT 0.0</title>
<body>
<?php
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
        $host= 'mysqlxx.dominio.com.br';
        $bd= 'nomedabase';
        $senhabd= 'senhadabase';
        $userbd = $bd;
            
            $nome = $_POST ["nome"]; //atribuição do campo "nome" vindo do formulário para variavel
            $ddd = $_POST ["ddd"]; //atribuição do campo "ddd" vindo do formulário para variavel
            $tel = $_POST ["telefone"]; //atribuição do campo "telefone" vindo do formulário para variavel
            $endereco = $_POST ["endereco"]; //atribuição do campo "endereco" vindo do formulário para variavel
            $cidade = $_POST ["cidade"]; //atribuição do campo "cidade" vindo do formulário para variavel
            $bairro = $_POST ["bairro"]; //atribuição do campo "bairro" vindo do formulário para variavel
//conectando com o localhost - mysql
$conexao = mysql_connect($host,$bd, $senhabd);
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
$query = "INSERT INTO `clientes` ( `nome`, `ddd` , `telefone` , `endereço` , `cidade` , `bairro`)
VALUES ('$nome', '$ddd', '$tel', '$endereco', '$cidade', '$bairro', '')";
mysql_query($query,$conexao);
echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?>
</body>
</html>