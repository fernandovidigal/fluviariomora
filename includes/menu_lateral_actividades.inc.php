<?php $page = 0; ?>
   

<div id="menu-lateral">
    <div class="sub-menu">
        <p>Grupos, Família e Individuos<span class="right-drop-arrow"></span></p>
        <ul>
            <li <?php echo ($page == 1 ? 'class="selected"': ''); ?>><a href="<?php echo pages_path; ?>/aventuraAmbiental.php">Uma Aventura Ambiental</a></li>
            <li <?php echo ($page == 2 ? 'class="selected"': ''); ?>><a href="<?php echo pages_path; ?>/oficinasAmbientaisFamilias.php">Oficinas Ambientais</a></li>
        </ul>
    </div>

    <div class="sub-menu">
        <p>Instituições de Ensino<span class="right-drop-arrow"></span></p>
        <ul>
            <li <?php echo ($page == 3 ? 'class="selected"': ''); ?>><a href="<?php echo pages_path; ?>/oficinasAmbientais.php?pa=0">Pré-Escolar (3 a 5 anos)</a></li>
            <li <?php echo ($page == 4 ? 'class="selected"': ''); ?>><a href="<?php echo pages_path; ?>/oficinasAmbientais.php?pa=1">1º CEB (6 a 10 anos)</a></li>
            <li <?php echo ($page == 5 ? 'class="selected"': ''); ?>><a href="<?php echo pages_path; ?>/oficinasAmbientais.php?pa=2">2º CEB (10 a 12 anos)</a></li>
            <li <?php echo ($page == 6 ? 'class="selected"': ''); ?>><a href="<?php echo pages_path; ?>/oficinasAmbientais.php?pa=3">3º CEB (12 a 15 anos)</a></li>
            <li <?php echo ($page == 7 ? 'class="selected"': ''); ?>><a href="<?php echo pages_path; ?>/oficinasAmbientais.php?pa=4">Secundário (15 aos 18 anos)</a></li>
            <!--<li <?php //echo ($page == 8 ? 'class="selected"': ''); ?>><a href="<?php echo pages_path; ?>/oficinasAmbientais.php?pa=5">Todas as idades</a></li>-->
            <li class="menu-individuais <?php echo ($page == 9 ? ' selected': ''); ?>"><a href="<?php echo pages_path; ?>/modulosVisita.php">Módulos de Visita</a></li>
            <li class="menu-individuais <?php echo ($page == 10 ? ' selected': ''); ?>"><a href="<?php echo pages_path; ?>/actividadesFerias.php">Férias</a></li>
            <li class="menu-individuais <?php echo ($page == 11 ? ' selected': ''); ?>"><a href="<?php echo pages_path; ?>/actividadesEfemerides.php">Efermérides</a></li>
        </ul>
    </div>
</div>