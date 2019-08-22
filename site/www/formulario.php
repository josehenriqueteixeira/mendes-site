<?php 

    require ("conexao.php");

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $celular=$_POST['celular'];
    $endereco=$_POST['endereco'];
    $cidade=$_POST['cidade'];
    $bairro=$_POST['bairro'];
    $tipo=$_POST['tipo'];
    $observacao=$_POST['observacao'];
    $mendescavalcante=$_POST['mendescavalcante'];

    $query = "INSERT INTO MENDESCAVALCANTE (NOME, EMAIL, TELEFONE, CELULAR, ENDERECO, CIDADE, BAIRRO, TIPO, OBSERVACAO, MENDESCAVALCANTE) 
    VALUES ('$nome' , '$email' , '$telefone' , '$celular' , '$endereco' , '$cidade' , '$bairro' , '$tipo' , '$observacao', '$mendescavalcante')";
    echo $query;
    $sql = mysqli_query($conexao,$query);

    if($sql)
    echo "E-mail encaminhado com sucesso!";

    mysqli_close($conexao);

?>