<!DOCTYPE html>
<html lang="en"> <!-- gekozen taal voor de website is Engels -->
<head>
    <meta charset="UTF-8"> <!-- zorgt dat het alfabet geaccepteerd wordt -->
    <title>Nerdy Gadgets</title> <!-- tab titel -->
    <link rel="icon" type="img/x-icon" href="img/Nerdy_Gadgets_zonder_tekst.ico"> <!-- icon in je tab -->
    <link rel="stylesheet" type="text/css" href="CSS/website_format.css"><!-- koppelt de css aan de html code -->

    <!-- ------------------------------------------------LET OP--------------------------------------- -->
    <link rel="stylesheet" type="text/css" href="CSS/productoverzichtpagina.css">
    <!-- Hier moet nog wat ingevuld worden -->
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
<h1>Nerdy Gadget</h1>
<h1 style="color: white; font-size: 30px ">Producten</h1>


<section style=" border: 4px solid #dddddd ; border-radius: 10px;position: sticky; top: 0; margin-right: 87%; padding: 1px; background-color: #20242c; color: #ddd" >
    <form action="" method="post">
        Zoeken:<br>
        <input name="merk" style="width: 95%; padding: 0.1%" type="text" placeholder="..."><br>
        prijs<br>
        €
        <input type="number" style="width: 30%; padding: 1%" name="lprijs" placeholder="8" value=""> tot
        <input type="number" style="width: 30%; padding: 1%" name="hprijs" placeholder="2000" value=""><br>
        <input type="checkbox" style="width: 10%" name="componenten" value="componenten">Componenten<br>
        <input type="checkbox" style="width: 10%" name="desktops" value="desktops">Desktops<br>
        <input type="checkbox" style="width: 10%" name="laptops" value="laptops">Laptops<br>
        <input type="checkbox" style="width: 10%" name="opslag" value="opslag">Opslag<br>
        <input type="checkbox" style="width: 10%" name="phones" value="phones">Phones<br>
        <input type="checkbox" style="width: 10%" name="routers" value="routers">routers<br>
        <input type="checkbox" style="width: 10%" name="populair" value="populair">populair<br>
        <input type="submit" name="verzend"><br>

    </form>

</section>



<br>
<table class="center">
    <tr>
        <th></th>
        <th>Product</th>
        <th>price</th>
    </tr>
    <?php
    error_reporting(0);
    $a = "order by category asc";
    $b = "select id, image, name, price from product";
    $connection = mysqli_connect("localhost", "root", "", "nerdy_gadgets_start", "3306");
    $sql = "select id, image, name, price from product $a";
    $imagesql = "select image from product $a";
    $min = $_POST['lprijs'];
    $max = $_POST['hprijs'];
    $merk = $_POST['merk'];
    $componenten = $_POST['componenten'];
    $desktop = $_POST['desktops'];
    $laptops = $_POST['laptops'];
    $opslag = $_POST['opslag'];
    $phones = $_POST['phones'];
    $routers = $_POST['routers'];
    $populair = $_POST['populair'];
    if(isset($_POST["verzend"])) {
        if (!empty($min) && !empty($max) && empty($merk)) {
            $sql = "$b where price between  $min and $max  order by price asc";
        } elseif (!empty($merk) && !empty($min) && !empty($max)) {
            $sql = "$b where name like '%$merk%' AND price between $min and $max";
        } elseif (!empty($merk)){
            $sql = "$b where name like '%$merk%'";
        } elseif (!empty($min)) {
            $sql = "$b where price between $min and 100000 order by price asc";
        } elseif (!empty($max)) {
            $sql = "$b where price between 0 and $max order by price asc";
        } if ($componenten){
            $sql = "$b where category = 'componenten'";
        } if ($desktop){
            $sql = "$b where category = 'desktops'  ";
        } if ($laptops){
            $sql = "$b where category = 'laptops'  ";
        } if ($opslag){
            $sql = "$b where category = 'opslag'  ";
        } if ($phones){
            $sql = "$b where category = 'phones'  ";
        } if ($routers){
            $sql = "$b where category = 'routers'  ";
        } if ($populair){
            $sql = "select distinct id, image, name, price, count(product_id), product_id from product p join order_item on product_id = id group by product_id having count(product_id) > 30 order by price asc;";
        }
    }


    $result = mysqli_query($connection, $sql);
    $imageresult = mysqli_query($connection, $imagesql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . '<img src="img/producten/' . $row['image'] . '.jpg" width="100" >' . '</td>';
            echo '<td>' . '<a href="Product_links/product.php?id=' . $row['id'] . '"> '. $row['name'] . '</a>'. '</td>';
            echo '<td>' . '€' . $row['price'] . '</td>';
            echo '</tr>';

        }
    }


    ?>
</table>


<!-------------------------------------- footer NIET AANKOMEN -------------------------------------------- -->
<link rel="stylesheet" href="CSS/footer.css">
<footer>
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
-->
</html>



