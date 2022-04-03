<?php
include '../Model/model.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $age = $_POST['Age'];
    $designation = $_POST['Desgination'];
    $prelanguage1 = $_POST['PreferredLanguage1'];
    $prelanguage2 = $_POST['PreferredLanguage2'];
    $prelanguage3 = $_POST['PreferredLanguage3'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];


    $mydb = new DB();
    $conobj = $mydb->opencon();
    $mydb->InsertData($fname,$lname,$age,$designation,$prelanguage1,$prelanguage2,$prelanguage3,$email,$password,'person',$conobj );
    $mydb->opencon($conobj);
}
?>