<?php

//require the autoload file
require_once('vendor/autoload.php');

//create an istance of the base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function() {
    echo '<h1>Hello!</h1>';
    //echo '<h2>How are you?</h2>';


    }
);

//run Fat-Free
$f3->run();