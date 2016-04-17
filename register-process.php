<?php
session_start();

include_once 'functions.php';

if(!isset($_POST['submit']) || (htmlspecialchars($_POST['verify'])) != '1'){
    header("Location: register.php");
    exit();
}

$form_data = array('uname', 'fname', 'email', 'dob', 'password', 'mobile', 'address');
$check = FALSE;
$_SESSION['msg'] = "";

foreach($form_data as $fdata){
    if(!isset($_POST[$fdata]) || empty($_POST[$fdata])){
        $check = TRUE;
    }
    else{
        $form_data[$fdata] = validate_data($_POST[$fdata]);
    }
}
if($check){
    $_SESSION['msg'] = "Empty Fields";
    header("Location: register.php");
    die("Empty Fields");
}
?>