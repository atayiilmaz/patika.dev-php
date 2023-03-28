<?php

if (route(0) == 'login'){
    //DB

    if (isset($_POST['submit'])){
        add_session('hata', 'Mesajınız eklendi!');
        $eposta = post('esposta');
        $sifre = post('sifre');

    }

    view('auth/login');
}