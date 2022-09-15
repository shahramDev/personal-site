<?php

namespace App\controller;

use core\view;
use App\model\signUpModel as signUp;

class signUpController {

    public static function show ()
    {
        if ( $_SESSION['login'] ) {
            header('Location: /');
        } else {
            view::render('signUp',['userNameError'=>'','passwordError'=>'','moreError'=>'']);
        }

    }

    public static function validate () {

        $userName = $_POST['username'];
        $password = $_POST['password'];

        $userNameError = empty($userName) ? '<label for="username" class="error">please fill this field</label>' : '';
        $passwordError = empty($password) ? '<label for="password" class="error">please fill this field</label>' : '';

        if ( !empty($userNameError) || !empty($passwordError) ) {
            view::render('signUp',['userNameError'=>$userNameError,'passwordError'=>$passwordError,'moreError'=>'']);
        } else {
            if ( !empty(signUp::getUser($userName)) ) {
                view::render('login',['userNameError'=>'','passwordError'=>'','moreError'=>'This username has taken before you!']);
            } else {
                signUp::addUser($userName , $password);
                $_SESSION['login'] = true;
                header('Location: /') ;
            }
        }

    }
}