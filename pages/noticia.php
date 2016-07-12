<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/noticias.jpg" alt="Percurso de um Rio">
        <figcaption>Notícia</figcaption>
    </figure>
</div>

<div id="container">
    
    <div class="header-bar"><p>Notícia</p></div>

    <div id="noticia-wrapper">
    
    <?php

        if(isset($_GET['n']))
        {
            $indice = (int) $_GET['n'];
            
            if($indice >= 0)
            {
                $noticiasXML = simplexml_load_file("../data/noticias.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
                
                $noticia = $noticiasXML->noticia[$indice];
                
                echo '<img src="../imagens/noticias/'.$noticia->imgUrl.'" alt="'.$noticia->imgUrl.'">';
                echo '<h2>'.$noticia->titulo.'</h2>';
                echo $noticia->corpo;
                
                // Trata Dos Anexos
                if($noticia->anexo)
                {
                    echo "<div class='anexos'>";
                    echo "<p><strong>Anexos:</strong></p>";
                    foreach($noticia->anexo as $anexo)
                    {
                        echo "<a href='".$anexo->link."'>".$anexo->nome."</a><br/>";
                    }
                    echo "</div>";
                }
                
            } else {
                header("Location: noticias.php");
            }
        } else {
            header("Location: noticias.php");
        }

    ?>
    
    </div>
    
</div>


<?php include_once "../includes/footer.inc.php"; ?>