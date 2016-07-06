<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Fluviário de Mora</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fluviário de Mora">
    <meta name="author" content="Fernando Vidigal">
    
    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- ESTILOS -->
    <link rel="stylesheet" href="<?php echo estilos_path; ?>/master.css">
</head>
<body>
   
<header>
    <div class="logotipo">
       <a href="<?php echo root; ?>index.php"><img src="<?php echo img_path; ?>/logotipo.gif" alt="Logotipo do Fluviário"></a>
    </div>
    
    <a href="#" id="menu-toogle">☰</a>

    <nav id="top-menu">
        <div id="close-drop-menu">☰&nbsp;&nbsp;&nbsp;Fechar Menu</div>
        <ul>   
            <li class="dropSubMenu">
                <p>Fluviário<span class="right-drop-arrow"></span></p>
                <ul class="drop-menu">
                    <li><a href="#">Missão</a></li>
                    <li><a href="#">Conservação</a></li>
                    <li><a href="#">Passaporte Amigo</a></li>
                    <li><a href="#">Área Envolvente</a></li>
                    <li class="no-bottom-border"><a href="#">Contactos</a></li>
                </ul>
            </li>
            <li class="dropSubMenu">
                <p>Exposição<span class="right-drop-arrow"></span></p>
                <ul class="drop-menu">
                    <li><a href="<?php echo pages_path; ?>/exposicao.php">Mapa da Exposição</a></li>
                    <li><a href="<?php echo pages_path; ?>/percursoRio.php">Percurso de um Rio</a></li>
                    <li><a href="#">Monstros do Rio</a></li>
                    <li><a href="#">Lontrário</a></li>
                    <li><a href="#">Sala Saramugo</a></li>
                    <li><a href="#">Habitats Exóticos</a></li>
                    <li class="no-bottom-border"><a href="#">Exposição Multimédia</a></li>
                </ul>
            </li>
            <li><a href="<?php echo pages_path; ?>/loja.php">Loja</a></li>
            <li><a href="<?php echo pages_path; ?>/restaurante.php">Restaurante</a></li>
        </ul>
    </nav>

</header>