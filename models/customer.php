<?php

    include_once('models/db.php');

    function resgiter(){
        if(isset($_POST['register'])){
            $name = $_POST['name'];
            $user_name = $_POST['user_name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "INSERT INTO customer(name,user_name,address,phone,email,password)
                    VALUE('$name','$user_name','$address',$phone,'$email','$password')";
            $register = pdo_execute($sql);        
        }
    }
?>