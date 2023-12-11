<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="icon" type="img/x-icon" href="img/Nerdy_Gadgets_zonder_tekst.ico"> <!-- icon in je tab -->
    <link rel="stylesheet" type="text/css" href="CSS/index.css"> <!-- koppelt de css aan de html code -->
    <link rel="stylesheet" type="text/css" href="CSS/signup.css"> <!-- koppelt de css aan de html code -->
</head>
<body>
<section_balk>
    <ul class="balky">

        <li class="nav-item logo">
            <a href="index.html" class="balk_midden">
                <img src="img/Nerdy_Gadgets_zonder_tekst.png" alt="nerdy gadgets logo"
                     style="width:85px;height:86px;"></a>

        </li>
        <li class="balk">
            <div class="dropdown">
                <button onclick="myFunction()" class="balk button"><img src="img/Menu.png"
                                                                        style="height: 40px; width: 40px" alt="menu">
                </button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="about.html">About</a>
                    <a href="contact.html">Contact</a>
                </div>
            </div>
        </li>
        <li class="balk_tekst">
            <L style="left: 125px;"><img src="img/delivery_truck_inverted.png" alt="delivery truck"
                                         style="height: 40px; width:40px;"></L>
            <L> Vóór 23 uur besteld, morgen in huis!</L>
            <L style="left: 510px;"><img src="img/delivery_truck.png" alt="delivery truck"
                                         style="height: 40px; width:40px;"></L>
            <R style="right: 207px;"><img src="img/delivery_truck.png" alt="delivery truck"
                                          style="height: 40px; width:40px;"></R>
            <R> Gratis verzending vanaf €20</R>
            <R style="right: 523px;"><img src="img/delivery_truck_inverted.png" alt="delivery truck"
                                          style="height: 40px; width:40px;"></R>
        </li>

        <div class="nav-items-right"> <!-- Wrap both "Sign Up" and "Shop Cart" in the same div -->
            <li class="nav-item"><a href="shopcart.php" class="balk1"> <img src="img/cart.png" alt="Shopping Cart"
                                                                            style="width:35px;height:35px;"></a></li>
            <li class="nav-item"><a href="signup_kbs.php" class="balk1"> <img src="img/profile.png" alt="Sign In/Up"
                                                                              style="width:30px;height:35px;"></a></li>
        </div>
    </ul>
</section_balk>
<br>
<h1>Nerdy Gadgets</h1>
<br>
<div class="cont">
    <div class="form sign-in">
        <form name="LogIn"class="signup" method="post" action="signup_kbs.php?formname=form1">
            <h2>Welcome</h2>
            <label>
                <span>Email</span>
                <input name="email" type="email" required/>
            </label>
            <label>
                <span>Password</span>
                <input name="wachtwoord" type="password" required/>
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="button" class="submit button2">Sign In</button>
        </form>
    </div>
    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">

                <h3>Don't have an account? Please Sign up!</h3>
            </div>
            <div class="img__text m--in">

                <h3>If you already have an account, just sign in.</h3>
            </div>
            <div class="img__btn">
                <span class="m--up">Sign Up</span>
                <span class="m--in">Sign In</span>
            </div>
        </div>
        <div class="form sign-up" method="post">
            <form name="signup" action="signup_kbs.php?formname=form2">
                <h2 class="blue">Create your Account</h2>
                <label>
                    <span>First Name</span>
                    <input name="voornaam" type="text" required/>
                </label>
                <label>
                    <span>Prefix</span>
                    <input name="tussenvoegsel" type="text" />
                </label>
                <label>
                    <span>Surname</span>
                    <input name="achternaam" type="text" required/>
                </label>
                <label>
                    <span>Email</span>
                    <input name="email2" type="email" required/>
                </label>
                <label>
                    <span>Password</span>
                    <input name="wachtwoord2" type="password" required/>
                </label>
                <button type="button" class="submit button2">Sign Up</button>
            </form>
        </div>
    </div>
</div>
<script>
    document.querySelector('.img__btn').addEventListener('click', function() {
        document.querySelector('.cont').classList.toggle('s--signup');
    });
</script>
<?php
error_reporting(0);
$connection = mysqli_connect("localhost","root","","nerdy_gadgets_start", "3306");
$voornaam= $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$wachtwoord = $_POST['wachtwoord'];
$wachtwoord2 = $_POST['wachtwoord2'];
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_GET['formname'] == 'form2'){
        if (!empty($voornaam) && !empty($tussenvoegsel) && !empty($achternaam) && !empty($email2) && !empty($wachtwoord)) {
            $signup = "insert user (first_name, surname_prefix, surname, email, password) 
            values('$voornaam','$tussenvoegsel','$achternaam',$email2, $wachtwoord2)";
        } elseif (!empty($voornaam) && empty($tussenvoegsel) && !empty($achternaam) && !empty($email2) && !empty($wachtwoord2)) {
            $signup = "insert user (first_name, surname, email, password) 
            values('$voornaam','$achternaam',$email2, $wachtwoord2)";
        } else {
            echo "<p>No Valid Input</p>";
        }
        $result = mysqli_query($connection,$signup);
        echo $result;
    }
    elseif($_GET['formname'] == 'from1'){
        if(!empty($email) && !empty($wachtwoord)){
            $findpassword =  "select password from user where email = '$email'";
            $foundpassword = mysqli_query($connection, $findpassword);
            echo $foundpassword;
            if($wachtwoord == $foundpassword){
                $findid = " select id from user where email = '$email' AND password = '$wachtwoord' ";
                $foundid = mysqli_query($connection,$findid);
                echo $foundid;
                $_SESSION["id"] = "$foundid";
            }
        }

    }
}
?>
<section_footer>
    <link rel="stylesheet" href="../CSS/footer.css">
    <footer class="footer">
        <div class="footcontainer">
            <div class="footrow">
                <div class="footer-col">
                    <h4>links</h4>
                    <ul>
                        <li><a href="index.html">index</a></li>
                        <li><a href="shopcart.php">shoppingcart</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="about.html">about</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>shoppen</h4>
                    <ul>
                        <li><a href="#">telefoon</a></li>
                        <li><a href="#">winkel</a></li>
                        <li><a href="#">laptop</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>mooi</h4>
                    <ul>
                        <li><a href="#">wat kan hier</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>betalingsmethode</h4>
                    <div class="bm">
                        <img src="img/footer/paypal_footer.png" alt="paypal logo" style="width:30px; height:30px">
                        <img src="img/footer/OIP.png" alt="ideal logo" style="width: 30px; height:30px">

                    </div>
                </div>
            </div>
        </div>

    </footer>
</section_footer>
</body>
</html>