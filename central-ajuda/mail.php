<?php

$name = $_POST['nome'];
$email= $_POST['email'];
$subject = $_POST['assunto'];
$message= $_POST['mensagem'];



$emailheader = "From:".$name. "<".$email. ">\r\n"

$recipient = "luigi.castro@sga.pucminas.br": 

mail($recipient, $subject, $message, $emailheader )
or die( "Erro!");

echo'


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_central_ajuda.css">
  <link rel="stylesheet" href="style_midia_queries_central_ajuda.css">
  <meta name="viewport" content="width=device-width" , initial-scale="1">
  <title>Site Compras</title>

  <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>



  <script src="https://kit.fontawesome.com/f2c736aaab.js" crossorigin="anonymous"></script>

  <meta charset="UTF-8">
  <title>Central de Ajuda - Seu Site de Hospedagem de Cursos Online</title>

  <script>
    function redirectToChat() {
      var name = document.getElementById('name').value;
      var subject = document.getElementById('subject').value;
      var email = document.getElementById('email').value;
      var question = document.getElementById('question').value;
      var form = document.getElementById('help-form');


      var hiddenName = document.createElement('input');
      hiddenName.type = 'hidden';
      hiddenName.name = 'name';
      hiddenName.value = name;

      var hiddenSubject = document.createElement('input');
      hiddenSubject.type = 'hidden';
      hiddenSubject.name = 'subject';
      hiddenSubject.value = subject;

      var hiddenEmail = document.createElement('input');
      hiddenEmail.type = 'hidden';
      hiddenEmail.name = 'email';
      hiddenEmail.value = email;

      var hiddenQuestion = document.createElement('input');
      hiddenQuestion.type = 'hidden';
      hiddenQuestion.name = 'question';
      hiddenQuestion.value = question;


      form.appendChild(hiddenName);
      form.appendChild(hiddenSubject);
      form.appendChild(hiddenEmail);
      form.appendChild(hiddenQuestion);


      form.submit();
    }
  </script>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

  <header>
    <div id="cabecalho">
      <nav class="barra-home">
        <ul class="menu">
          <li><a href="#" class="itens-barra-home">Minha Conta</a></li>
        </ul>
      </nav>

      <nav class="div-logo">
        <a href="/homepage/homepage.html"><img class="logo" src="/images/logo.png" alt="logo"></a>
      </nav>
    </div>
  </header>

  <main>
    <div class="container">
      <h1>Sua mensagem foi enviada! Iremos responder assim que possível.</h1>
      <p class="back">Volte para a <a href="central_ajuda.html"></a>Central de ajuda</p>
      
    </div>
  </main>

  <footer>
    <nav class="redes-sociais-rodape itens-rodape">
        <h4>Redes Sociais</h4>
        <nav>
            <a class="texto-itens-rodape" href="#">
                <i class="fa-brands fa-square-facebook fa-2xl"></i>
                <i class="fa-brands fa-square-twitter fa-2xl"></i>
                <i class="fa-brands fa-square-instagram fa-2xl"></i>
            </a>
        </nav>
    </nav>

    <nav class="links-rodape itens-rodape">
        <h4 class="titulo-links">Institucional</h4>
        <nav class="conteudo-itens-rodape">
            <div class="texto-itens-rodape links-politicas">
                <a class="ancoras" href="/central-ajuda/central_ajuda.html"><p>Central de <br> Ajuda</p></a>
                <a class="ancoras" href="#"><p>Termos</p></a>
                <a class="ancoras" href="#"></a><p>Política de <br> Privacidade</p></a>
            </div>
        </nav>
    </nav>

    <div class="copyright-rodape">
        <p>© 2007-2023 learnify.com</p>
    </div>
</footer>
</body>

</html>




';






?>