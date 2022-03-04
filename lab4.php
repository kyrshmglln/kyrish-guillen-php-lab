<!DOCTYPE html>
<html lang="en">
    <?php
        define('NAME', 'KYRISH MAE GUILLEN');
        define('STUDENT NUMBER', '2019-03934-MN-0');
        define('ADDRESS', 'San Lorenzo Ruiz, Taytay, Rizal');
        define('CONTACTNUMBER', '09666536210');
        define('WEBADDRESS', 'www.facebook.com/kyrshmglln');
        define('LABTITLE', 'Laboratory Activity No. 4');
        define('DESCRIPTION', 'Functions and Control Structures – Number to Words');

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
                $number = (int)(isset($_POST['number']) ? $_POST['number'] : 0);
                if (($number < 1) or ($number > 999)) {
                    if (count($_POST) > 0) {
                        $words = 'Sorry, I can process 1 to 999 only!';
                    }
                    else {
                        $words = '&nbsp;';
                    }
                }
                else {
                    $words = $number . ' in words is ' . NumberToWords($number);
                }

                echo '<form action="" method="post">';
                echo '<table width=100% cellpadding=4 border=1 style="border-collapse:collapse">';
                echo '<tr><td align="center"><strong>Number to Words</strong></td></tr>';
                echo '<tr><td align="center">Enter a number (1-999)&nbsp;<input type=text name=number>&nbsp;';
                echo '<input type="submit" value="Convert to words"></td></tr>';
                echo '<tr><td align="center"><strong>', $words, '</strong></td></tr>';
                echo '</table>';
                echo '</form>';

                function NumberToWords($number) {
                    $number = str_replace(array(',', ' '), '' , trim($number));
                    $number = (int) $number;
                    $words = array();
                    $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen');
                    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
                    $number_length = strlen($number);
                    $levels = (int) (($number_length + 2) / 3);
                    $max_length = $levels * 3;
                    $number = substr('00' . $number, -$max_length);
                    $number_levels = str_split($number, 3);
                    
                    for ($i = 0; $i < count($number_levels); $i++) {
                        $levels--;
                        $hundreds = (int) ($number_levels[$i] / 100);
                        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
                        $tens = (int) ($number_levels[$i] % 100);
                        $singles = '';
                        if ( $tens < 20 ) {
                            $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
                        } else {
                            $tens = (int)($tens / 10);
                            $tens = ' ' . $list2[$tens] . ' ';
                            $singles = (int) ($number_levels[$i] % 10);
                            $singles = ' ' . $list1[$singles] . ' ';
                        }
                        $words[] = $hundreds . $tens . $singles;
                    }

                    $commas = count($words);
                    if ($commas > 1) {
                        $commas = $commas - 1;
                    }
                    return implode(' ', $words);
                }
            ?>
            </div>
        </div>
        <div class="footer">
            <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
        </div>
    </body>
</html>