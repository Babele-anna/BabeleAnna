<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>.: BabeleAnna :.</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">

</head>

<body>
 <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-9">
                    <div class="logo">
                        <h1><a href="index.html"> <img src="img/logo/logocsb_200x200.png" alt="CSB" width="129" height="123">.: Babelle :.</b></span></a></h1>
					</div>
                </div>
                <div class="col-sm-6 col-lg-3">
						
				</div>
            </div>
        </div>
    </div>  <!-- End site branding area -->
   
	
<?php 
  
date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y H:i');
  
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome     = $_POST ["nome"];  //atribuido do campo "nome" vindo do formulario para variavel  
$email    = $_POST ["email"];  
$telefone = $_POST ["telefone"];     
$cidade = $_POST ["cidade"];  
$estado = $_POST ["estado"]; 

 // pegando os dados do form...
    $msg = " <b>Nome: </b>" .  $nome . "<br>";
    $msg .= "<b>Email: </b>" . $email . "<br>";
    $msg .= "<b>Telefone: </b>" . $telefone . "<br>"; 
    $msg .= "<b>Cidade: </b>" . $cidade . "<br><br>";
	$msg .= "<b>Estado: </b>" . $estado . "<br><br>";
    $msg .= "<b>Dados enviado em ". $date . "</b><br>";


 // email onde tu vai receber a mensagem
    $destinatario = "babeleanna.arteearomas@gmail.com";

// headers que prepara a mensagem
$headers = "MIME-Version: 1.1 \r\n";
$headers .= "Content-type: text/html; charset=utf-8; \r\n";
$headers .= "From:".$email."\r\n"; //E-mail do remetente
//$headers .= "Return-Path: babeleanna.arteearomas@gmail.com\r\n"; //E-mail - se quiser reenviar para outra email

$assunto = "Candidato(a) - ".$nome." - ".$cidade."";

mail($destinatario, $assunto , $msg, $headers, "-r". "babeleanna.arteearomas@gmail.com");


?> 
  
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <p></p>
                  <p>Agradecemos pelo contato! </p>
                  <p>Suas informações foram armazenadas em nosso banco de dados.</p>
					<p><a href="index.html">Continuar navegando.</a></p> 
                  
                </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <p></p>
                 
                 
                </div>
            </div>
        </div>
        <!-- End home section -->  
                         
</body>
</html>