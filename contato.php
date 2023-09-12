<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Define o endereço de e-mail para onde você deseja enviar o formulário
  $to = "lucianebatista@hotmail.com";
  
  // Recupera os campos do formulário
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $mensagem = $_POST["mensagem"];
  
  // Monta o corpo do e-mail
  $assunto = "Mensagem de Contato do Site";
  $corpo = "Nome: $nome\n";
  $corpo .= "E-mail: $email\n";
  $corpo .= "Telefone: $telefone\n";
  $corpo .= "Mensagem:\n\n$mensagem";
  
  // Define o cabeçalho do e-mail
  $headers = "From: $email\r\n";
  
  // Envia o e-mail
  $enviado = mail($to, $assunto, $corpo, $headers);
  
  if ($enviado) {
    echo '<script>alert("Formulário de Contato enviado! Em breve entraremos em contato.");</script>';
  } else {
    echo '<script>alert("Ocorreu um erro ao enviar o formulário. Por favor, tente novamente mais tarde.");</script>';
  }
}
?>

