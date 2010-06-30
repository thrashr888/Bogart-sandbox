<?php

namespace Bogart;

require '../vendor/Bogart/lib/Bogart/App.php';

try
{
  $app = new App('index', 'dev', true);
  //$app = new App('../index.php', 'dev', true); # allow this too. above is default.
  $app->run();
}
catch(\Exception $e)
{
  //print_r($e);
}
