<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Define as variáveis com base nos valores do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];

  // Configurações de email
  $destinatario = "lucianebatista@hotmail.com"; // Substitua pelo seu endereço de email
  $assunto = "Formulário de Contato de $nome"; // Assunto do email

  // Monta o corpo do email
  $corpo_email = "Nome: $nome\n";
  $corpo_email .= "Email: $email\n";
  $corpo_email .= "Telefone: $telefone\n";
  $corpo_email .= "Mensagem:\n\n$mensagem";

  // Cabeçalhos do email
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Envie o email
  $enviado = mail($destinatario, $assunto, $corpo_email, $headers);

  if ($enviado) {
    // Email enviado com sucesso
    $enviado = true;
  } else {
    // Erro ao enviar o email
    $enviado = false;
  }
}
?>
