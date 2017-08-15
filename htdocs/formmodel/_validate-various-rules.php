<?php
include("../incl/config.php");

$title = "Validate various rules";
$form = new \Anax\HTMLForm\FormModelValidateVariousRules();
$form->check();

include("../incl/renderPage.php");
