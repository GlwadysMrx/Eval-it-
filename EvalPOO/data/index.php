<?php
require_once('./controllers/view.php');

$page = new Page($_SERVER['REQUEST_URI']);
$page->getContent(false,$_SERVER['REQUEST_URI'] );

 ?>
