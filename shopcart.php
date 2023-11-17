<!DOCTYPE html>
<html lang="en"> <!-- gekozen taal voor de website is Engels -->
<head>
    <meta charset="UTF-8"> <!-- zorgt dat het alfabet geaccepteerd wordt -->
    <title>Nerdy Gadgets</title> <!-- tab titel -->
    <link rel="icon" type="img/x-icon" href="img/Nerdy_Gadgets_zonder_tekst.ico"> <!-- icon in je tab -->
    <link rel="stylesheet" type="text/css" href="CSS/index.css"> <!-- koppelt de css aan de html code -->
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function add_to_cart() {
            location.href="shopcart.html";
        }
    </script>

</head>
<body>
<!-- een lijst aangemaakt met een tag genaamd balky-->
<section_balk>
    <ul class="balky">

        <li class="nav-item logo">
            <a href="index.html" class="balk_midden">
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
            <li class="nav-item"><a href="shopcart.html" class="balk1"> <img src="img/cart.png" alt="Shopping Cart"
                                                                             style="width:35px;height:35px;"></a></li>
            <li class="nav-item"><a href="signup_kbs.php" class="balk1"> <img src="img/profile.png" alt="Sign In/Up"
                                                                              style="width:30px;height:35px;"></a></li>
        </div>
    </ul>
</section_balk>
<h1><img src="img/cart.png" alt="Shopping Cart"
         style="max-width:40px;height:35px;">Shopping Cart</h1>
<style>
    html, body {
        height: 50%;
    }
    #tableContainer-1 {
        height: 100%;
        width: 100%;
        display: table;
    }
    #tableContainer-2 {
        vertical-align: middle;
        display: table-cell;
        height: 100%;
    }
    #myTable {
        margin: 0 auto;
        width: 75%;
        height: 100%;
    }
    input.largerCheckbox {
        width: 300px;
        height: 150px;
    }
    .buy-now {
        color: #5DD6F5;
        text-align: center;
        font-family: header, serif;
        height: 50px;
        max-width: 300px;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    table {
        border: 1px solid black;
        border-radius: 10px;
    }
</style>

<div id="tableContainer-1">
    <div id="tableContainer-2">
        <table class="shop-cart" id="myTable">
            <tr><td>InShopCart</td><td>ProductName</td><td>ProductImg</td><td>ProductPrice</td></tr>
            <tr><td><input type="checkbox" class="largerCheckbox" name="cb1" /></td><td><a href="product_links/Iphone_14_pro_max.html"> Iphone_14_pro_max </a></td><td><img class="centered-image" src="img/producten/50GWOQE58kZq-removebg-preview.png" alt="Iphone 14 Pro Max" style="max-width:200px;max-height:200px"></td><td>€1.200</td></tr>
            <tr><td><input type="checkbox" class="largerCheckbox" name="cb2" /></td><td><a href="product_links/RTX_3060.html"> Lenovo_legion_5_pro </a></td><td><img class="centered-image" src="img/producten/39ZY06zrJEZp-removebg-preview.png" alt="RTX 3060" style="max-width:200px;max-height:200px"></td><td>€349,99</td></tr>
            <tr><td><input type="checkbox" class="largerCheckbox" name="cb3" /></td><td> <a href="product_links/Lenovo_legion_5_pro.html"> RTX_3060 </a> </td><td><img class="centered-image" src="img/producten/q5A5OnAVnvx7-removebg-preview.png" alt="Legion Laptop" style="max-width:200px;max-height:200px"></td><td>€1.049,99</td></tr>
        </table>
    </div>
</div>
<script>

</script>

<h1><button type="button" class="buy-now">Purchase for €<script>
    var cb_1 = document.getElementsByTagName("cb1")[0];
    cb_1.value = 1200;
    var cb_2 = document.getElementsByTagName("cb2")[0];
    cb_2.value = 350;
    var cb_3 = document.getElementsByTagName("cb3")[0];
    cb_3.value = 1050;
    var sum = cb_1+cb_2+cb_3;
    document.write(sum);
</script> </button></h1>
<!-- ----------------------------------------------- footer NIET AANKOMEN! -------------------------------------------- -->
<br><br><br><br>
<section_footer>
    <link rel="stylesheet" href="CSS/footer.css">
    <footer class="footer">
        <div class="footcontainer">
            <div class="footrow">
                <div class="footer-col">
                    <h4>links</h4>
                    <ul>
                        <li><a href="index.html">index</a></li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="signup_kbs.php">sign up</a></li>
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
                        <img src="img/footer/paypal_footer.png" alt="paypal logo" style="width: 30px; height:30px">
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
