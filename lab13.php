<!DOCTYPE html>
<html lang="en">
    <?php
        define('NAME', 'KYRISH MAE GUILLEN');
        define('STUDENT NUMBER', '2019-03934-MN-0');
        define('ADDRESS', 'San Lorenzo Ruiz, Taytay, Rizal');
        define('CONTACTNUMBER', '09666536210');
        define('WEBADDRESS', 'www.facebook.com/kyrshmglln');
        define('LABTITLE', 'Laboratory Activity No. 13');
        define('DESCRIPTION', 'Sending Email');

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

            function generate_textarea($name, $value) {
                return '<textarea id="ctw3" name="' . $name . '">' . $value . '</textarea>';
            }
            ?>

                <?php

                $from   = isset($_POST['txtFrom']) ? $_POST['txtFrom'] : '';
                $to  = isset($_POST['txtTo']) ? $_POST['txtTo'] : '';
                $subj = isset($_POST['txtSubject']) ? $_POST['txtSubject'] : '';
                $msg = isset($_POST['txtMessage']) ? $_POST['txtMessage'] : '';

                ini_set('sendemail_from', $from);
                ini_set('smtp_port', 25);
                ini_set('SMTP', '10.10.10.22');

                echo '<form id="ctww" method="post"><br>';
                echo '<strong>Lab 13 - Sending Email</strong><br>';
                echo '<table>';
                echo '<tr><td>From</td><td>', generate_textbox('txtFrom', $from), '</td></tr>';
                echo '<tr><td>To</td><td>', generate_textbox('txtTo', $to), '</td></tr>';
                echo '<tr><td>Subj</td><td>', generate_textbox('txtSubject', $subj), '</td></tr>';
                echo '<tr><td>Message</td><td>', generate_textarea('txtMessage', $msg), '</td></tr>';
                echo '</table><br>';
                echo '<input type="submit" id="ctw2" name="btnSubmit" value="Submit">&nbsp;';
                echo '<br><br>';

                if (count($_POST) > 0) {
                    if (mail($to, $subj, $msg)){
                        echo '<br>';
                        echo '<strong>Message sent! </strong>';
                        echo '<br/>';
                    }
                    else {
                        echo '<br>';
                        echo '<strong>Message sending failed! </strong>';
                        echo '<br/>';
                    }
                }
                echo '</form>';

                ?>
            
            </div>
        </div>
        <div class="footer">
            <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
        </div>
    </body>
</html>