<?php
include("../incl/config.php");

$title = "Search widget";
$form = new \Anax\HTMLForm\FormModelSearchWidget();
$form->check();

include("../incl/renderPage.php");
