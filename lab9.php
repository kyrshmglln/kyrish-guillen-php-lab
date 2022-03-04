<!DOCTYPE html>
<html lang="en">
    <?php
        define('NAME', 'KYRISH MAE GUILLEN');
        define('STUDENT NUMBER', '2019-03934-MN-0');
        define('ADDRESS', 'San Lorenzo Ruiz, Taytay, Rizal');
        define('CONTACTNUMBER', '09666536210');
        define('WEBADDRESS', 'www.facebook.com/kyrshmglln');
        define('LABTITLE', 'Laboratory Activity No. 9');
        define('DESCRIPTION', 'Handling User Input (User Registration)');

        $myinteger = 10;
        $myfloat = 10.57;
        $mystring = '10 apples';
        $myboolean = TRUE;
        $mynull = NULL;
        $myarray = array(1, 2, 3);
    ?>

    <head>
        <meta charset="UTF-8">
        <title><?php echo LABTITLE; ?></title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lilita+One&family=Rock+Salt&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=PT+Sans&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@1,300;1,400&display=swap');

            .header {
                height: 60px;
                margin-bottom: 1%;
                background-color: #e3b23c;
                color: #423e37;
                font-size: 52px;
                font-family: Lilita One, cursive;
            }
            .name{
            }
            body {
                background-color: #edebd7;
                margin: 50px;
            }
            .center {
                display: flex;
                flex-direction: row;
            }
            .navigation {
                margin-right: 1%;
                font-family: Fira Sans Extra Condensed, sans-serif;
                width: 40%;
            }
            .content {
                font-family: Fira Sans, sans-serif;
                width: 60%;
            }
            .footer {
                margin-top: 1%;
                background-color: #e3b23c;
                color: #423e37;
                font-size: 15px;
                font-family: PT Sans, sans-serif;
            }
        </style>
    </head>

    <body>
        <div class="header">
            <p class="name">
                <?php 
                echo NAME;
                ?>
            </p>
        </div>
        <div class="center">
            <div class="navigation">
                <ul>
                    <li><a href="lab1.php">Hello World</a></li>
                    <li><a href="lab2.php">Creating Basic PHP Script</a></li>
                    <li><a href="lab3.php">Working with Data Types and Operators</a></li>
                    <li><a href="lab4.php">Functions and Control Structures</a></li>
                    <li><a href="lab5.php">Iteration Structures</a></li>
                    <li><a href="lab6.php">String Functions in PHP</a></li>
                    <li><a href="lab7.php">Regular Expression</a></li>
                    <li><a href="lab8.php">Array Manipulations (Word Counter)</a></li>
                    <li><a href="lab9.php">Handling User Input (User Registration)</a></li>
                    <li><a href="lab10.php">Handling User Input (Dynamic Page)</a></li>
                    <li><a href="lab11.php">Managing State Information Using Session – Login Page</a></li>
                    <li><a href="lab12.php">Managing State Information Using Cookies – Login Page with Cookies</a></li>
                    <li><a href="lab13.php">Sending Email</a></li>
                </ul>
            </div>
            <div class="content">

            <?php
            function generate_textbox($name, $value) {
                return '<input type="text" id="ctw3" name="' . $name . '" value="' . $value . '">';
            }

            function generate_password($name, $value) {
                return '<input type="password" id="ctw3" name="' . $name . '" value="' . $value . '">';
            }

            function generate_textarea($name, $value) {
                return '<textarea id="ctw3" name="' . $name . '">' . $value . '</textarea>';
            }
            
            function generate_checkbox($name) {
                return '<input type="checkbox"  name="' . $name . '">';
            }
            ?>
            <?php

                $lastname   = isset($_POST['txtLastname']) ? $_POST['txtLastname'] : '';
                $firstname  = isset($_POST['txtFirstname']) ? $_POST['txtFirstname'] : '';
                $middlename = isset($_POST['txtMiddlename']) ? $_POST['txtMiddlename'] : '';
                $emailaddress = isset($_POST['txtEmailadd']) ? $_POST['txtEmailadd'] : '';
                $username = isset($_POST['txtUN']) ? $_POST['txtUN'] : '';
                $password = isset($_POST['txtPW']) ? $_POST['txtPW'] : '';
                $confirmpassword = isset($_POST['txtCPW']) ? $_POST['txtCPW'] : '';
                $comments = isset($_POST['txtcom']) ? $_POST['txtcom'] : '';
                $agree = isset($_POST['txtagree']) ? $_POST['txtagree'] : '';
                if (count($_POST) == 0) {
                    echo '<form id="ctww" method="post" action="lab9.php">';
                    echo '<table>';
                    echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
                    echo '<tr><td>Last name</td><td>', generate_textbox('txtLastname', $lastname), '</td></tr>';
                    echo '<tr><td>First name</td><td>', generate_textbox('txtFirstname', $firstname), '</td></tr>';
                    echo '<tr><td>Middle name</td><td>', generate_textbox('txtMiddlename', $middlename), '</td></tr>';
                    echo '<tr><td>Email Address</td><td>', generate_textbox('txtEmailadd', $emailaddress), '</td></tr>';
                    echo '<tr><td>Username</td><td>', generate_textbox('txtUN', $username), '</td></tr>';
                    echo '<tr><td>Password</td><td>', generate_password('txtPW', $password), '</td></tr>';
                    echo '<tr><td>Confirm Password</td><td>', generate_password('txtCPW', $confirmpassword), '</td></tr>';
                    echo '<tr><td>Comments</td><td>', generate_textarea('txtcom', $comments), '</td></tr>';
                    echo '<tr><td>Agree</td><td>', generate_checkbox('txtagree', $agree), '</td></tr>';
                    echo '</table>';
                    echo '<br>';
                    echo '<input type="submit" id="ctw2" name="btnRegister" value="Register">&nbsp;';
                    echo '<input type="reset" id="ctw" name="btnReset" value="Reset">&nbsp;';
                    echo '</form>';
                }

                else {
                    echo '<table>';
                    echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
                    echo '<tr><td colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';
                    echo '<tr><td>Last name</td><td>', $lastname, '</td></tr>';
                    echo '<tr><td>First name</td><td>', $firstname, '</td></tr>';
                    echo '<tr><td>Middle name</td><td>', $middlename, '</td></tr>';
                    echo '<tr><td>Email Address</td><td>', $emailaddress, '</td></tr>';
                    echo '<tr><td>Username</td><td>', $username, '</td></tr>';
                    echo '<tr><td>Password</td><td>', $password, '</td></tr>';
                    echo '<tr><td>Confirm Password</td><td>', $confirmpassword, '</td></tr>';
                    echo '<tr><td>Comments</td><td>', $comments, '</td></tr>';
                    echo '<tr><td>Agree</td><td>', $agree, '</td></tr>';
                    echo '</table>';

                }

                ?>
            </div>
        </div>
        <div class="footer">
            <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
        </div>
    </body>
</html>