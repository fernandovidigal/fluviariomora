<?php
    require_once "includes/config.inc.php";
    include_once "includes/header.inc.php";
?>
  
<div id="slider-wrapper">
    <div id="slider-images">
        <img src="<?php echo img_path; ?>/habitats_exoticos.jpg" alt="Habitats Exóticos" class="active-slider-img">
        <img src="<?php echo img_path; ?>/lontrario.jpg" alt="Lontrário">
        <img src="<?php echo img_path; ?>/percurso_rio.jpg" alt="Percurso de um Rio">
        <img src="<?php echo img_path; ?>/sala_saramugo.jpg" alt="Sala Saramugo">
    </div>

    <ul id="slider-menu">
        <li><a href="#"><img src="<?php echo img_path; ?>/ticket_icon.png" alt="">Bilheteira</a></li>
        <li><a href="#"><img src="<?php echo img_path; ?>/horario_icon.png" alt="">Horário</a></li>
        <li><a href="<?php echo pages_path; ?>/actividades.php"><img src="<?php echo img_path; ?>/actividades_icon.png" alt="">Actividades</a></li>
        <li><a href="#"><img src="<?php echo img_path; ?>/comoChegar_icon.png" alt="">Como Chegar</a></li>
    </ul>

    <div id="image-bullets">
        <button class="active"></button>
        <button></button>
        <button></button>
        <button></button>
    </div>
</div>
   
<div id="container">
    
    <div id="intro-text">
        <p>O <strong>Fluviário de Mora</strong> é um aquário público dedicado aos ecossistemas de água doce, privilegiando o conhecimento da sua diversidade, importância e relação com a humanidade. Foi inaugurado a 21 de Março de 2007 e ao longo da visita ficará a conhecer algumas das espécies dulciaquícolas de Portugal da nascente até à foz, outras que ocorrem na Península Ibérica, e também da bacia hidrográfica do rio Amazonas e dos grandes lagos africanos do vale do Rift. Com a água doce como tema transversal a diversas áreas de conhecimento e culturas, a visita a este aquário é um local de sensibilização para cuidarmos desses ecossistemas que albergam uma enorme diversidade, apesar da água doce disponível em estado líquido à superfície constituir somente 0,01% de toda a água do planeta Terra.</p>
    </div>

    <div id="destaques-wrapper">
        <div class="header-bar"><p>Notícias e Destaques</p></div>

        <div id="destaques-items">
            
            <?php
                
            $noticiasXML = simplexml_load_file("data/noticias.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
            
            for($i = 0; $i < 3; $i++)
            {
                $noticia = $noticiasXML->noticia[$i];
                echo '<div class="destaques">';
                echo '<img src="imagens/noticias/'.$noticia->imgUrl.'" alt="'.$noticia->imgURL.'">';
                echo '<hr>';
                echo '<p class="noticia-title">'.$noticia->titulo.'</p>';
                echo '<a href="pages/noticia.php?n='.$i.'" class="noticia-btn">Ver</a>';
                echo '</div>';
            }
            
            ?>

            <!--<div class="destaques">
                <img src="<?php echo img_path; ?>/noticias/VisitasGuiadasGratuitas.jpg" alt="">
                <hr>
                <p class="noticia-title">Quer conhecer o Fluviário de Mora ao pormenor?</p>
                <a href="<?php echo pages_path; ?>/noticia.php?n=0" class="noticia-btn">Ver</a>
            </div>

            <div class="destaques">
                <img src="<?php echo img_path; ?>/noticias/novoEmail.png" alt="">
                <hr>
                <p class="noticia-title">Novo Endereço de Email</p>
                <a href="<?php echo pages_path; ?>/noticia.php?n=1" class="noticia-btn">Ver</a>
            </div>

            <div class="destaques">
                <img src="<?php echo img_path; ?>/noticias/boga-de-lisboa2-Hugo-Gante.jpg" alt="">
                <hr>
                <p class="noticia-title">Cientistas recebem prémio para estudar peixe português ameaçado</p>
                <a href="<?php echo pages_path; ?>/noticia.php?n=2" class="noticia-btn">Ver</a>
            </div>-->

        </div>

        <div id="ver-mais-noticias-btn">
            <a href="<?php echo pages_path; ?>/noticias.php">Ver mais Notícias e Destaques</a>
        </div>

    </div>
  
</div>
   
<?php
    include_once "includes/footer.inc.php";
?>