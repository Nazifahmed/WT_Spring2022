<?php
class DB
{
    function opencon()
    {
        $DBHostname = 'localhost';
        $DBUsername = 'root';
        $DBpass = '';
        $DBName = 'testdb2';

        $conn = new mysqli($DBHostname, $DBUsername, $DBpass, $DBName);
        if ($conn->connect_error) {
            echo "i can't connection object" . $conn->connect_error;
        }
        return $conn;
    }
    function InsertData($fname, $lname, $age, $designation, $prelanguage1, $prelanguage2, $prelanguage3,$tablename, $conn)
    {
        $sqlstr = "INSERT INTO $tablename (fname,lname,age,designation,prelanguage1,prelanguage2,prelanguage3,email,password) VALUES ('$fname','$lname',$age,'$designation','$language1','$language2','$language3','$email','$password')";
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