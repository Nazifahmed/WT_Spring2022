<html>

<body>
    <h1>Registration Form </h1>
    <form action="" onsubmit="return validateForm()" method="post">
        <table>
            <tr>
                <td>
                    Fisrt Name :
                <td>
                <td>
                    <input type="text" id="fname" name="FirstName">
                    <p id="errorfname"></p>
                </td>
            <tr>
                <td>
                    Last Name :
                <td>
                <td>
                    <input type="text" id="lname" name="LastName">
                    <p id="errorlname"></p>
                </td>
            <tr>
                <td>
                    Age :
                <td>
                <td>
                    <input type="text" id="age" name="Age">
                    <p id="errorage"></p>
                </td>
            </tr>
            <tr>
                <td>
                    Designation :
                <td>
                <td>
                    <input type="radio" name="Desgination">Junior Programmer
                    <input type="radio" name="Desgination">Senior Programmer
                    <input type="radio" name="Desgination">Project Lead
                </td>
            </tr>
            <tr>
                <td>
                    Preferred Language :
                <td>
                <td>
                    <input type="checkbox" name="PreferredLanguage1">JAVA
                    <input type="checkbox" name="PreferredLanguage2"> PHP
                    <input type="checkbox" name="PreferredLanguage3"> C++
                </td>
            </tr>
            <tr>
                <td>
                    Email :
                <td>
                <td>
                    <input type="email" id="email" name="Email">
                    <p id="errormail"></p>
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                <td>
                <td>
                    <input type="password" id="pass" name="Password">
                    <p id="errorpass"></p>
                </td>
            </tr>
            <tr>
                <td>
                    Please choose a file
                <td>
                <td>
                    <input type="file" name="image">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                    <input type="reset">

                </td>
            </tr>
    </form>

    <script src="../js/myjs.js"></script>
</body>

</html>
<?php include '../Control/regformcheck.php';
?>