<?php
include "../model/client.php";
include "../controller/client.php";
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $clientC = new clientC();
    $clientC->send_reset_pass_link($email);
        header('location:../views/index.php');
       
    }else{
        echo "<script>
        alert('Please enter a valid email');
        window.location.href='../views/index.php';
        </script>";
    }


?>