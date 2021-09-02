<?php

$rotas = $app['database']->selectAll('tbl_BHNFTStandbyRota_App');
// die(var_dump($rotas));
require 'views/information/standbyrota.view.php';
