<?php

//require the autoload file
require_once('vendor/autoload.php');



//create an istance of the base class
$f3 = Base::instance();

//set debug level
$f3->set ('DEBUG', 3);

//define a route usinf parameters
$f3->route('GET /hello/@name',
    function($f3, $params){
    //$name = $params['name'];
    //echo "<h1>Hello, $name</h1>";

        $f3->set('name', $params['name']);
    $template = new Template();
    echo $template->render('views/hello.html');

});

//define a route using parameters
$f3->route('GET /language/@lang',
    function($f3, $params){
        switch ($params['lang']){
            case 'swahili':
                echo 'Jumbo!'; break;
            case 'spanish':
                echo 'Hola!'; break;
            case 'russian':
                echo 'Privet!'; break;
            case 'farsi':
                echo 'Jumbo!'; break;

                //reroute to another page
            case 'french':
                $f3->reroute('/');
             //404 error
            default:
                $f3->error(404);
        }
        //echo "<h1>Hello, $name</h1>";
    });

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