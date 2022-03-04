<!DOCTYPE html>
<html lang="en">
    <?php
        define('NAME', 'KYRISH MAE GUILLEN');
        define('STUDENT NUMBER', '2019-03934-MN-0');
        define('ADDRESS', 'San Lorenzo Ruiz, Taytay, Rizal');
        define('CONTACTNUMBER', '09666536210');
        define('WEBADDRESS', 'www.facebook.com/kyrshmglln');
        define('LABTITLE', 'Laboratory Activity No. 5');
        define('DESCRIPTION', 'Iteration Structures');

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
                echo '<form action="" method="post">';
                echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
                echo '<tr><td align="center"><strong> Magic Square</strong></td></tr>';
                echo '<tr><td>Enter an odd number &nbsp;<input type=text id="ctww" name=number>&nbsp;';
                echo '<input type="submit" id="ctw" value="Generate Magic Square"></td></tr>';
                echo '</table>';
                echo '</form>';
                if (count($_POST) > 0){
                    $number = (int)(isset($_POST['number']) ? $_POST['number'] : 3);
                    print_magicsquare($number);
                }
                function print_magicsquare($number)
                    {
                    if ($number < 1) {
                        $number = 3;
                    }
                    if ($number % 2 == 0) {
                        $number++;
                    }

                    $matrix = [[]];
                    for ($i = 0; $i < $number; $i++) {
                        for ($j = 0; $j < $number; $j++) {
                        $matrix[$i][$j] = 0;
                        }
                    }

                    $matrix[0][floor($number / 2)] = 1;

                    $previousRow = 0;
                    $previousColumn = floor($number / 2);
                    for ($i = 2; $i <= $number * $number; $i++) {
                        $currentRow = $previousRow - 1;
                        $currentColumn = $previousColumn - 1;

                        if ($currentColumn < 0) {
                        $currentColumn = $number - 1;
                        }
                        if ($currentRow < 0) {
                        $currentRow = $number - 1;
                        }

                        if ($matrix[$currentRow][$currentColumn] > 0) {
                        $currentRow = $previousRow + 1;
                        $currentColumn = $previousColumn;
                        }

                        $matrix[$currentRow][$currentColumn] = $i;
                        $previousRow = $currentRow;
                        $previousColumn = $currentColumn;
                    }

                    echo '<br><table border="1" class="table table-bordered">';
                    for ($r = 0, $i = 0; $r < $number; $r++) {
                        echo '<tr>';
                        for ($c = 0; $c < $number; $c++, $i++) {
                        echo '<td style="border: solid black 1px;">' . $matrix[$r][$c] . '</td>';
                        }
                        echo '</tr>';
                    }
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