<?php

//require the autoload file
require_once('vendor/autoload.php');



//create an istance of the base class
$f3 = Base::instance();

//set debug level
$f3->set ('DEBUG', 3);

//define a default route
$f3->route('GET /', function() {
    echo '<h1>Hello!</h1>';
    //echo '<h2>How are you?</h2>';


    }
);

//define a page1 route
$f3->route('GET /page1', function(){
    echo '<h1>this is page 1 </h1>';
});


$f3->route('GET /page2', function(){
    echo '<h1>this is page 2 </h1>';
});

//run Fat-Free
$f3->run();