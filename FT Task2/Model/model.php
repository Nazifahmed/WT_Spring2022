<?php
class DB
{
    function opencon()
    {
        $DBHostname = 'localhost';
        $DBUsername = 'root';
        $DBpass = '';
        $DBName = 'task';

        $conn = new mysqli($DBHostname, $DBUsername, $DBpass, $DBName);
        if ($conn->connect_error) {
            echo "i can't connection object" . $conn->connect_error . '<br>';
        }
        return $conn;
    }
    function InsertData($fname, $lname, $age, $salary, $tablename, $conn)
    {
        $sqlstr = "INSERT INTO $tablename (fname,lname,age,designation,planguage1,planguage2,planguage3,email,password) VALUES ('$fname','$lname',$age,'$designation','$planguage1','$planguage2','$planguage3','$email','$password')";
        if ($conn->query($sqlstr) == true) {
            echo 'Data inserted successfully.<br>';
        } else {
            echo "Data Can't insert.!" . $conn->error . '<br>';
        }
    }
    function closecon($conn)
    {
        $conn->close();
    }
}

?>