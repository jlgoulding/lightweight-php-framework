<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';

session_start();

$database = require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
