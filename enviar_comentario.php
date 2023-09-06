<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];

  // E-mail de destino (seu endereço de e-mail)
  $to = "lucianebatista@hotmail.com";

  $subject = "Novo Comentário para Aprovação";
  $message = "Nome: $name\n";
  $message .= "E-mail: $email\n";
  $message .= "Comentário:\n$comment";

  // Enviar e-mail
  mail($to, $subject, $message, "From: $email");

  // Redirecionar de volta para a página após enviar
  header("Location: index.html");
}
?>
