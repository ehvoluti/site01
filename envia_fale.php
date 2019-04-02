<?php
# alterar a variavel abaixo colocando o seu email

$destinatario = "comercial@ehvoluti.com.br";

$nome = $_REQUEST['inputNome'];
$fone = $_REQUEST['inputFone'];
$email = $_REQUEST['inputEmail'];
$recebecontato = $_REQUEST['lstRecebeContato'];
$assunto = $_REQUEST['inputAssunto'];
$mensagem = $_REQUEST['inputMsg'];


 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - Contato via site Ehvoluti" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Fone: " . $fone . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Contato por: " . $recebecontato . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:index2.html");


?>