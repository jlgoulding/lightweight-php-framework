<?php

$app =  [];

$app['config'] = require 'config.php';

//Using composer to autoload class - when adding new rerun composer install from the terminal

// require 'core/Router.php';

// require 'core/Request.php';

// require 'core/database/Connection.php';

// require 'core/database/QueryBuilder.php';

$app['database'] =  new QueryBuilder(
    Connection::make($app['config']['database'])
);
