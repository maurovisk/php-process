<?php

use SystemUtil\Process;

require_once '../../src/Process.php';

$proc = new Process('sh',['Hello'=>'World']);
$proc->setInput('echo $Hello');

$proc->run();
$fd = $proc->getOutput();
$out = stream_get_contents($fd);
var_dump($out);// -> World\n