<?php

namespace Bogart;

require __DIR__.'/../vendor/Bogart/lib/Bogart/App.php';

$app = new App(__DIR__.'/../index.php');
$app->run();
