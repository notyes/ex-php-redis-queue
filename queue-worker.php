<?php

// if check when not use command mode
if( PHP_SAPI !='cli' ) {
    exit('Cannot use direct script access allowed!');
}

include_once __DIR__.'/app.php';

Resque::dequeue('default');

// start worker
include(__DIR__.'/vendor/bin/resque');
