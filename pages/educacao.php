<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/actividades.jpg" alt="Percurso de um Rio">
        <figcaption>2º CEB (10 a 12 anos)</figcaption>
    </figure>
</div>

<div id="container">

<div id="intro-text">
    <p>As “<strong>Oficinas Ambientais</strong>” são o grupo de actividades que aliam a educação ambiental aos conteúdos curriculares de cada ciclo de ensino, e a forma ideal de complementar a visita guiada por um educador ambiental ou livre - sem ser guiada por um educador ambiental. Conheça os módulos de actividades com condições especiais para instituições de ensino.</p>
</div>

    
    <div id="actividades-content">
        
        <?php include_once "../includes/menu_lateral_actividades.inc.php"; ?>
        
        <section id="descricaoActividades">
            <div class="header-bar"><p>2º CEB (10 a 12 anos)</p></div>
        
            <section id="lista-actividades">
                <article class="actividade">
                    <img src="<?php echo img_path; ?>/actividades/aqua_mater.jpg" alt="">
                    <hr>
                    <h3>Aqua Meter</h3>
                    <p>A água é um importante componente dos seres vivos e possui propriedades únicas. Não se encontra equitativamente distribuída na natureza e a sua qualidade é fulcral para todos os seres vivos. Nesta actividade vamos sensibilizar para a importância da água, o papel que os rios e os seus seres vivos desempenham na sua qualidade, e como algumas acções humanas interferem com a qualidade da água.</p>
                </article>

                <article class="actividade">
                    <img src="<?php echo img_path; ?>/actividades/eduMatematicaRios.jpg" alt="">
                    <hr>
                    <h3>Matemática nos Rios</h3>
                    <p>Quantos litros de água leva um aquário? A geometria, áreas, volumes e conversões estão sempre presentes nos aquários do Fluviário. Até a sua decoração obedece a regras e proporções. A matemática é uma ponte que nos permite atravessar um imenso rio. Vamos descobrir, praticar e até resolver alguns problemas com sólidos geométricos muito especiais.</p>
                </article>
                
                <article class="actividade">
                    <img src="<?php echo img_path; ?>/actividades/eduMatematicaRios.jpg" alt="">
                    <hr>
                    <h3>Matemática nos Rios</h3>
                    <p>Quantos litros de água leva um aquário? A geometria, áreas, volumes e conversões estão sempre presentes nos aquários do Fluviário. Até a sua decoração obedece a regras e proporções. A matemática é uma ponte que nos permite atravessar um imenso rio. Vamos descobrir, praticar e até resolver alguns problemas com sólidos geométricos muito especiais.</p>
                </article>

            </section>
        </section>
    
    </div>
</div>

<?php include_once "../includes/footer.inc.php"; ?>