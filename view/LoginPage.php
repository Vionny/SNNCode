<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server n Network</title>
    <link rel="stylesheet" href="../style/LoginStyle.css"> 
</head>
    <!-- Notes !
        Admin
        ------------------- 
        Name= admin
        Email = admin@admin.com
        Pass = admin123

    -->
    <body ng-app="mainModule" ng-controller="mainController">
        <div id="login-page" class="row">
            <div class="col s12 z-depth-6 card-panel card">
            <form action="../controller/LoginController.php" method="post">
                <div class="row">
                </div>
                <div class="row">
                <div class="input-field col s12">
                    <div style="margin-top:2px;"><img class="icons" src="https://cdn-icons-png.flaticon.com/512/561/561127.png"></img></div>
                    <input class="validate" id="email" name="email" type="email" placeholder="Email">
                </div>
                </div>
                <div class="row">
                <div class="input-field col s12">
                    <div style="margin-top:2px;">
                    <img class="icons" src="https://icons.veryicon.com/png/o/miscellaneous/dh_report/login-page-password.png"></img>
                    </div>
                    <input id="password" name="password" type="password" placeholder="Password">
                </div>
                </div>
                <div class="row">          
                <div class="input-field col s12 m12 l12  login-text">
                    <input type="checkbox" id="remember-me" />
                    <label for="remember-me">Remember me</label>
                </div>
                </div>
                <p class="row" style="color:red;">
                <?php   
                    if(isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                ?></p>
                <div class="row">
                <div class="input-field col s12">
                    <button type="submit" class="btn waves-effect waves-light col s12">Submit</button>
                </div>
                </div>
                
                <div class="row">
                    <div class="col s6 m6 l6">
                        <p class="center medium-small"><a href="#">Register Now!</a></p>
                    </div>
                    <div class="col s6 m6 l6">
                        <p class="center right-align medium-small"><a href="#">Forgot password?</a></p>
                    </div>          
                </div>

            </form>
            </div>
        </div> 
    </body>
</html>