#!/usr/env php

<?php

require __DIR__.'/vendor/autoload.php';

use Pokefodase\Game;
use Pokefodase\Viewers\DeixaOSub;

$game = new Game();
$deixaOsub = new DeixaOSub();

var_dump($game->testFunction());
echo $deixaOsub->render().PHP_EOL;
