<?php
include("../incl/config.php");

$title = "Select option list";
$form = new \Anax\HTMLForm\FormModelSelectOption();
$form->check();

include("../incl/renderPage.php");
