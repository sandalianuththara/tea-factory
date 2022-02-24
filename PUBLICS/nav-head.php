<?php session_start();
include('../DB/connection.php');
include('../FUNCTIONS/functions.php') ;
include("../FUNCTIONS/reg.php");
include('../pages/cart_index.php');
?>

<link rel="stylesheet" type="text/css" href="../resource/css/style.cs">
<link rel="stylesheet" type="text/css" href="../vendors/css/grid/col.css">
<link rel="stylesheet" type="text/css" href="../vendors/css/grid/2cols.css">

<style>
    .cart_div span {
        font-weight: 900;
        font-size: 13px;
        color: #000;
        background: #44D62C;

        padding: 0 5px;
        border-radius: 50%;
        height: 10px;
        width: 100%;
        line-height: 5px;

        position: relative;
        top: -10px;
        text-align: center;
    }

</style>

<nav>
    <div class="header-strip">
        <ul class="nav-items">
            <div class="nav-logo">
                <a href="../PUBLICS/home.php"><img src="../resource/img/southern.svg" style="width:200px;"></a>
            </div>

            <div id="nav1">
                <li><a class="blist">WHAT'S NEW </a>
                    <ul id="dropdown-content">
                        <div class="col">
                            <h5>Future Plans</h5>
                            <li><a href="../PAGES/beta.php">projects</a></li>

                        </div>
                    </ul>
                </li>
            </div>

            <div id="nav2">
                <li><a href="../PAGES/products.php" class="blist">PRODUCTS </a>
                    <ul id="dropdown-content">
                        <div class="col">
                            <h5>Tea</h5>
                            <li><a href="../PAGES/products.php">All</a></li>
                        </div>
                        <div class="col">
                            <h5>Tea Grades</h5>
                            <!-- ------------- combo grade load -->
                            <?php /*
                            $result = mysqli_query($db,"SELECT grade FROM `tea_grades`;");
                                while($row = mysqli_fetch_assoc($result)){ 
                                    echo "
                                    <li><a href='../PAGES/products.php'>".$row['grade']."</a></li>
                                    ";
                                }*/
                             ?>
                        </div>

                    </ul>
                </li>
            </div>

            <div id="nav3">
            </div>

            <div id="nav4">
                <li><a class="blist">ABOUT </a>
                    <ul id="dropdown-content">
                        <div class="col">
                            <h5>Razor</h5>
                            <li><a href="../PAGES/beta.php">Location</a></li>
                            <li><a href="../PAGES/leaderboard.php">Leaderboard</a></li>
                        </div>
                        <div class="col">
                            <h5>factory</h5>
                            <li><a href="../PAGES/wallpapers.php">Gallary</a></li>
                        </div>
                    </ul>
                </li>
            </div>

            <div id="nav5">
                <li><a class="blist">SUPPORT </a>
                    <ul id="dropdown-content">
                        <div class="col">
                        </div>
                        <div class="col">
                            <h5>Technical Support</h5>
                            <li><a href="../PAGES/beta.php">Hotline</a></li>
                        </div>
                        <div class="col">
                            <h5>Contact Us</h5>
                            <li><a href="../PAGES/contact.php">Leave a Message</a></li>
                        </div>
                        <div class="col">
                            <h5>Manage Razor Account</h5>
                            <li><?php  if (isset($_SESSION['user'])) : ?>

                                <?php  if (isAdmin()) {
                                ?>
                                <a href="../ADMIN/index.php">Manage</a>
                                <?php    }
                                      else{  ?>
                                <a href="../USER/index.php">Manage Accounts</a>
                                <?php    }   ?>
                                <?php endif ?>
                            </li>
                        </div>
                    </ul>
                </li>
            </div>

            <div id="nav-icons" style="margin-left: 10%;">
                <li><a class=" blist">
                        <ion-icon name="person-outline" id="ion-user">U</ion-icon>
                    </a>
                    <ul id="dropdown-user">
                        <div class="col">
                            <li>
                                <?php  if (isset($_SESSION['user'])) : ?>
                                <?php echo $_SESSION['user']['username']; ?>
                                <?php endif ?>
                            </li>

                            <li>
                                <?php  if (isset($_SESSION['user'])) : ?>
                                <?php  if (isAdmin()) {
                                          $_SESSION['msg'] = "autherized for admins only";?>
                                <a href="../ADMIN/index.php">Manage</a>
                                <?php    }
                                      else{  ?>
                                <a href="../USER/index.php">Manage Accounts</a>
                                <?php    }   ?>
                                <?php endif ?>
                            </li>
                            <li>
                                <?php  if (!isset($_SESSION['user'])) : ?>
                                <a href="../PAGES/login.php">Login</a>
                                <?php endif ?>
                            </li>
                            <li>
                                <?php  if (isset($_SESSION['user'])) : ?>
                                <a href="../PUBLICS/home.php?logout='1'">Logout</a>
                                <?php endif ?>
                            </li>
                        </div>
                    </ul>
                </li>
            </div>

            <did id="nav-icons" style="margin-left:-20px;">
                <li>
                    <?php  if (isset($_SESSION['user'])) : ?>
                    <a><?php echo ucfirst($_SESSION['user']['email']); ?></a>
                    <?php endif ?>
                </li>
            </did>

            <div id="nav-icons" style="margin-right: 4%">
                <!--      cart  -->
                <?php
                    if(isset($_SESSION["shopping_cart"])) {
                    $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                ?>
                <li><?php        //     cart icon  -->
                   if (!isLoggedIn()) {
                          
                        }
                        else{  ?>
                    <a href="../PAGES/cart.php" class="cart_div  blist">
                        <ion-icon name="cart-outline" id="ion-cart">C</ion-icon>
                        <span><?php echo $cart_count; ?></span>
                    </a>
                    <?php   }  ?>
                    <?php   }  ?>
                </li>
            </div>
            <!-- ------------------------------------------------------------------------------- -->
            <div class="nav-profile">
                <div class="profile_info">
                    <!-- img -->
                    <div>
                        <?php if (isset($_SESSION['user'])) : ?>
                        <small><i style="color: #888;">&#40;<?php echo ucfirst($_SESSION['user']['user_type']); ?>&#41;</i></small>
                        <?php endif ?>
                    </div>
                </div>
            </div>

        </ul>
    </div>
</nav>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
