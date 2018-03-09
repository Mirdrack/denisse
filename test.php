<?php
require_once __DIR__ . '/vendor/autoload.php';

use Mirdrack\QueueListener\Queue;

$queue = new Queue;
echo $queue->test() . "\n";