<?php
include("../incl/config.php");

$title = "Checkbox with multiple choices";
$form = new \Anax\HTMLForm\FormModelCheckboxMultiple();
$form->check();

include("../incl/renderPage.php");
