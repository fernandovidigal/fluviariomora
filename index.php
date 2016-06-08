<?php
    require_once "includes/config.inc.php";
    include_once "includes/header.inc.php";
?>

<?php

    $page = getPage($_SERVER["REQUEST_URI"]);
    showPage($page);

?>

<?php
    include_once "includes/footer.inc.php";
?>