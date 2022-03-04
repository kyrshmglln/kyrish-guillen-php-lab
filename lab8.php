<!DOCTYPE html>
<html lang="en">
    <?php
        define('NAME', 'KYRISH MAE GUILLEN');
        define('STUDENT NUMBER', '2019-03934-MN-0');
        define('ADDRESS', 'San Lorenzo Ruiz, Taytay, Rizal');
        define('CONTACTNUMBER', '09666536210');
        define('WEBADDRESS', 'www.facebook.com/kyrshmglln');
        define('LABTITLE', 'Laboratory Activity No. 8');
        define('DESCRIPTION', 'Array Manipulations (Word Counter)');

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
                $text = (isset($_POST['text'])) ? $_POST['text'] : '';
                echo '<form method="post">';
                echo 'Enter text:<br/>';
                echo '<textarea name="text" id=ctww style="width:500px">';
                echo $text;
                echo '</textarea><br/>';
                echo '<br>';
                echo '<input type=submit id=ctw2 value="Process">&nbsp;';
                echo '<input type=reset id=ctw>&nbsp;';
                echo '</form>';
                $text = preg_replace('[^a-zA-Z0-9]', '',trim($text));

                $colors[0] ='#fccfa6';
                $colors[1] = '#fdb3a5';
                $colors[2] = '#fe97a4';
                $colors[3] = '#fe7ba3';
                $colors[4] = '#ff5fa2';


                if ($text <> ''){
                    $text = strtolower($text);
                    $allwords = explode(' ', $text);
                    $uniquewordlist = array_unique($allwords);
                    sort($uniquewordlist);

                    if ($uniquewordlist == ''){
                        $deleteditem = array_shift($uniquewordlist);
                    }

                    foreach ($uniquewordlist as $word){
                        $counter[$word] = 0;

                    $totalwords = 0;
                    }
                    foreach ($allwords as $word){
                        if ($word != ''){
                            $counter[$word]++;
                            $totalwords++;
                        }
                    }

                    echo '<table border=1 style="width:500px">';
                    echo '<tr><td colspan=4 align=center><strong> Array Manipulation - Word Counter</strong></td><tr/>';
                    echo '<tr><td> No. </td><td> Word</td><td> Frequency</td><td> Percent</td></tr>';
                    $i=1;
                    foreach ($uniquewordlist as $word){
                        $color = current($colors);
            
                        $length = number_format($counter[$word] / $totalwords * 100.00, 2);
                        echo '<tr>';
                        echo '<td>', $i, '.</td>';
                        echo '<td>', $word, '</td>';
                        echo '<td>', $counter[$word], '</td>';
                        echo '<td style="background:', $color,'">', $length, '%</td>';
                        echo '</tr>';
                        
                        next($colors);
            
                        if(current($colors) == false){
                            reset($colors);
                        }
                        $i++;
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