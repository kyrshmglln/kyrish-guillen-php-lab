<!DOCTYPE html>
<html lang="en">
    <?php
        define('NAME', 'KYRISH MAE GUILLEN');
        define('STUDENT NUMBER', '2019-03934-MN-0');
        define('ADDRESS', 'San Lorenzo Ruiz, Taytay, Rizal');
        define('CONTACTNUMBER', '09666536210');
        define('WEBADDRESS', 'www.facebook.com/kyrshmglln');
        define('LABTITLE', 'Laboratory Activity No. 7');
        define('DESCRIPTION', 'Regular Expression');

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
                $patterns[] = array('String containing "PHP"', 'PHP');
                $patterns[] = array('Starting with "PHP"', '^PHP');
                $patterns[] = array('Ends with "PHP"', 'PHP$');
                $patterns[] = array('String Equal to "PHP"', '^PHP$');
                $patterns[] = array('Word starting with letter "C"', '^C');
                $patterns[] = array('Non-empty lowercase string', '[a-z]');
                $patterns[] = array('Non-empty uppercase string', '[A-Z]');
                $patterns[] = array('Minimum 10 letters Maximum 20 letters', '^[a-zA-Z]{10,20}$');
                $patterns[] = array('Minimum 10 digits Maximum 20 digits', '^[0-9]{10,20}$');
                $patterns[] = array('Minimum 10 character Maximum 20 characters', '^.{10,20}$');
                $patterns[] = array('Valid PHP variable name', '^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$');
                $patterns[] = array('Valid PHP constant name', '^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$');
                $patterns[] = array('Valid decimal (base-10) integer', '^([1-9]\d*|0)$');
                $patterns[] = array('Valid float number', '^[\d]+(|\.[\d]+)$');
                $patterns[] = array('5-letter string', '^[a-zA-Z]{5}$');
                $patterns[] = array('5-digit string', '^[0-9]{5}$');
                $patterns[] = array('5 ascii characters', '^.{5}$');
                $patterns[] = array('5 non-alphanumeric characters', '^[^a-zA-Z0-9]{5}$');
                $patterns[] = array('Passing Grade (1.00 to 3.00)', '[1-3]');
                $patterns[] = array('Sub-domain Name (.edu, ue.edu.,.ccss.ue.edu)', '.edu|.ue.edu|.ccss.ue.edu$');

                echo '<form method="post">';
                $i=1;
                echo '<table width=92% border=1>';
                echo '<tr><td colspan=5 align=center><strong>Regular Expression Test</strong></td></tr>';
                echo '<tr><td>No.</td><td>Description</td><td>String</td><td>RegEx Pattern</td><td>Result</td>';
                
                foreach ($patterns as $pattern_item){
                    $description = $pattern_item[0];
                    $pattern = $pattern_item[1];
                    $value = isset($_POST["field$i"]) ? $_POST["field$i"]: '';
                    if ($pattern == ''){
                        $result = 'Missing pattern';
                        $pattern = '&nbsp;';
                    
                    }
                    else {
                        $pattern = '/'. $pattern . '/';
                        if (preg_match($pattern, $value)){
                            $result = 'Valid';
                        }
                        else 
                        {
                            $result = 'Invalid';
                        }
                    }
                    echo "<tr>";
                    echo "<td>$i.</td><td>$description</td>";
                    echo "<td><input type=text id=ctww name=\"field$i\" value\"$value\"></td>";
                    echo "<td>$pattern</td><td>$result</td>";
                    echo '<tr>';
                    $i++;
                }
                echo '</table><br/>';
                echo '<input type="submit" id="ctw"name="validate" value="Validate Data">&nbsp';
                echo '<input type="reset" id="ctw2" value="Reset">&nbsp';
                echo '</form>';

        ?>
            
            </div>
        </div>
        <div class="footer">
            <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
        </div>
    </body>
</html>