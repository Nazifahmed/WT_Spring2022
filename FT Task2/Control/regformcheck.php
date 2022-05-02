<?php
include '../Model/model.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $age = $_POST['Age'];
    $designation = $_POST['Desgination'];
    $planguage1 = $_POST['PreferredLanguage1'];
    $planguage2 = $_POST['PreferredLanguage2'];
    $planguage3 = $_POST['PreferredLanguage3'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    
    $mydb = new DB();
    $conobj = $mydb->opencon();
    $mydb->InsertData(
        $fname,
        $lname,
        $age,
        $designation,
        $planguage1,
        $planguage2,
        $planguage3,
        $email,
        $password,
        'employee',
        $conobj
    );
    $mydb->opencon($conobj);
}
?>