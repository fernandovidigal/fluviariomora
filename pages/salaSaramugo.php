<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/exposicao/sala_saramugo.jpg" alt="Sala Saramugo">
        <figcaption>Sala Saramugo</figcaption>
    </figure>
</div>

<div id="container">
    <div id="intro-text">
        <p>Conheça esta galeria dedicada ao saramugo e espécies autóctones de anfíbios, répteis e moluscos, alertando para a sua conservação e dando a conhecer os factores de ameaça que muitas das nossas espécies enfrentam.</p>
    </div>


    <div class="header-bar"><p>Nesta Exposição</p></div>
    
    <div class="especie">
        <img src="<?php echo img_path; ?>/exposicao/saramugo.jpg" alt="Saramugo">
        <div class="especie-desc">
            <h1>Saramugo</h1>
            <p><small>Anaecypris hispanica (Steindachner, 1866)</small></p>
            <p><strong>Estatuto de Conservação:</strong> Global - Em perigo; Nacional - Criticamente em perigo</p>
            <p>Espécie residente, endémica das regiões média e inferior da bacia do Guadiana (Portugal e Espanha). O saramugo ocorre em pequenos cursos de água pouco profundos e afastados do rio principal, com zonas de corrente onde está presente vegetação aquática e escasseia a vegetação ripícola/ripária. A sua alimentação é composta principalmente por invertebrados aquáticos e detritos. Esta espécie ovípara reproduz-se de Abril a Julho, em pegos com substrato de cascalho, pedras, calhaus e com vegetação aquática. O saramugo atinge um comprimento de cerca de 7 cm e possui uma curta longevidade.</p>
        </div>
        
    </div>
    
    <div class="especie">
        <img src="<?php echo img_path; ?>/exposicao/enguia_europeia.jpg" alt="Enguia Europeia">
        <div class="especie-desc">
            <h1>Enguia-europeia</h1>
            <p><small>Anguilla anguilla (Linnaeus, 1758)</small></p>
            <p><strong>Estatuto de Conservação:</strong> Global - Vulnerável; Nacional - Em perigo</p>
            <p>Em Portugal esta espécie migradora catádroma ocorre em todas as bacias hidrográficas do Minho ao Guadiana, e numa grande diversidade de habitats, preferencialmente em rios de regime lótico, procurando refúgios durante o dia pois é mais activa durante a noite. A enguia aparenta ser omnívora com invertebrados aquáticos, peixes, matéria mineral, vegetal e detritos a fazerem parte da sua dieta. A migração reprodutora ocorre no Outono e Inverno na nossa latitude, e partem da costa até alcançarem o Mar dos Sargaços onde acasalam, desovam e morrem. As pequenas enguias-europeias que aí nascem, chamadas leptocéfalos, iniciam a jornada de regresso até às zonas costeiras da Europa, que levará cerca de 3 anos a ser concluída. Chegadas à costa, sobem os rios onde irão permanecer até ficarem na fase prateada – que demora cerca de 6 a 12 anos (29 – 40 cm) a atingir para os machos, e 9 a 20 anos (38 – 150 cm) para as fêmeas. Quando o Outono começa, as enguias que estão na fase prateada iniciam a descida do rio em direcção aos estuários, e Mar dos Sargaços.</p>
        </div>
        
    </div>
</div>


<?php include_once "../includes/footer.inc.php"; ?>