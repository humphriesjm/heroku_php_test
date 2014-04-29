<?php

require('vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel to STDERR
$log = new Logger('name');
$log->addWarning("Running a beta version of Heroku's PHP support.");

echo "Jason can do php too.";

?>
