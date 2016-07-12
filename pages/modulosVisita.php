<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/actividades/modulos_visita.jpg" alt="Módulos de Visita">
        <figcaption>Módulos de Visita</figcaption>
    </figure>
</div>

<div id="container">
    
    <div id="actividades-content">
        
        <?php
            $page = 9;
            include_once "../includes/menu_lateral_actividades.inc.php";
        ?>
        
        <?php
            $xmlData = simplexml_load_file("../data/actividadesLowCost.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
        ?>
        
        <section id="descricaoActividades">
           
            <div class="header-bar"><p>Actividades Low Cost</p></div>
        
            <section id="lista-actividades">
               
                <?php
                
                foreach($xmlData->modulos as $actividade)
                {
                 
                    echo '<article class="actividade">';
                    //echo '<img src="../imagens/actividades/'.$actividade->imgURL.'" alt="'.$actividade->imgURL.'">';
                    //echo '<hr>';
                    echo '<h3>'.$actividade->nome.'</h3>';
                    echo "<p><b>Descrição da Integração de Actividades:</b></p>";
                    echo "<p>".$actividade->descricao."</p>";
                    echo "<p><b>Público Alvo: </b>".$actividade->publicoAlvo."</p>";

                    if(isset($actividade->horario))
                        echo "<p><b>Horário: </b>".$actividade->horario."</p>";

                    if(strlen($actividade->min) > 0)
                        echo "<p><b>Mínimo de Participantes: </b>".$actividade->min."</p>";

                    foreach($actividade->precos as $preco)
                    {
                        echo "<p><b>".$preco->pa.": </b>".$preco->preco."</p>";
                    }

                    if(strlen($actividade->duracao) > 0)
                        echo "<p><b>Duração Aproximada: </b>".$actividade->duracao."</p>";

                    if(strlen($actividade->obs) > 0)
                        echo "<p><b>Outras Informações: </b>".$actividade->obs."</p>";
                    
                    echo '</article>';
                    
                }
                
                ?>

            </section>
            
        </section>
    
    </div>
</div>

<?php include_once "../includes/footer.inc.php"; ?>