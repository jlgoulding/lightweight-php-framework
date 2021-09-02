<?php

//  var_dump(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

$router->get('', 'controllers/index.php');
$router->post('', 'controllers/index.php');
$router->get('home', 'controllers/home.php');
$router->post('home', 'controllers/home.php');
$router->post('logout', 'controllers/logout.php');
$router->get('contact', 'controllers/contact.php');

//log out
$router->get('logout', 'controllers/logout.php');

//information routes
$router->get('information', 'controllers/information.php');
$router->get('information/hl7messages', 'controllers/hl7messages.php');
$router->get('information/jobs', 'controllers/jobs.php');
$router->get('information/ramStatus', 'controllers/ramStatus.php');
$router->get('information/schemaload', 'controllers/schemaload.php');
$router->get('information/scorecards', 'controllers/scorecards.php');
$router->get('information/standbyrota', 'controllers/standbyrota.php');
$router->get('information/status', 'controllers/status.php');
$router->get('information/volumestatus', 'controllers/volumestatus.php');

//executive routes
$router->get('executive', 'controllers/executive.php');
$router->get('executive/smtRota', 'controllers/smtRota.php');
$router->get('executive/smtScorecard', 'controllers/smtScorecard.php');

//it department routes
$router->get('it', 'controllers/itdepartment.php');


//  die(var_dump(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/')));

// $router->get('information/oncall', 'controllers/index.php');
// $router->post('information/oncall', 'controllers/index.php');
// $router->get('information/oncall/home', 'controllers/home.php');
// $router->post('information/oncall/home', 'controllers/home.php');
// $router->post('information/oncall/logout', 'controllers/logout.php');
// $router->get('information/oncall/contact', 'controllers/contact.php');

//log out
// $router->get('information/oncall/logout', 'controllers/logout.php');

//information routes
// $router->get('information/oncall/information', 'controllers/information.php');
// $router->get('information/oncall/information/hl7messages', 'controllers/hl7messages.php');
// $router->get('information/oncall/information/jobs', 'controllers/jobs.php');
// $router->get('information/oncall/information/ramStatus', 'controllers/ramStatus.php');
// $router->get('information/oncall/information/schemaload', 'controllers/schemaload.php');
// $router->get('information/oncall/information/scorecards', 'controllers/scorecards.php');
// $router->get('information/oncall/information/standbyrota', 'controllers/standbyrota.php');
// $router->get('information/oncall/information/status', 'controllers/status.php');
// $router->get('information/oncall/information/volumestatus', 'controllers/volumestatus.php');

//executive routes
// $router->get('information/oncall/executive', 'controllers/executive.php');
// $router->get('information/oncall/executive/smtRota', 'controllers/smtRota.php');
// $router->get('information/oncall/executive/smtScorecard', 'controllers/smtScorecard.php');

//it department routes
// $router->get('information/oncall/it', 'controllers/itdepartment.php');
