<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/actividades/aventura_ambiental.jpg" alt="Aventura Ambiental">
        <figcaption>Uma Aventura Ambiental</figcaption>
    </figure>
</div>

<div id="container">

<div id="intro-text">
    <p>Com estas actividades participe e conheça um pouco mais sobre este espaço, seus habitantes e área envolvente, de uma forma lúdica e pedagógica. Complemente a sua visita guiada por um educador ambiental ou livre (sem ser guiada por um educador ambiental) com estas actividades para um dia bem passado.</p>
</div>

    
    <div id="actividades-content">
        
        <?php
            $page = 1;
            include_once "../includes/menu_lateral_actividades.inc.php";
        ?>
        
        <?php
            $xmlData = simplexml_load_file("../data/aventuraAmbiental.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
        ?>
        
        <section id="descricaoActividades">
            <div class="header-bar"><p>Uma Aventura Ambiental</p></div>
        
            <section id="lista-actividades">
               
                <?php
                
                foreach($xmlData->actividade as $actividade)
                {
                 
                    echo '<article class="actividade">';
                    echo '<img src="../imagens/actividades/'.$actividade->imgURL.'" alt="'.$actividade->imgURL.'">';
                    echo '<hr>';
                    echo '<h3>'.$actividade->nome.'</h3>';
                    echo "<p>".$actividade->descricao."</p>";
                    //echo "<p class='notas'><em><b>Notas: </b>".$actividade->notas."</em></p>";
                    //echo "<p><b>Período: </b>".$actividade->periodo."</p>";
                    echo "<p><b>Horário: </b>".$actividade->horario."</p>";
                    echo "<p><b>Duração: </b>".$actividade->duracao."</p>";

                    if(strlen($actividade->min) > 0)
                        echo "<p><b>Mínimo de participantes: </b>".$actividade->min."</p>";

                    if(strlen($actividade->max) > 0)
                        echo "<p><b>Máximo de Participantes: </b>".$actividade->max."</p>";

                    echo "<p><b>Preço: </b>".$actividade->preco."</p>";
                    //if(isset($actividade->preco2))
                        //echo "<p><b>Preço 2: </b>".$actividade->preco2."</p>";

                    if(strlen($actividade->obs) > 0)
                        echo "<p><b>Outras informações: </b>".$actividade->obs."</p>";
                    
                    echo '</article>';
                    
                }
                
                ?>

            </section>
        </section>
    
    </div>
</div>

<?php include_once "../includes/footer.inc.php"; ?>