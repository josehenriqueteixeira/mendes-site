<?php
// $para = "mc.solucoesresidenciais@outlook.com";
$para = "solucoesresidenciaismc@gmail.com";
$nome = $_POST['nome'];
// $email = $_POST['email'];
$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem .= "<br> <strong> E-mail: </strong>"
.$_POST['email'];
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
.$_POST['tipo'];
$mensagem .= "<br> <strong> Observaçao: </strong>"
.$_POST['observacao'];
 
// – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
// $headers .= "From:  mendescavalcante.com.br<mc.solucoesresidenciais@outlook.com>\n";
$headers .= "From:  mendescavalcante.com.br<solucoesresidenciaismc@gmail.com>\n"; 
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
// $headers .= "X-Sender:  <mc.solucoesresidenciais@outlook.com>\n"; 
$headers .= "X-Sender:  <solucoesresidenciaismc@gmail.com>\n"; 
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
// $headers .= "Return-Path:  <mc.solucoesresidenciais@outlook.com>\n"; 
$headers .= "Return-Path:  <solucoesresidenciaismc@gmail.com>\n"; 
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";
 
mail($para, $nome, $mensagem, $headers);  //função que faz o envio do email.
?>


<script>
alert("Obrigado, entraremos em contato!")


    // Your application has indicated there's an error
window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "http://mendescavalcante.com.br/";

    }, 1000);

</script>
