<?php

namespace App\controller;

use core\view;
use App\model\loginModel as login;

class loginController {

    public static function show ()
    {
        if ( $_SESSION['login'] ) {
            header('Location: /');
        } else {
            view::render('login',['userNameError'=>'','passwordError'=>'','moreError'=>'']);
        }

    }

    public static function validate () {

        $userName = $_POST['username'];
        $password = $_POST['password'];

        $userNameError = empty($userName) ? '<label for="username" class="error">please fill this field</label>' : '';
        $passwordError = empty($password) ? '<label for="password" class="error">please fill this field</label>' : '';

        if ( !empty($userNameError) || !empty($passwordError) ) {
            view::render('login',['userNameError'=>$userNameError,'passwordError'=>$passwordError,'moreError'=>'']);
        } else {
            if ( empty(login::getUser($userName,$password)) ) {
                view::render('login',['userNameError'=>'','passwordError'=>'','moreError'=>'your username or password is wrong!']);
            } else {
                $_SESSION['login'] = true;
                header('Location: /') ;
            }
        }

    }
}