<%
sch = "http://schemas.microsoft.com/cdo/configuration/"
Set cdoConfig = Server.CreateObject("CDO.Configuration")


'Variaveis
Dim meuservidorsmtp
Dim minhacontaautenticada
Dim minhasenhaparaenvio
Dim emailorigem
Dim emaildestino

'Abaixo seguem algumas definicoes de variaveis para o envio de seu formulario. Por favor preencha os campos abaixo.

meuservidorsmtp = "smtp.gmail.com" ' Informacoes so seu servidor SMTP
minhacontaautenticada = "contato@babeleanna.com.br" ' conta de e-mail utilizada para enviar
minhasenhaparaenvio = "Ew@21301608" ' senha da conta de e-mail
emailorigem = "contato@babeleanna.com.br" ' e-mail que indica de onde partiu a mensagem
emaildestino = "contato@babeleanna.com.br" ' e-mail que vai receber as mensagens do formulario

'Fim da definição manual de parâmetros.

cdoConfig.Fields.Item(sch & "sendusing") = 2
cdoConfig.Fields.Item(sch & "smtpauthenticate") = 1
cdoConfig.Fields.Item(sch & "smtpserver") = meuservidorsmtp
cdoConfig.Fields.Item(sch & "smtpserverport") = 587
cdoConfig.Fields.Item(sch & "smtpconnectiontimeout") = 30
cdoConfig.Fields.Item(sch & "sendusername") = minhacontaautenticada
cdoConfig.Fields.Item(sch & "sendpassword") = minhasenhaparaenvio
cdoConfig.fields.update
Set cdoMessage = Server.CreateObject("CDO.Message")
Set cdoMessage.Configuration = cdoConfig

cdoMessage.BodyPart.Charset = "utf-8"
cdoMessage.From = emailorigem
cdoMessage.To = emaildestino
cdoMessage.Subject = "Contato via site"
cdoMessage.ReplyTo = Request("email")

strBody = "Dados <br> <br>" & _
"Assunto:"& Request("assunto")& "<br>" & _
"Nome:"& Request("nome")& "<br>" & _
"E-Mail:"& Request("email")& "<br>" & _
"Telefone:"& Request("telefone")& "<br>" & _
"RG:"& Request("rg")& "<br>" & _
"Profissão:"& Request("profissao")& "<br>" & _
"Endereço:"& Request("endereco")& "<br>" & _
"Cidade:"& Request("cidade")& "<br>" & _
"Estado:"& Request("estado")& "<br>" & _
"Mensagem:"& Request("mensagem")

strBody = strBody & "."
cdoMessage.HTMLBody = strBody

cdoMessage.Send

Set cdoMessage = Nothing
Set cdoConfig = Nothing

response.write "Sua mensagem foi enviada com sucesso."
%>
<html>
<head>
<title>.: BabelleAnna :.</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
</head>
<a href="index.html">Continuar navegando.</a>
<body bgcolor="#FFFFFF" text="#003366">
</body>
</html>