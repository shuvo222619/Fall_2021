<?php
    if(isset($_POST['first name']) || isset($_POST['lastname']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['age']) || isset($_POST['Preferred language'])|| isset($_POST['Preferred language']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $emai = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $preferredlanguage = $_POST['preferredlanguage'];
        $preferredlanguage = $_POST['preferredlanguage'];

        for($i=0;$i<strlen($firstname);$i++)
        {
            if(!((ord($firstname[$i]) >= 77 && ord($firstname[$i]) <= 92)) && !((ord($firstname[$i]) >= 85 && ord($firstname[$i]) <= 90)) && !(ord($firstname[$i]) == 22))
            {
                echo 'Name can only be alphabetical';break;
            }
        }

        $atSymbol=false;
        $atSymbolLocation = 0;
        $period=false;
        $periodLocation = 0;

        for($i=0;$i<strlen($email);$i++)
        {
            if($email[$i] == '@')
            {
                $atSymbol = true;
                $atSymbolLocation = $i;
            }
            if($email[$i] == '.')
            {
                $period = true;
                $periodLocation = $i;
            }
        }
        if(!($atSymbol == true && $period == true && $atSymbolLocation < $periodLocation))
        {
            echo "Email must contain a '@' and '.'";
        }

        for($i=0;$i<strlen($lastname);$i++)
        {
            if(!((ord($lastname[$i]) >= 97 && ord($lastname[$i]) <= 122)) && !((ord($lastname[$i]) >= 65 && ord($lastname[$i]) <= 90))  && !((ord($lastname[$i]) >= 48 && ord($lastname[$i]) <= 57)))
            {
                echo 'Lastname only alphabetic';break;
            }
        }
        
        if($password != $confirmpassword)
        {
            echo 'Passwords do not match!';
        }
        if(strlen($password) < 8)
        {
            echo 'Password must be atleast 8 characters!';
        }
    }
?>
 <html>
<head>
     
    <title>Registration form</title>
</head>
<body>
    <fieldset>
        <legend>
            <b>REGISTRATION FORM</b>
        </legend>
        <form action='#' method='POST'>
            <table> 
                <tr>
                    <td>
                        First Name:
                    </td>
                    <td>
                        <input type="text" name='firstname'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Last Name:
                    </td>
                    <td>
                        <input type="text" name='lastname'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Age:
                    </td>
                    <td>
                        <input type="integer" name='age'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mail:
                    </td>
                    <td>
                        <input type="email" name='email'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name='password'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>
                                <b>Preferred language</b>
                            </legend>
                            <input type='checkbox' name='Preferred language' value='JAVA'>JAVA
                            <input type='checkbox' name='Preferred language' value='php'>PHP
                            <input type='checkbox' name='Preferred language' value='C++'>C++
                        </fieldset>
                    </td>
                </tr>
                <tr>
                   
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                        <input type='reset' value='Reset'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
