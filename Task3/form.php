<!DOCTYPE html>

<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
         <h1 style=text-align:left>Registration Form</h1>
         <from action= "process.php" method="post">
         <form>
             <table>
                 <tr>
                     <td>
                         FirstName:
                     </td>
                     <td>
                         <input type="text" name = "firstname">
                     </td>
                 </tr>
                 <tr>
                     <td>
                         LastName:
                     </td>
                     <td>
                         <input type="text" name = "lastname">
                     </td>
                 </tr>
                  <tr>
                     <td>
                         Age:
                     </td>
                     <td>
                         <input type="age" name = "age">
                     </td>
                 </tr>
                 <tr>      
                     <td>
                         Designation:
                     </td>
                     <td>
                         <input type="radio" name="Desgination1">Junior Programmer
                         <input type="radio" name="Desgination2">Senior Programmer
                         <input type="radio" name="Desgination3">Project Lead
                    </td>
                 </tr>
                 <tr>
                     <td>
                         Preferred Language : 
                     </td>
                     <td>
                         <input type="checkbox" name="PreLang1">JAVA
                         <input type="checkbox" name="PreLang2"> PHP
                         <input type="checkbox" name="PreLang3"> C++
                    </td>
                 </tr>
                 <tr>
                     <td>
                         Email:
                     </td>
                     <td>
                         <input type="email" name = "email">
                     </td>
                 </tr>
                 <tr>
                     <td>
                        Password : 
                     </td>
                     <td>
                         <input type="password" name="password">
                     </td>
                 </tr>
                 <tr>
                     <td>
                       Please choose a file  
                     </td>
                     <td>
                         <input type="file">
                     </td>
                 </tr>
                 <tr>
                    <td>
                        <input type="submit">
                        <input type="reset">

                     </td>
                 </tr>
             </table>
         </form>
     </body>
</html>