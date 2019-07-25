<?php

$pagina = isset($_GET['p']) ? strtolower($_GET['p']): 'home';
require_once '' . $pagina . '.php';
include("core/views/header-config.php");

?>
