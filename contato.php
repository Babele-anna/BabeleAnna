<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];
    
    $destinatario = "lucianebatista@hotmail.com"; // Substitua pelo seu email
    $assunto = "Formulário de Contato - $nome";
    
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "Email: $email\n";
    $mensagem_email .= "Telefone: $telefone\n";
    $mensagem_email .= "Mensagem:\n$mensagem\n";
    
    // Você também pode configurar cabeçalhos de email adequados aqui
    
    if (mail($destinatario, $assunto, $mensagem_email)) {
        // Email enviado com sucesso
        echo "Formulário de contato enviado com sucesso!";
    } else {
        // Erro ao enviar o email
        echo "Ocorreu um erro ao enviar o formulário de contato.";
    }
}
?>
