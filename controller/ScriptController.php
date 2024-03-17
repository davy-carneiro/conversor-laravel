<?php

include("../model/Util.php");

if ($_POST) {
    // p($_POST);
    $script = $_POST['script'];

    $mainTable = excluir($script, "::table(", ")");
    $mainTable = removerAspas($mainTable);
}   
