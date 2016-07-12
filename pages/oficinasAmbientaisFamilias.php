<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/actividades/aventura_ambiental.jpg" alt="Oficinas Ambientais para Famílias">
        <figcaption>Oficinas Ambientais para Famílias</figcaption>
    </figure>
</div>

<div id="container">

    <div id="actividades-content">
        
        <?php
            $page = 2;
            include_once "../includes/menu_lateral_actividades.inc.php";
        ?>
        
        <?php
            $xmlData = simplexml_load_file("../data/oficinasAmbientaisFamilias.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
            $dados = $xmlData->dados;
        ?>
        
        <section id="descricaoActividades">
            <div class="header-bar"><p>Oficinas Ambientais para Famílias</p></div>
        
            <section id="lista-actividades">
               
                <?php
                
                foreach($xmlData->actividade as $actividade)
                {
                 
                    echo '<article class="actividade">';
                    echo '<img src="../imagens/actividades/'.$actividade->imgURL.'" alt="'.$actividade->imgURL.'">';
                    echo '<hr>';
                    echo '<h3>'.$actividade->nome.'</h3>';
                    echo "<p>".$actividade->descricao."</p>";
                    
                    if(strlen($actividade->obs) > 0)
                        echo "<p><strong>Outras informações:</strong> ".$actividade->obs."</p>";
                    
                    echo '</article>';
                    
                }
                
                ?>

            </section>
            
            <div class="header-bar"><p>Mais informações sobre as Actividades</p></div>
            <p>Estas informações aplicam-se a todas as actividades indicadas em cima.</p>
            <p><b>Oficinas Ambientais para Famílias: </b><?php echo $dados->desc; ?></p>
            <p><b>Horário: </b><?php echo $dados->horario; ?></p>
            <p><b>Duração: </b><?php echo $dados->duracao; ?></p>
            <p><b>Preço por Pessoa: </b><?php echo $dados->preco; ?></p>
            <p><b>Outras Informações: </b><?php echo $dados->obs; ?></p>
            
        </section>
    
    </div>
</div>

<?php include_once "../includes/footer.inc.php"; ?>