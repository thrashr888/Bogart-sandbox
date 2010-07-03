<?php

namespace Bogart;

require __DIR__.'/../../vendor/Bogart/lib/Bogart/App.php';

$app = new App(__DIR__.'/../../post.php', array('debug' => false, 'env' => 'dev'));
$app->run();
