<?php
include("../incl/config.php");

$title = "Custom validation";
$form = new \Anax\HTMLForm\FormModelValidateCustom();
$form->check();

include("../incl/renderPage.php");
