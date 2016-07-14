<?php

    if(!isset($_GET['e']))    
    {
        header("Location: ../index.php");
    } else {
        
        $erro = (int)$_GET['e'];
        
        require_once "../includes/config.inc.php";
        include_once "../includes/header.inc.php";
        
    }
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/loja.jpg" alt="Subscrição Newsletter">
        <figcaption>Subscrição Newsletter</figcaption>
    </figure>
</div>

<div id="container">

    <div class="header-bar"><p>Subscrição Newsletter</p></div>
    
    <?php
        if($erro == 0)
        {
    ?>
    
    <p><strong>Registo efectuado com sucesso</strong></p><br>

    <p>Obrigado por se ter registado na nossa Newsletter.<br><br>As próximas edições da nossa Newsletter serão enviadas para o seu endereço de correio electrónico.<br>Esperemos que goste e que nos Visite!</p>
    
    <?php
        } else {
    ?>
    
    <p><strong>Ocorreu um ERRO durante o registo</strong></p><br>

    <p>
        Ocorreram os seguintes Erros:<br>
        <?php
            switch($erro)
            {
                case 1 : echo "   - Deve indicar o seu endereço de email.";
                    break;
                case 2 : echo "   - Deve indicar um endereço de email válido.";
                    break;
                case 3 : echo "   - Não foi possível registar o seu endereço de email. Por favor, tente novamente.";
                    break;
                case 4 : echo "   - O endereço de email já se encontra registado na nossa newsletter.";
                    break;
                default: break;
            }
        ?>
    </p>
      
    <?php        
        }
    ?>
    
    <div class="spacer-bottom-60">&nbsp;</div>
    
</div>


<?php include_once "../includes/footer.inc.php"; ?>