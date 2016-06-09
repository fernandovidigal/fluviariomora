<?php
    require_once "includes/config.inc.php";
    include_once includes_path . "/header.inc.php";
?>

<?php

    $page = getPage($_SERVER["REQUEST_URI"]);
    showPage($page);

?>

<?php
    include_once includes_path . "/footer.inc.php";
?>