<link rel="stylesheet" type="text/css" href="../resource/css/slider.css">
<link rel="stylesheet" type="text/css" href="../resource/css/style.css">

<style>

</style>

<section style="background-color:#000 !important;">


    <div class="slider-container">
        <div class="carousel">
            <div class="slider">
                <!-- =================================  SLIDING SEC 1 ========= -->

                <div class="rowss">
                    <?php
                    $result = mysqli_query($db,"SELECT * FROM `products_market` LIMIT $count,5");
                    
                    while($row = mysqli_fetch_assoc($result)){ 
                        
                    echo "
                    <div class='clou col-width-5'>
                    <form method='post' action=''>
                    <div class='card_inner'>
                        <div class='card'>
                            <input type='hidden' name='code' value=".$row['code'].">
                            <div class='imgFrame'><img src='../DB/products/".$row['image']."'></div>
                            <div class='card-details'>
                                <h4>".$row['code']."</h4>
                                <h4>".$row['weight']."g</h4>
                                <div class='price'>Rs.".$row['price']."</div>
                                 <button type='submit' class='btn btn_HIGH' name='idd'>ADD TO CART</button>
                                 </form>
                            </div>

                        </div>
                      </div>
                      </div>
                      ";
                    }
                    if(isset($_POST['idd']))
                    {
                        if (!isLoggedIn()) {
                            $_SESSION['msg'] = "You must log in first";
                            //header('location: ../pages/login.php');
                            exit();
                        }
                    }
                    ?>
                </div>
                <!--rowss-->
            </div>
            <!--slider-->
        </div>
        <!--carasoule-->
    </div>
</section>



<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js">

</script>