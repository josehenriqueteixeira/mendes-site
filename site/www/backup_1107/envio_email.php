<?php
$para = "mc.solucoesresidenciais@outlook.com";
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem .= "<br>  <strong>Telefone: </strong>"
.$_POST['telefone'];
$mensagem .= "<br> <strong> Celular: </strong>"
.$_POST['celular'];
$mensagem .= "<br> <strong> Endereço: </strong>"
.$_POST['endereco'];
$mensagem .= "<br> <strong> Cidade: </strong>"
.$_POST['cidade'];
$mensagem .= "<br> <strong> Bairro: </strong>"
.$_POST['bairro'];
$mensagem .= "<br> <strong> Tipo: </strong>"
.$_POST['Tipo'];
$mensagem .= "<br> <strong> Observaçao: </strong>"
.$_POST['observacao'];
 
// – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  mendescavalcante.com.br<mc.solucoesresidenciais@outlook.com>\n"; 
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <mc.solucoesresidenciais@outlook.com>\n"; 
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <mc.solucoesresidenciais@outlook.com>\n"; 
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";
 
mail($para, $email, $mensagem, $headers);  //função que faz o envio do email.
?>