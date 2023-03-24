<?php
session_start();
include 'helper.php';

$user = [
    'atayilmaz' => '123456'
];

if(get('islem') == 'giris') {

    $_SESSION['username'] = post('username');
    $_SESSION['password'] = post('password');

    if(!post('username')){
        $_SESSION['error'] = 'Lütfen kullanıcı adı giriniz';
        header('Location: login.php');
        exit();
    } else if(!post('password')){
        $_SESSION['error'] = 'Lütfen şifrenizi giriniz';
        header('Location: login.php');
        exit();
    }

}

?>