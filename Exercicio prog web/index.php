<?php 
session_start();
?>



<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link href="style.css" rel="stylesheet" />
</head>
<body>
  <script src="https://kit.fontawesome.com/16544f2866.js" crossorigin="anonymous"></script>
  <header>
    <div class ="center">
      <div class=" logo">
        <a href="index.php"></a>
      </div>
      <div class="menu">
        <a class="btn-menu" href="cadastro.php">
            Casdastre-se
        </a>
        <a class="btn-menu" href="entrar.php">
            login
        </a>
    </div>
    <div class="menu-mobile">
        <i class="fas fa-bars menu-mobile-icon"></i>
        <div class="menu-items">
          <a href="index.php">Home</a>
          <a href="entrar.php">entrar</a>
          <a href="cadastro.php">cadastro</a>
        </div>
    </div>
  </header>
  <section class="main">
    <div class="center">
      <div class="main__cta">
        <h2>Algo quebrou?</h2>
        <p>Podemos te ajudar!</p>
        <div><button><a href="servico.php">Contratar </a></button>
        
      </div>
        
      </div>
      <div class="tipos">
        <div class="tipos-single">
          
            <h2>Construção <i class="fas fa-hammer"></i></h2>
            <p>Problemas que envolvam construção, reformas, e consertos domésticos</p>
        </div>
        <div class="tipos-single">
          <h2>Eletronica <i class="fas fa-bolt"></i></h2>
            <p>Problemas que envolvam eletronica</p>
        </div>
        <div class="tipos-single">
            <h2>Hidraulica <i class="fas fa-wrench"></i></h2>
            <p>Problemas que envolvam hidraulica</p>
        </div>
        <div class="tipos-single">
          
            <h2>Pintura <i class="fas fa-paint-roller"></i></h2>
            <p>Problemas que envolvam pintura</p>
        </div>
      </div>
    </div>
  </section>
  <section class="sobre">
    <div class="center">
        <div class="chamada-sobre">
          <h2>Sobre o Arruma aí</h2>
          <p>A startup que nasceu da nescessidade de conserto rápido</p>
        </div>
        <div class="conteudo-sobre">
          <p>Arruma aí atua de forma a conectar quem nescessita de serviço com quem realiza tal, desta maneira ajudamos você a solucionar seu problema e nossos servidores a estarem sempre com uma lista de serviços cheia</p>
          
          <p>Somos uma empresa focada em conectar prestadores de serviços e seus clientes, em nosso catalogo de prestadores englobamos as mais diversas áreas que possuem disponibilidade de profissionas no mercado, e os melhores você encontra aqui!
          </p>
        </div>
    </div>
  </section>

  <section class="conquistas">
    <div class="center">
        <div class="conquista-single">
            <h2>+100 tipos de</h2>
            <p>serviços</p>
        </div>
        <div class="conquista-single">
            <h2>+20 mil</h2>
            <p>profissionais afiliados</p>
        </div>
        <div class="conquista-single">
            <h2>+ 200 mil </h2>
            <p>clientes satisfeitos</p>
        </div>
        <div class="conquista-single">
            <h2>+ 30% de</h2>
            <p> renda para profissionais afiliados</p>
        </div>
    </div>
</section>

<script src="https://kit.fontawesome.com/16544f2866.js" crossorigin="anonymous"></script>
    <script>

        var el = document.querySelector('.menu-mobile-icon');

        el.addEventListener('click',()=>{
            var menuItems = document.querySelector('.menu-items');
            if(menuItems.classList.contains('show')){
                menuItems.classList.add('hide');
                menuItems.classList.remove('show');
            }else{
                menuItems.classList.add('show');
                menuItems.classList.remove('hide');
            }
        });

    </script>
</body>
</html>

<!-- criar paginas organizadas
     interagir com o lado do servidor
     fazer o commit
     form de serviço
     listagem de serviços para profissionais
-->