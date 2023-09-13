<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];

  $to = "contato@babeleanna.com.br"; // Substitua pelo seu endereço de e-mail
  $subject = "Novo contato de $nome";
  $message = "Nome: $nome\n";
  $message .= "Email: $email\n";
  $message .= "Telefone: $telefone\n";
  $message .= "Mensagem:\n$mensagem";

  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo '<script>alert("Obrigado por entrar em contato. Em breve responderemos.");</script>';
    echo '<script>window.location.href = "enviado.html";</script>';
  } else {
    echo '<script>alert("Ocorreu um erro ao enviar o formulário. Por favor, tente novamente mais tarde.");</script>';
    echo '<script>window.location.href = "contato.html";</script>';
  }
}
?>
