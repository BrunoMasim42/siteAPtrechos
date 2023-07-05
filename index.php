<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>APTrechos</title>
  </head>
  <body>
    <div class="container">

        <div class="indica" >
            <h3>Menu</h3>
        </div>
       
  <div class="logo" >
    <img src="_imagens/logos/logo Pronta.png" alt="" >

    </div>

        <div class="hamburguer">
        
          <div class="line" id="line1"></div>
          <div class="line" id="line2"></div>
          <div class="line" id="line3"></div>
          <span>fechar</span>
        </div>  
       <!--Imagem de capa do Site-->
        <header id="home">
            <div class="img-wrapper">
                <img src="_imagens/escritorio.jpg" alt="">
            </div>
            <div class="banner">
                <h1>Empresa genuinamente amapaense!</h1>
                <p>Conheça nossos serviços</p>
                <!--<button>Saiba mais</button>-->
            </div>
        </header>
       
        <!--Menu-->
        <aside class="sidebar">
        
        <nav>
            <ul class="menu">
              <li class="menu-item"><a href="index.php" class="menu-link">Home</a></li>
              <li class="menu-item"><a href="servico.php" class="menu-link">Serviços</a></li>
              <li class="menu-item"><a href="projeto.php" class="menu-link">Projetos</a></li>
              <li class="menu-item"><a href="planejamento.php" class="menu-link">Planejamento</a></li>
              <li class="menu-item"><a href="orcamento.php" class="menu-link">Orçamentos</a></li>
              <li class="menu-item"><a href="portifolio.php" class="menu-link">Portifólio</a></li>
            </ul>
          </nav>
          
          <div class="social-media">
            <div class="face">
                <a href="#" target="blank"><img src="_imagens/icone/face.png" width="31px"></a>
    
            </div>
    
            <div class="insta">
                <a href="https://www.instagram.com/aptrechos_/" target="blank"><img src="_imagens/icone/insta.png" width="30px"></a>
    
            </div>
    
            <div class="whats">
                <a href=""><img src="_imagens/icone/whatssap2.png" width="30px"></a>
    
            </div>
    
            <div class="youtube">
                <a href="" target="blank"><img src="_imagens/icone/youtube.png" width="33px" height="30px"></a>
    
            </div>
           
          </div>
        </aside><br><br>

         <!-- painel de mensagens-->

       <section class="sessao-contato" id="contato">
          <div class="contato-wrapper">
            <div class="contato-left"></div>
            <div class="contato-right">
              <h1>Contato</h1>
              <form>
                <div class="input-group">
                  <input type="text" class="field" id="nome">
                  <label for="nome" class="field-label">Nome</label>
                </div>
                <div class="input-group">
                  <input type="text" class="field" id="email">
                  <label for="email" class="field-label">E-mail</label>
                </div>
                <div class="input-group">
                  <textarea class="field" id="mensagem"></textarea>
                  <label for="mensagem" class="field-label">Mensagem</label>
                </div>
                <button type="submit" class="btn btn-submit">Enviar</button>
              </form>
            </div>
          </div>
        </section>

       <!-- <section class="sessao-orcamento" id="orcamento">
          <div class="orcamento-wrapper">
            <h1>Faça um orçamento</h1>
            <form>
              <label for="qtde">Qtde de Páginas</label>
              <input type="number" min="1" name="qtde" id="qtde">
              <label for="js">Preciso de um script JS</label>
              <input type="checkbox" name="js" id="js">
              <label>Layout</label>
              <div class="group-layout">
                <div>
                  <input type="radio" name="layout" id="layout-sim">
                  <label for="layout-sim">Preciso de um layout</label>
                </div>
                <div>
                  <input type="radio" name="layout" id="layout-nao">
                  <label for="layout-nao">Já tenho um layout</label>
                </div>
              </div>
              <label for="prazo">Prazo</label>
              <input type="range" name="prazo" id="prazo" min="1" max="10">
              <label id="preco">R$ 0,00</label>
              <button class="btn btn-orcamento" type="submit">Enviar</button>
            </form>
          </div>
        </section>-->

        <footer>
          <div class="footer-content">
            <p>
              AP Trechos Comunicação - Todos os diretos reservados
            </p>
            
          </div>
        </footer>
        <a href="#" id="link-topo">
          <i class="fas fa-arrow-up"></i>
        </a>
    </div>

    <script src="_js/script.js"></script>
   </body>

  
</html>
