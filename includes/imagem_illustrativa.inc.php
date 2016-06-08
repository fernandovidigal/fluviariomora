<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
    <?php
        
        switch($imagem)
        {
            case 100:
                echo '<img src="'.img_path.'/actividades.jpg" alt="Actividades">';
                echo '<figcaption>Actividades</figcaption>';
                break;
                
            case 21:
                echo '<img src="'.img_path.'/exposicao/percurso_rio.jpg" alt="Percurso de um Rio">';
                echo '<figcaption>Percurso de um Rio</figcaption>';
                break;
        }
                         
    ?>
    </figure>
</div>