<!DOCTYPE html>
<html lang="en"> <!-- gekozen taal voor de website is Engels -->

<head>
    <meta charset="UTF-8"> <!-- zorgt dat het alfabet geaccepteerd wordt -->
    <title>Nerdy Gadgets</title> <!-- tab titel -->
    <link rel="icon" type="img/x-icon" href="img/Nerdy_Gadgets_zonder_tekst.ico"> <!-- icon in je tab -->
    <link rel="stylesheet" type="text/css" href="CSS/website_format.css"><!-- koppelt de css aan de html code -->

    <!-- ------------------------------------------------LET OP--------------------------------------- -->
    <link rel="stylesheet" type="text/css" href="CSS/productoverzichtpagina.css"><!-- Hier moet nog wat ingevuld worden -->
    <!-- ------------------------------------------------LET OP--------------------------------------- -->

    <script>
        /* When the user clicks on the button,
           toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
    </script>
</head>

<body>
<section_balk>
    <ul class="balky">

        <li class="nav-item logo">
            <a href="/index.html" class="balk_midden">
                <img src="img/Nerdy_Gadgets_zonder_tekst.png" alt="nerdy gadgets logo"
                     style="width:85px;height:86px;"></a>

        </li>
        <li class="balk">
            <div class="dropdown">
                <button onclick="myFunction()" class="balk button" ><img src="img/Menu.png" style="height: 40px; width: 40px" alt="menu"></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="about.html">About</a>
                    <a href="contact.html">Contact</a>
                </div>
            </div>
        </li>
        <li class="balk_tekst">
            <L style="left: 125px;"> <img src="img/delivery_truck_inverted.png" alt="delivery truck" style="height: 40px; width:40px;"></L>
            <L> Vóór 23 uur besteld, morgen in huis!</L>
            <L style="left: 510px;"> <img src="img/delivery_truck.png" alt="delivery truck" style="height: 40px; width:40px;"></L>
            <R style="right: 207px;"> <img src="img/delivery_truck.png" alt="delivery truck" style="height: 40px; width:40px;"></R>
            <R> Gratis verzending vanaf €20</R>
            <R style="right: 523px;"> <img src="img/delivery_truck_inverted.png" alt="delivery truck" style="height: 40px; width:40px;"></R>
        </li>

        <div class="nav-items-right"> <!-- Wrap both "Sign Up" and "Shop Cart" in the same div -->
            <li class="nav-item"><a href="shopcart.php" class="balk1"> <img src="img/cart.png" alt="Shopping Cart"
                                                                             style="width:35px;height:35px;"></a></li>
            <li class="nav-item"><a href="signup_kbs.php" class="balk1"> <img src="img/profile.png" alt="Sign In/Up"
                                                                               style="width:30px;height:35px;"></a></li>
        </div>
    </ul>
</section_balk>
<h1>Nerdy Gadget</h1>
<h1 style="color: white; font-size: 30px ">Producten</h1>
<br>
<style>
    html, body {
        height: 50%;
    }
    input.largerCheckbox {
        width: 300px;
        height: 150px;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        color: #dddddd;
    }
    table {
        border: 5px solid #dddddd;
        border-radius: 10px;
        margin-top: auto;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }

</style>
<table class="center">
<tr>
    <th>Product</th>
    <th>price</th>
</tr>
<?php
$a = "order by price desc";
$connection = mysqli_connect("localhost","root", "", "nerdy_gadgets_start", "3306");
$sql = "select image, name, price from product $a";
$result = mysqli_query($connection, $sql);
if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
echo '<tr>';
    echo '<td>'. $row['image'] .'</td>';
    echo '<td>'. $row['name'] .'</td>';
    echo '<td>'. $row['price'] .'</td>';
    echo '</tr>';

}

}

?>
</table>
<!-------------------------------------- footer NIET AANKOMEN -------------------------------------------- -->
        <link rel="stylesheet" href="CSS/footer.css">
        <footer>
            AAAAAAAAAAAAAAAAAAAAAAAAAA
        </footer>
</body>
<!-- ----------------------------------------------- footer NIKS ONDER PLAATSEN -------------------------------------------- -->

<section_footer>
    <link rel="stylesheet" href="CSS/footer.css">
    <footer class="footer">
        <div class="footcontainer">
            <div class="footrow">
                <div class="footer-col">
                    <h4>links</h4>
                    <ul>
                        <li><a href="index.html">index</a></li>
                        <li><a href="shopcart.html">shoppingcart</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="signup_kbs.html">sign up</a></li>
                        <li><a href="about.html">about</a> </li>
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
-->
</html>
