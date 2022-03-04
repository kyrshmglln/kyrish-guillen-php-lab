<!DOCTYPE html>
<html lang="en">
    <?php
        define('NAME', 'KYRISH MAE GUILLEN');
        define('STUDENT NUMBER', '2019-03934-MN-0');
        define('ADDRESS', 'San Lorenzo Ruiz, Taytay, Rizal');
        define('CONTACTNUMBER', '09666536210');
        define('WEBADDRESS', 'www.facebook.com/kyrshmglln');
        define('LABTITLE', 'Laboratory Activity No. 3');
        define('DESCRIPTION', 'Working With Data Types and Operators');

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
                    echo '<table cellpadding=2 width="100%" height="100%" border=1 style="border-collapse: collapse;">';
                    echo '<tr><td>1a. ', $myinteger, ' ~ ', var_dump($myinteger), '</td></tr>';
                    echo '<tr><td>1b. ', $myfloat, ' ~ ', var_dump($myfloat), '</td></tr>';
                    echo '<tr><td>1c. ', $mystring, ' ~ ', var_dump($mystring), '</td></tr>';
                    echo '<tr><td>1d. ', $myboolean, ' ~ ', var_dump($myboolean), '</td></tr>';
                    echo '<tr><td>1e. ', $mynull, ' ~ ', var_dump($mynull), '</td></tr>';
                    echo '<tr><td>1f. ', $myarray[2], ' ~ ', var_dump($myarray), '</td></tr>';

                    echo '<tr><td>', ' ', '</td></tr>';
                    echo '<tr><td>2a. ', $myinteger, ' + 10', ' = ', var_dump($myinteger + 10), '</td></tr>';
                    echo '<tr><td>2b. ', $myinteger, ' - 5', ' = ', var_dump($myinteger - 5), '</td></tr>';
                    echo '<tr><td>2c. ', $myinteger, ' * 2', ' = ', var_dump($myinteger * 2), '</td></tr>';
                    echo '<tr><td>2d. ', $myinteger, ' / 3', ' = ', var_dump($myinteger / 3), '</td></tr>';
                    echo '<tr><td>2e. ', $myboolean, ' + 1', ' = ', var_dump($myboolean + 1), '</td></tr>';
                    echo '<tr><td>2f. ', $mystring, ' * 2', ' = ', var_dump($mystring * 2), '</td></tr>';
                    
                    echo '<tr><td>', ' ', '</td></tr>';
                    echo '<tr><td>3a. ', $myinteger,' & 8', ' = ', var_dump($myinteger & 8), '</td></tr>';
                    echo '<tr><td>3b. ', $myinteger,' | 8', ' = ', var_dump($myinteger | 8), '</td></tr>';
                    echo '<tr><td>3c. ', $myinteger,' << 1', ' = ', var_dump($myinteger << 1), '</td></tr>';
                    echo '<tr><td>3d. ', $myinteger,' >> 1', ' = ', var_dump($myinteger >> 1), '</td></tr>';

                    echo '<tr><td>', ' ', '</td></tr>';
                    echo '<tr><td>4a. ', $myinteger,' == 10', ' is equal to ', var_dump($myinteger == 10), '</td></tr>';
                    echo '<tr><td>4a. ', $myinteger,' > 10', ' is equal to ', var_dump($myinteger > 10), '</td></tr>';
                    echo '<tr><td>4a. ', $myinteger,' >= 10', ' is equal to ', var_dump($myinteger >= 10), '</td></tr>';
                    echo '<tr><td>4a. ', $myinteger,' < 20', ' is equal to ', var_dump($myinteger < 20), '</td></tr>';
                    echo '<tr><td>4a. ', $myinteger,' <= 20', ' is equal to ', var_dump($myinteger <= 20), '</td></tr>';
                    echo '<tr><td>4a. ', $myinteger,' == ', $mystring, ' is equal to ', var_dump($myinteger == $mystring), '</td></tr>';
                    echo '<tr><td>4a. ', $myinteger,' === ', $mystring, ' is equal to ', var_dump($myinteger === $mystring), '</td></tr>';

                    echo '<tr><td>', ' ', '</td></tr>';
                    echo '<tr><td>5a. ', $myinteger,' >= 10 and ', $myinteger, ' <= 20', ' is equal to ', var_dump($myinteger >= 10 & $myinteger <= 10), '</td></tr>';
                    echo '<tr><td>5b. ', $myinteger,' == 10 or ', $myinteger, ' == 20', ' is equal to ', var_dump($myinteger == 10 | $myinteger == 20), '</td></tr>';
                    echo '<tr><td>5c. ', $myinteger,' == 10 xor ', $myinteger, ' == 20', ' is equal to ', var_dump($myinteger == 10 xor $myinteger == 20), '</td></tr>';

                    echo '</table>';
                ?>
            </div>
        </div>
        <div class="footer">
            <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
        </div>
    </body>
</html>