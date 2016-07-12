<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/actividades/ferias.jpg" alt="Férias">
        <figcaption>Férias</figcaption>
    </figure>
</div>

<div id="container">

<div id="intro-text">
    <p>“Águas Transparentes para umas férias Diferentes” é o programa de actividades de férias do Fluviário de Mora.</p>
</div>

    
    <div id="actividades-content">
        
        <?php
            $page = 10;
            include_once "../includes/menu_lateral_actividades.inc.php";
        ?>
        
        <?php
            $xmlData = simplexml_load_file("../data/ferias.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
        ?>
        
        <section id="descricaoActividades">
            <div class="header-bar"><p>Férias</p></div>
        
            <section id="lista-actividades">
               
                <?php
                
                foreach($xmlData->actividade as $actividade)
                {
                 
                    echo '<article class="actividade">';
                    
                    if(strlen($actividade->imgURL) > 0) {
                        echo '<img src="../imagens/actividades/'.$actividade->imgURL.'" alt="'.$actividade->imgURL.'">';
                        echo '<hr>';
                    }
                    
                    echo '<h3>'.$actividade->nome.'</h3>';
                    echo "<p>".$actividade->descricao."</p>";
                    
                    if(strlen($actividade->datas) > 0)
                        echo "<p>".$actividade->datas."</p>";
                    
                    echo '</article>';
                    
                }
                
                ?>

            </section>
        </section>
    
    </div>
</div>

<?php include_once "../includes/footer.inc.php"; ?>