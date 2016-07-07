<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/loja.jpg" alt="Percurso de um Rio">
        <figcaption>Horário</figcaption>
    </figure>
</div>

<div id="container">
    
    <div class="header-bar"><p>Horário</p></div>
    
    <div id="estacaoWrapper">
        <div class="estacao">
            <img src="<?php echo img_path; ?>/sol.png">
            <p><strong>Verão</strong></p>
            <p>10h00 às 19h00</p>
        </div>

        <div class="estacao">
            <img src="<?php echo img_path; ?>/nuvens.png">
            <p><strong>Inverno</strong></p>
            <p>10h00 às 17h00</p>
        </div>
    </div>
    
    <div id="intro-text">
        <p>Os horários de Verão e de Inverno alternam nos dias de mudança da hora legal.</p>
        <p>O Fluviário encontra-se encerrado ao público nos dias <strong>25 de Dezembro</strong> e <strong>1 de Janeiro (parte da manhã)</strong>. No dia <strong>1 de Janeiro</strong> estamos abertos ao público da parte da tarde das 13h00 às 17h00.</p>
    </div>
    
</div>

<?php include_once "../includes/footer.inc.php"; ?>