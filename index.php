<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Fluviário de Mora</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fluviário de Mora">
    <meta name="author" content="Fernando Vidigal">
    
    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
   
   <header>
        <div class="logotipo">
           <a href="index.php"><img src="imagens/logotipo.gif" alt="Logotipo do Fluviário"></a>
        </div>
       
        <nav>
            <ul>
                <li>Fluviário
                    <ul class="drop-menu">
                        <li><a href="#">Missão</a></li>
                        <li><a href="#">Conservação</a></li>
                        <li><a href="#">Passaporte Amigo</a></li>
                        <li><a href="#">Área Envolvente</a></li>
                        <li class="no-bottom-border"><a href="#">Contactos</a></li>
                    </ul>
                </li>
                <li>Exposição
                   <ul class="drop-menu">
                        <li><a href="#">Mapa da Exposição</a></li>
                        <li><a href="#">Percurso de um Rio</a></li>
                        <li><a href="#">Monstros do Rio</a></li>
                        <li><a href="#">Lontrário</a></li>
                        <li><a href="#">Sala Saramugo</a></li>
                        <li><a href="#">Habitats Exóticos</a></li>
                        <li class="no-bottom-border"><a href="#">Exposição Multimédia</a></li>
                    </ul>
                </li>
                <li><a href="#">Loja</a></li>
                <li><a href="#">Restaurante</a></li>
            </ul>
        </nav>
       
   </header>
   
   <div id="slider-wrapper">
        <div id="slider-images">
            <img src="imagens/habitats_exoticos.jpg" alt="Habitats Exóticos" class="active-slider-img">
            <img src="imagens/lontrario.jpg" alt="Lontrário">
            <img src="imagens/percurso_rio.jpg" alt="Percurso de um Rio">
            <img src="imagens/sala_saramugo.jpg" alt="Sala Saramugo">
        </div>
        
        <ul>
            <li><a href="#" class="icon-ticket">Bilheteira</a></li>
            <li><a href="#" class="horario-ticket">Horário</a></li>
            <li><a href="#" class="actividades-ticket">Actividades</a></li>
            <li><a href="#" class="chegar-ticket">Como Chegar</a></li>
        </ul>
        
        <div id="image-bullets">
            <button class="active"></button>
            <button></button>
            <button></button>
            <button></button>
        </div>
    </div>
    
    <div id="intro-texto">
        <p>O <strong>Fluviário de Mora</strong> é um aquário público dedicado aos ecossistemas de água doce, privilegiando o conhecimento da sua diversidade, importância e relação com a humanidade. Foi inaugurado a 21 de Março de 2007 e ao longo da visita ficará a conhecer algumas das espécies dulciaquícolas de Portugal da nascente até à foz, outras que ocorrem na Península Ibérica, e também da bacia hidrográfica do rio Amazonas e dos grandes lagos africanos do vale do Rift. Com a água doce como tema transversal a diversas áreas de conhecimento e culturas, a visita a este aquário é um local de sensibilização para cuidarmos desses ecossistemas que albergam uma enorme diversidade, apesar da água doce disponível em estado líquido à superfície constituir somente 0,01% de toda a água do planeta Terra.</p>
    </div>
    
    <div id="noticias-destaques-wrapper">
        <div class="color-header"><p>Notícias e Destaques</p></div>
        
        <div id="noticias-detaques-items">
           
            <div class="noticia">
                <img src="imagens/noticias/VisitasGuiadasGratuitas.jpg" alt="">
                <hr>
                <p class="noticia-title">Quer conhecer o Fluviário de Mora ao pormenor?</p>
                <a href="" class="noticia-btn">Ver</a>
            </div>
            
            <div class="noticia">
                <div class="imagem-noticia">
                    <img src="imagens/noticias/novoEmail.png" alt="">
                </div>
                <hr>
                <p class="noticia-title">Novo Endereço de Email</p>
                <a href="" class="noticia-btn">Ver</a>
            </div>
            
            <div class="noticia">
                <img src="imagens/noticias/boga-de-lisboa2-Hugo-Gante.jpg" alt="">
                <hr>
                <p class="noticia-title">Cientistas recebem prémio para estudar peixe português ameaçado</p>
                <a href="" class="noticia-btn">Ver</a>
            </div>
            
        </div>
        
        <div id="ver-mais-noticias-btn">
            <a href="">Ver mais Notícias e Destaques</a>
        </div>
            
    </div>
    
    <footer>
        <div id="social-icons">
            <a href=""><img src="imagens/facebook-logo.png" alt="Facebook"></a>
            <a href=""><img src="imagens/instagram-logo.png" alt="Instagram"></a>
            <a href=""><img src="imagens/twitter-logo.png" alt="Twitter"></a>
            <a href=""><img src="imagens/email-logo.png" alt="Email"></a>
        </div>
        
        <div id="newsletter">
            <form action="">
                <label for="newsletter">Subscreva a nossa Newsletter</label>
                <input type="text" name="newsletter">
                <input type="submit" name="submit" value="Subscrever">
            </form>
        </div>
    </footer>
    
    
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
