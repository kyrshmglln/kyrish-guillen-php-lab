<!DOCTYPE html>
<?php
    session_start();
    if (isset($_POST['txtUN'])){
        if (isset($_POST['rememberme'])){
            setcookie('txtUN', $_POST['txtUN'], time() + 60 * 60);
        }
        else{
            setcookie('txtUN','', time() - 60 * 60);
        }
    }
?>
<html lang="en">
    <?php
        define('NAME', 'KYRISH MAE GUILLEN');
        define('STUDENT NUMBER', '2019-03934-MN-0');
        define('ADDRESS', 'San Lorenzo Ruiz, Taytay, Rizal');
        define('CONTACTNUMBER', '09666536210');
        define('WEBADDRESS', 'www.facebook.com/kyrshmglln');
        define('LABTITLE', 'Laboratory Activity No. 12');
        define('DESCRIPTION', 'Managing State Information Using Cookies – Login Page with Cookies');

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
                echo '<form method=post id=ctww>';
                if (isset($_POST['login']) > 0){
                    process_form();
                }
                elseif (isset($_POST['logout'])){
                    process_logout();
                }
                elseif (isset($_SESSION['txtUN'])){
                    generate_welcomepage();
                }
                else{
                    generate_loginform();
                }
                echo '</form>';
                
                function generate_loginform(){
                    if(isset($_COOKIE['txtUN'])){
                        $username = $_COOKIE['txtUN'];
                        
                    }
                    else{
                        $username = '';
                    }
                    function generate_textbox($name, $value) {
                        return '<input type="text" id="t1" name="' . $name . '" value="' . $value . '">';
                    }

                    function generate_password($name, $value) {
                        return '<input type="password" id="t2" name="' . $name . '" value="' . $value . '">';
                    }
                    function generate_checkbox($name) {
                        return '<input type="checkbox"  name="' . $name . '">';
                    }

                    $password = isset($_SESSION['txtPW']) ? $_SESSION['txtPW'] : '';
                    $agree = isset($_POST['rememberme']) ? $_POST['rememberme'] : '';
                    echo '<table width=92%>';
                    echo '<tr><td> Enter Username: </td><td>', generate_textbox('txtUN', $username), '</td></tr>';
                    echo '<tr><td>Enter Password: </td><td>', generate_password('txtPW', $password), '</td></tr>';
                    echo '</table><br>';
                    echo '<input type="checkbox" name="rememberme" checked="checked"> Remember me on this computer';
                    echo '<br><br>';
                    echo '<input type="submit" id="ctw2" name="login" value="Login">&nbsp;';
                }

                function process_form(){
                $username = isset($_POST['txtUN']) ? $_POST['txtUN'] : '';
                $password = isset($_POST['txtPW']) ? $_POST['txtPW'] : '';

                    if ((trim($username) != '') && ($password == '12345')){
                        $_SESSION['txtUN'] = $username;
                        $_SESSION['txtPW'] = '12345';
                        echo generate_welcomepage();
                    }
                    else{
                        echo generate_loginerror();
                        echo generate_loginform();
                    }
                }

                function generate_loginerror(){
                    echo '<strong> Login failed </strong>';
                }
                function process_logout(){
                    if (isset($_SESSION['txtUN'])){
                        echo '<strong> Logout Successful </strong>';
                    
                        $_SESSION = array();
                        session_destroy();
                    }
                        echo generate_loginform();
                }
                function generate_welcomepage(){
                    $username = $_SESSION['txtUN'];
                    echo '<p id="ct2"> Welcome back, &nbsp;',  $username, '</p>';
                    echo '<p id="ct"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Pharetra pharetra massa massa ultricies mi quis hendrerit. Eleifend 
                    donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. 
                    Posuere urna nec tincidunt praesent semper. Massa sed elementum tempus 
                    egestas sed sed. Odio ut enim blandit volutpat maecenas. Maecenas pharetra 
                    convallis posuere morbi. Nunc mattis enim ut tellus elementum sagittis vitae. 
                    Eu sem integer vitae justo eget magna fermentum iaculis eu. Pharetra diam sit amet 
                    nisl suscipit adipiscing. Elit pellentesque habitant morbi tristique senectus et netus. 
                    Eu nisl nunc mi ipsum. Commodo viverra maecenas accumsan lacus vel. </p>';
                    echo '<input type="submit" id= "ctw" name="logout" value="Logout">';
                }
                ?>
            
            </div>
        </div>
        <div class="footer">
            <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
        </div>
    </body>
</html>