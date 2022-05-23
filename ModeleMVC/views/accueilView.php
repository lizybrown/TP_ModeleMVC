<?php ob_start() ?>

<h2> accueil </h2>

<?php

$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "templates.php";