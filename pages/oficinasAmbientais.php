<?php
    if(isset($_GET['pa']) && is_numeric($_GET['pa'])) {
        $pa = (int)$_GET['pa'];
        if($pa < 0 || $pa > 5)
            $pa = 0;
    } else {
        $pa = 0;
    }

    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/actividades/oficinas_ambientais.jpg" alt="Oficinas Ambientais">
        <figcaption>Oficinas Ambientais</figcaption>
    </figure>
</div>

<div id="container">
    
    <div id="intro-text">
        <p>As “Oficinas Ambientais” são o grupo de actividades que aliam a educação ambiental aos conteúdos curriculares de cada ciclo de ensino, e a forma ideal de complementar a visita guiada por um educador ambiental ou livre - sem ser guiada por um educador ambiental. Conheça os módulos de actividades com condições especiais para instituições de ensino.</p>
    </div>

    <div id="actividades-content">
        
        <?php
            $page = $pa + 3;
            include_once "../includes/menu_lateral_actividades.inc.php";
        ?>
        
        <?php
            $xmlData = simplexml_load_file("../data/oficinasAmbientais.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
            $dados = $xmlData->dados;
        ?>
        
        <section id="descricaoActividades">
            <div class="header-bar"><p><?php echo $xmlData->publicoAlvo[$pa]['tipo']; ?></p></div>
        
            <section id="lista-actividades">
               
                <?php
                
                foreach($xmlData->publicoAlvo[$pa] as $actividade)
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
            <p><b>Duração: </b><?php echo $dados->duracao; ?></p>
            <p><b>Mínimo de Pessoas: </b><?php echo $dados->min; ?></p>
            <p><b>Preço por Pessoa: </b><?php echo $dados->preco; ?></p>
            <p><b>Preço por Pessoa2: </b><?php echo $dados->preco2; ?></p>
            
        </section>
    
    </div>
</div>

<?php include_once "../includes/footer.inc.php"; ?>