<!DOCTYPE html>
<html>
<head>
	<title>Conexão...</title>
</head>
<body>

mysql_close($conexao);
    $servidor = 'localhost';
    $banco = 'mendescavalcante';
    $usuario = 'root';
    $senha = '';
    $link = mysql_connect($servidor, $usuario, $senha);
    $db = mysql_select_db($banco,$link);
    if(!$link)
    {
        echo "erro ao conectar ao banco de dados!";exit();
    }

</body>
</html>