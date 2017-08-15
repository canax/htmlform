<?php
include("../incl/config.php");

$title = "Using checkboxes";
$form = new \Anax\HTMLForm\FormModelCheckbox();
$form->check();

include("../incl/renderPage.php");
