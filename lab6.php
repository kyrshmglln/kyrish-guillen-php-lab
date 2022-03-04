<!DOCTYPE html>
<html lang="en">
    <?php
        define('NAME', 'KYRISH MAE GUILLEN');
        define('STUDENT NUMBER', '2019-03934-MN-0');
        define('ADDRESS', 'San Lorenzo Ruiz, Taytay, Rizal');
        define('CONTACTNUMBER', '09666536210');
        define('WEBADDRESS', 'www.facebook.com/kyrshmglln');
        define('LABTITLE', 'Laboratory Activity No. 6');
        define('DESCRIPTION', 'String Functions in PHP');

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
                $string = isset($_POST['string']) ? $_POST['string']:'';
                echo '<form method=post action="">';
                echo '<h2> String Functions in PHP</h2>';
                $pftt = 'Enter the text, an online guide to html form <input> tag (with one leading & trailing space) to test.';
                $pft = htmlentities($pftt);
                echo '<p>' ,$pft, '<p>';
                echo '<input type="text" autocomplete="off"name="string" id="ctww" value="',$string,'" size=100><br/><br/>';
                echo '<input type="submit" id="ctwv" value="Apply Functions">&nbsp;';
                echo '<input type="reset" id="ctw" value="Reset"> </br>';
                echo '</form>';
                $dot = htmlentities($string);
                $bot = trim($dot);
                echo '<table width="92%" border=1 style="border-collapse: collapse;">';
                echo  '<tr> <td> <strong> No. </strong></td><td><strong> Description</strong></td>';
                echo '<td> <strong> Output </strong> </td>';
                echo  '<tr> <td> 1. </td><td> Original value of $string </td>';
                echo '<td>*', $dot, '*</td>';
                echo  '<tr> <td> 2. </td><td> Number of characters </td>';
                echo '<td>*', strlen($string), '*</td>';
                echo  '<tr> <td> 3. </td><td> Number of words </td>';
                echo '<td>*', str_word_count($string), '*</td>';
                echo  '<tr> <td> 4. </td><td> First character to uppercase </td>';
                echo '<td>*', ucfirst($dot), '*</td>';
                echo  '<tr> <td> 5. </td><td> First character of each word to uppercase </td>';
                echo '<td>*', ucwords($dot), '*</td>';
                echo  '<tr> <td> 6. </td><td> To lowercase </td>';
                echo '<td>*', strtolower($dot), '*</td>';
                echo  '<tr> <td> 7. </td><td> To uppercase </td>';
                echo '<td>*', strtoupper($dot), '*</td>';
                echo  '<tr> <td> 8. </td><td> Without leading spaces</td>';
                echo '<td>*', ltrim($dot), '*</td>';
                echo  '<tr> <td> 9. </td><td> Without trailing spaces </td>';
                echo '<td>*', rtrim($dot), '*</td>';
                echo  '<tr> <td> 10. </td><td> Without leading and trailing spaces </td>';
                echo '<td>*', trim($dot), '*</td>';
                echo  '<tr> <td> 11. </td><td> MD5 value of $string </td>';
                echo '<td>*', md5($string), '*</td>';
                echo  '<tr> <td> 12. </td><td> Base64 value of $string </td>';
                echo '<td>*', base64_encode($dot), '*</td>';
                echo  '<tr> <td> 13. </td><td> First 16 characters </td>';
                echo '<td>*', substr($dot, 0, -32), '*</td>';
                echo  '<tr> <td> 14. </td><td> Last 4 characters </td>';
                echo '<td>*', substr($dot, 44), '*</td>';
                echo  '<tr> <td> 15. </td><td> 4 characters starting from the 20th Position </td>';
                echo '<td>*', substr($dot, 20, -24), '*</td>';
                echo  '<tr> <td> 16. </td><td> Position of the word "guide" </td>';
                echo '<td>', var_dump(strcspn($dot,"g")), '</td>';
                echo  '<tr> <td> 17. </td><td> Position of the word "UE" </td>';
                echo '<td>', var_dump($dot == 'UE'), '</td>';
                echo  '<tr> <td> 18. </td><td> "HTML" word in uppercase </td>';
                echo '<td>*', str_replace("html", "HTML", $dot), '*</td>';
                echo  '<tr> <td> 19. </td><td> "< INPUT >" word in uppercase </td>';
                echo '<td>*', str_replace("input", "INPUT", $dot), '*</td>';
                echo  '<tr> <td> 20. </td><td> Strings converted to array </td>';
                $delimiter = ' ';
                $words = explode($delimiter, $bot);
                foreach ($words as $word) {
                    echo '<tr> <td> <td></td>','<td>*', $word, '*</td> </tr>';
                    }
                echo '</table>';
                ?>
            </div>
        </div>
        <div class="footer">
            <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
        </div>
    </body>
</html>