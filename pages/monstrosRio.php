<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/exposicao/monstros_rio.jpg" alt="Monstros do Rio">
        <figcaption>Monstros do Rio</figcaption>
    </figure>
</div>

<div id="container">
    <div id="intro-text">
        <p>Neste habitat reformulado a partir do antigo lontrário, poderá observar peixes de água doce de grandes dimensões.</p>
    </div>


    <div class="header-bar"><p>Nesta Exposição</p></div>
    
    <div class="especie">
        <img src="<?php echo img_path; ?>/exposicao/carpa.jpg" alt="Carpa">
        <div class="especie-desc">
            <h1>Carpa</h1>
            <p><small>Cyprinus carpio (Linnaeus, 1758)</small></p>
            <p><strong>Estatuto de Conservação:</strong> s/avaliação pela IUCN</p>
            <p>Em Portugal, a sua ocorrência estende-se a praticamente todas as bacias hidrográficas. A carpa ocorre preferencialmente em cursos de água de regime lêntico, com fundos vasosos e com vegetação aquática e ripícola/ripária. É uma espécie que apresenta muitas variedades, entre outras, a carpa-espelho, carpa-couro e carpa-dourada. A carpa é omnívora e generalista, alimentando-se de nemátodes, insectos aquáticos, crustáceos e alevins de outros peixes, gramíneas e detritos. A reprodução desta espécie ovípara ocorre de Abril a Junho, em zonas pouco profundas e com abundância de vegetação à qual os ovos aderem. A carpa pode atingir cerca de 85 cm de comprimento.</p>
        </div>
        
    </div>
    
    <div class="especie">
        <img src="<?php echo img_path; ?>/exposicao/esturjao.jpg" alt="Esturjão">
        <div class="especie-desc">
            <h1>Esturjão</h1>
            <p><small>Acipenseridae (Linnaeus, 1758)</small></p>
            <p><strong>Estatuto de Conservação:</strong> Global - Criticamente em Perigo; Nacional - Regionalmente Extinto</p>
            <p>“Esturjão” é o nome comum de indivíduos de 27 espécies diferentes que pertencem à Família Acipenseridae. Os esturjões são espécies com uma grande longevidade e dimensão, com maturação sexual tardia, podem apresentar migrações diádromas e que aparentam características primitivas. De facto, a sua evolução data de há cerca de 200 milhões de anos atrás. Várias espécies de esturjão são procuradas pelas suas ovas que depois são processadas. A espécie de esturjão que ocorria em Portugal era a Acipenser sturio, mas está dada como regionalmente extinta – ou seja, extinta em Portugal. As características actuais do habitat – existência de barragens e açudes, caudal insuficiente e intrusão salina – na área anteriormente ocupada por esta espécie, como o rio Douro e o rio Guadiana, praticamente inviabilizam a recuperação do esturjão em território nacional.</p>
        </div>
        
    </div>
</div>


<?php include_once "../includes/footer.inc.php"; ?>