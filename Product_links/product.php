<!DOCTYPE html>
<html lang="en"> <!-- gekozen taal voor de website is Engels -->

<head>
    <meta charset="UTF-8"> <!-- zorgt dat het alfabet geaccepteerd wordt -->
    <title>Nerdy Gadgets</title> <!-- tab titel -->
    <link rel="icon" type="img/x-icon" href="../img/Nerdy_Gadgets_zonder_tekst.ico"> <!-- icon in je tab -->
    <link rel="stylesheet" type="text/css" href="../CSS/website_format.css"><!-- koppelt de css aan de html code -->

    <!-- ------------------------------------------------LET OP--------------------------------------- -->
    <link rel="stylesheet" type="text/css" href="../CSS/product.css"><!-- Hier moet nog wat ingevuld worden -->
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
            <a href="../index.html" class="balk_midden">
                <img src="../img/Nerdy_Gadgets_zonder_tekst.png" alt="nerdy gadgets logo"
                     style="width:85px;height:86px;"></a>

        </li>
        <li class="balk">
            <div class="dropdown">
                <button onclick="myFunction()" class="balk button" ><img src="../img/Menu.png" style="height: 40px; width: 40px" alt="menu"></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="../about.html">About</a>
                    <a href="../contact.html">Contact</a>
                </div>
            </div>
        </li>
        <li class="balk_tekst">
            <L style="left: 125px;"> <img src="../img/delivery_truck_inverted.png" alt="delivery truck" style="height: 40px; width:40px;"></L>
            <L> Vóór 23 uur besteld, morgen in huis!</L>
            <L style="left: 510px;"> <img src="../img/delivery_truck.png" alt="delivery truck" style="height: 40px; width:40px;"></L>
            <R style="right: 207px;"> <img src="../img/delivery_truck.png" alt="delivery truck" style="height: 40px; width:40px;"></R>
            <R> Gratis verzending vanaf €20</R>
            <R style="right: 523px;"> <img src="../img/delivery_truck_inverted.png" alt="delivery truck" style="height: 40px; width:40px;"></R>
        </li>

        <div class="nav-items-right"> <!-- Wrap both "Sign Up" and "Shop Cart" in the same div -->
            <li class="nav-item"><a href="../shopcart.html" class="balk1"> <img src="../img/cart.png" alt="Shopping Cart"
                                                                                style="width:35px;height:35px;"></a></li>
            <li class="nav-item"><a href="../signup_kbs.html" class="balk1"> <img src="../img/profile.png" alt="Sign In/Up"
                                                                                  style="width:30px;height:35px;"></a></li>
        </div>
    </ul>
</section_balk>


<br><br>
<?php
$id=  $_GET['id'];

$connection = mysqli_connect("localhost","root", "", "nerdy_gadgets_start", "3306");
$stmt = mysqli_prepare($connection, "select name, description, price, image from product where id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_assoc($result)) {
    echo '<h1 class="product-title">' . $row["name"] . '</h1>';
    echo '<h2 class="product-price"> Prijs: €' . $row["price"] . '</h2><br>';
    echo '<img src="../img/producten/' . $row["image"] . '.jpg" class="product-img">';
    echo '<h3 class="product-text">' . $row["description"] . '</h3>';


}
?>

<!-- ----------------------------------------------- footer NIET AANKOMEN -------------------------------------------- -->
<br><br><br><br>
<section_footer>
    <link rel="stylesheet" href="../CSS/footer.css">
    <footer class="footer">
        <div class="footcontainer">
            <div class="footrow">
                <div class="footer-col">
                    <h4>links</h4>
                    <ul>
                        <li><a href="../index.html">index</a></li>
                        <li><a href="../shopcart.html">shoppingcart</a></li>
                        <li><a href="../contact.html">contact</a></li>
                        <li><a href="../signup_kbs.html">sign up</a></li>
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
                    <h4>producten</h4>
                    <ul>
                        <li><a href="productoverzichtpagina.php">assortiment</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>betalingsmethode</h4>
                    <div class="bm">
                        <img src="../img/footer/paypal_footer.png" alt="paypal logo" style="width:30px; height:30px">
                        <img src="../img/footer/OIP.png" alt="ideal logo" style="width: 30px; height:30px">

                    </div>
                </div>
            </div>
        </div>

    </footer>
</section_footer>
</body>
<!-- ----------------------------------------------- footer NIKS ONDER PLAATSEN -------------------------------------------- -->
</html>
