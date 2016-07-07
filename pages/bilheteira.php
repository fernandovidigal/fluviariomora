<?php 
    require_once "../includes/config.inc.php";
    include_once "../includes/header.inc.php";
?>

<div id="imagem-illustrativa">
    <div class="img-overlay"></div>
    <figure>
        <img src="<?php echo img_path; ?>/loja.jpg" alt="Percurso de um Rio">
        <figcaption>Bilheteira</figcaption>
    </figure>
</div>

<div id="container">
    
    <div class="header-bar"><p>Visita Livre</p></div>
    
    <div id="intro-text">
        <p>O bilhete permite a visita livre - sem ser guiada por um educador ambiental - às exposições ao longo do dia, durante o horário de funcionamento do Fluviário de Mora.</p>
    </div>
    
    <table class="tabelaPrecos" border="0" cellspacing="2">
        <tr>
            <th>Bilhetes</th>
            <th>Normal</th>
            <th>Grupo <small>(20 ou +)</small></th>
        </tr>
        <tr>
            <td>Portador de deficiência</td>
            <td>-50%</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Criança (0-2)</td>
            <td>Grátis</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Criança (3-12)</td>
            <td>4.90€</td>
            <td>4.40€</td>
        </tr>
        <tr>
            <td>Adulto (13-64)</td>
            <td>7.20€</td>
            <td>6.70€</td>
        </tr>
        <tr>
            <td>Sénior (>65)</td>
            <td>5.20€</td>
            <td>4.70€</td>
        </tr>
        <tr>
            <td>Família</td>
            <td colspan="2">Pais e filhos (dos 3 aos 12 anos) menos 0.50€ cada</td>
        </tr>
        <tr>
            <td>Atividades</td>
            <td colspan="2"><a href="educacao.php">Consulte a página das atividades</a></td>
        </tr>
    </table>
    
    <div class="header-bar"><p>Visita Guiada</p></div>
    
    <table class="tabelaPrecos lessPadding" border="0" cellspacing="2">
        <tr>
            <th colspan="2" style="background-color:#eeeeee;"></th>
            <th colspan="2">Grupo<br><small>(20 ou +)</small></th>
            <th colspan="2">Grupo<br><small>(menos de 20)</small></th>
        </tr>
        <tr>
            <th colspan="2">Preço</th>
            <th>Bilhete</th>
            <th>Guia</th>
            <th>Bilhete</th>
            <th>Guia</th>
        </tr>
        <tr>
            <td rowspan="3">Geral</td>
            <td>Criança (3-12)</td>
            <td>4.40€</td>
            <td rowspan="3">2.00€<br>por pax</td>
            <td>4.90€</td>
            <td rowspan="3">40.00€<br>por grupo</td>
        </tr>
        <tr>
            <td>Adulto (13-64)</td>
            <td>6.70€</td>
            <td>7.20€</td>
        </tr>
        <tr>
            <td>Sénior (> 65)</td>
            <td>4.70€</td>
            <td>5.20€</td>
        </tr>
        <tr>
            <td rowspan="4">Escolas</td>
            <td>Aluno (3-12)</td>
            <td>4.40€</td>
            <td rowspan="4">2.00€<br>por aluno</td>
            <td>4.90€</td>
            <td rowspan="4">40.00€<br>por grupo</td>
        </tr>
        <tr>
            <td>Aluno (13-64)</td>
            <td>6.70€</td>
            <td>7.20€</td>
        </tr>
        <tr>
            <td>Aluno (> 65)</td>
            <td>4.70€</td>
            <td>5.20€</td>
        </tr>
        <tr>
            <td>Prof. / Auxiliar</td>
            <td>6.70€</td>
            <td>7.20€</td>
        </tr>
        <!--<tr>
            <td colspan="6">*Um guia por cada 30 visitantes > <a href="#">Consulte a tabela de preço das atividades</a></td>
        </tr>-->
    </table>
    
</div>

<?php include_once "../includes/footer.inc.php"; ?>