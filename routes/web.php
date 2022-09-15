<?php

use core\view;

$Router->get('/','App\controller\HomeController@show');

$Router->get('/login','App\controller\loginController@show');
$Router->post('/login','App\controller\loginController@validate');
$Router->get('/sign-up','App\controller\signUpController@show');
$Router->post('/sign-up','App\controller\signUpController@validate');

$Router->set404(function(){
    view::render( '404' , [ 'address' => $_SERVER['REQUEST_URI'] ] );
});