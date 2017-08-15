<?php
include("../incl/config.php");

$title = "Form elements in HTML 5";
$form = new \Anax\HTMLForm\FormModelElementsHTML5();
$form->check();

include("../incl/renderPage.php");
