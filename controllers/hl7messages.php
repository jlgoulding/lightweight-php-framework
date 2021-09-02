<?php
$messages = $app['database']->selectAll('tbl_BHNFTHL7Messages_App');
// die(var_dump($messages));
require 'views/information/hl7messages.view.php';
