<!DOCTYPE html>
<!--suppress ALL -->
<html lang="en"> <!-- gekozen taal voor de website is Engels -->
<head>
    <meta charset="UTF-8"> <!-- zorgt dat het alfabet geaccepteerd wordt -->
    <title>Nerdy Gadgets</title> <!-- tab titel -->
    <link rel="icon" type="img/x-icon" href="img/Nerdy_Gadgets_zonder_tekst.ico"> <!-- icon in je tab -->
    <link rel="stylesheet" type="text/css" href="CSS/index.css"> <!-- koppelt de css aan de html code -->
    <link rel="stylesheet" type="text/css" href="CSS/signup.css"> <!-- koppelt de css aan de html code -->
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function add_to_cart() {
            location.href = "shopcart.php";
        }

        document.querySelector('.img__btn').addEventListener('click', function () {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>

</head>
<body>
<section_balk
<br>
<h1>Nerdy Gadgets</h1>
<br>
<div class="from sign-up">
    <form class="signup" method="post">
        <h2>Sign Up</h2>
        <label for="firstname"><b>First name</b></label>
        <input id="firstname" name="firstname" placeholder="Enter First Name" required type="text"
               style="margin-bottom:5px">
        <br>
        <label for="lastname"><b>Last name</b></label>
        <input id="lastname" name="lastname" placeholder="Enter Surname" required type="text" style="margin-bottom:5px">
        <!--<label for="prefix"><b>Prefix</b></label> als je tussenvoegsel appart wilt hebben--!>
        <input id="prefix" name="prefix" placeholder="Enter Prefix" type="text" style="margin-bottom:5px">
        <br>
        <label for="email"><b>Email</b></label>
        <input id="email" name="email" placeholder="Enter Email" required type="text" style="margin-bottom:5px">
        <br>
        <label for="password"><b>Password</b></label>
        <input id="password" name="password" placeholder="Enter Password" required type="password"
               style="margin-bottom:5px">
        <br>
        <button><b>Sign Up</b></button>
        <br>
        <p>By creating an account you agree to our <a style="color:dodgerblue">Terms & Privacy</a>.</p>
    </form>
</div>
<div class="sub-cont">
    <div class="img">
        <div class="img__text m--up">

            <h3>Don't have an account? Please Sign up!<h3>
        </div>
        <div class="img__text m--in">

            <h3>If you already has an account, just sign in.<h3>
        </div>
        <div class="img__btn">
            <span class="m--up">Sign Up</span>
            <span class="m--in">Sign In</span>
        </div>
    </div>
    <div class="from sign-in">
        <form class="signup" method="post">
            <h2>Sign In</h2>
            <label for="email"><b>Email</b></label>
            <input id="email" name="email" placeholder="Enter Email" required type="text" style="margin-bottom:5px">
            <br>
            <label for="password"><b>Password</b></label>
            <input id="password" name="password" placeholder="Enter Password" required type="password"
                   style="margin-bottom:5px">
            <br>
            <button><b>Sign In</b></button>
            <br>
            <p>By creating an account you agree to our <a style="color:dodgerblue">Terms & Privacy</a>.</p>
        </form>
    </div>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $connection = mysqli_connect("localhost", "root", "", "nerdy_gadgets_start", "3306");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $prefix = $_POST['prefix'];
    $lastname = $_POST['lastname'];

    if (!empty($email) && !empty($password) && !empty($firstname) && !empty($lastname)) {
        $sql = "insert into user (email, password, first_name, surname_prefix, surname) 
            values ('$email', '$password', '$firstname', '$prefix', '$lastname')";
        $result = mysqli_query($connection, $sql);
    } else {
        echo "<p>Geen valide invoer gegeven</p>";
    }
// resultaat verwerken
    echo $result;
    mysqli_close($connection);
}
?>
<!-- ----------------------------------------------- footer NIET AANKOMEN -------------------------------------------- -->
<br></br><br></br><br></br><br></br>
<section_footer>
    <link rel="stylesheet" href="../CSS/footer.css">
    <footer class="footer">
        <div class="footcontainer">
            <div class="footrow">
                <div class="footer-col">
                    <h4>links</h4>
                    <ul>
                        <li><a href="index.html">index</a></li>
                        <li><a href="shopcart.html">shoppingcart</a></li>
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
<!-- ----------------------------------------------- footer NIKS ONDER PLAATSEN -------------------------------------------- -->
</html>
