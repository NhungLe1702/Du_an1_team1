<?php
   require_once 'models/customer.php';

    function registerForm(){
        register();
        include 'views/customer/my-account.php';
    }

    function loginForm(){
        login();
        include 'views/customer/my-account.php';
    }

    function logOutUser(){
        logOut();
        echo('<script>window.location.href="index.php?url=trang_chu"</script>');
    }
