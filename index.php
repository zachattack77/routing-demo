<?php

//require the autoload file
require_once('vendor/autoload.php');



//create an istance of the base class
$f3 = Base::instance();

//set debug level
$f3->set ('DEBUG', 3);

//define a default route
$f3->route('GET /jewelry/rings/toe-rings', function() {
    echo '<h1>Hello!</h1>';
    $template = new Template();
    echo $template->render('views/toe-rings.html');
    //echo '<h2>How are you?</h2>';


    }
);

//define a page1 route
//$f3->route('GET /jewelry/rings/toe-rings', function(){
   // echo '<h1>this is page 1 </h1>';
//});





//run Fat-Free
$f3->run();