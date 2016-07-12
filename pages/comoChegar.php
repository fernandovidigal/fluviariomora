<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/loja.jpg" alt="Percurso de um Rio">
        <figcaption>Como Chegar</figcaption>
    </figure>
</div>

<div id="container">
    
    <div class="header-bar"><p>Como Chegar</p></div>
    
    <p>N 38º W 08º 6 230<br>W 08º 6 230<br>Altitude - 50m<br>GPS: 38.9558 / 8.1070</p><br>
    
    <div id="mapa-localizacao">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1311.3139967145892!2d-8.107777473667177!3d38.95580608085723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19c98a01bd908b%3A0xae99ca79ff155f93!2sFluvi%C3%A1rio+de+Mora!5e1!3m2!1spt-PT!2spt!4v1447173086407" frameborder="0" style="border:0" allowfullscreen></iframe>
        
        <div class="spacer-bottom-60">&nbsp;</div>
    </div>
    
    <div class="header-bar"><p>Acessibilidades</p></div>
    
    <div id="intro-text">
        <p>Os lugares de estacionamento do Fluviário de Mora são gratuitos e incluem lugares de estacionamento para autocarros e para portador de deficiência.</p>
        
        <div class="spacer-bottom-60"></div>
    </div>
    
</div>

<?php include_once "../includes/footer.inc.php"; ?>