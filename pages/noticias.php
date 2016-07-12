<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/noticias.jpg" alt="Percurso de um Rio">
        <figcaption>Notícias</figcaption>
    </figure>
</div>

<div id="container">
    
    <div class="header-bar"><p>Notícias</p></div>

    <div id="lista-noticias">
       
    <?php
      
        $noticiasXML = simplexml_load_file("../data/noticias.xml",'SimpleXMLElement', LIBXML_NOCDATA) or die ("Erro: Não foi possível aceder às notícias");
        
        $numeroNoticias = count($noticiasXML);
        $pagina = 0;
        $numeroNoticiasPorPagina = 6;
        
        // Determina qual a página
        if(isset($_GET['p']) && is_numeric($_GET['p']))
        {
            $pagina = (int)$_GET['p'];
        }
        
        if($numeroNoticias > $numeroNoticiasPorPagina)
        {
            
            $numeroNoticiasPorPagina_temp = $numeroNoticiasPorPagina;
            
            if(($numeroNoticias-($numeroNoticiasPorPagina * $pagina)) < $numeroNoticiasPorPagina)
            {
                $numeroNoticiasPorPagina = $numeroNoticias-($numeroNoticiasPorPagina * $pagina);
            }
            
            for($i = 0; $i < $numeroNoticiasPorPagina; $i++)
            {
                $indice = ($pagina * $numeroNoticiasPorPagina) + $i;
                $noticia = $noticiasXML->noticia[$indice];
                
                echo '<div class="destaques">';
                echo '<img src="../imagens/noticias/'.$noticia->imgUrl.'" alt="'.$noticia->imgUrl.'">';
                echo '<hr>';
                echo '<p class="noticia-title">'.$noticia->titulo.'</p>';
                echo '<a href="noticia.php?n='.$indice.'" class="noticia-btn">Ver</a>';
                echo "</div>"; 
            }
            
            // Guardou-se o numero total de noticias por página para bater certo
            // com o botões no fim da página
            $numeroNoticiasPorPagina = $numeroNoticiasPorPagina_temp;
            
            
        } else {
            
            $i = 0;
            
            foreach($noticiasXML->noticia as $noticia)
            {
                echo '<div class="destaques">';
                echo '<img src="../imagens/noticias/'.$noticia->imgUrl.'" alt="'.$noticia->imgUrl.'">';
                echo '<hr>';
                echo '<p class="noticia-title">'.$noticia->titulo.'</p>';
                echo '<a href="noticia.php?n='.$i++.'" class="noticia-btn">Ver</a>';
                echo "</div>";
            }
        } 
        
    ?>   
    
    </div> 
    
    <?php
        // Numeração das Páginas
    
        if($numeroNoticias > $numeroNoticiasPorPagina)
        { 
            $numeroPaginas = ceil($numeroNoticias/$numeroNoticiasPorPagina);
            echo '<div id="numeros-pagina">';
            for($i = 0; $i < $numeroPaginas; $i++)
                echo "<a href='noticias.php?p=".$i."'>".($i+1)."</a>";
            echo '</div>';
        }  
    ?>
    

</div>

<?php include_once "../includes/footer.inc.php"; ?>