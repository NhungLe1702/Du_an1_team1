<?php
   require_once 'models/customer.php';

    // function hienthiMyAccount(){
        

    // }

    function registerForm(){
        register();
        include 'views/template/my-account.php';
    }
    function loginForm(){
        login();
        include 'views/template/my-account.php';
    }
    function logout(){
        unset($_SESSION['user']);
        echo('<script>window.location.href="index.php?url=trang_chu"</script>');
    }
