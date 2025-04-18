<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<style>
    .contain {
    position: relative;
 
}

.background-image, .overlay-image {
    position: absolute;
    top: 0;
    left: 0;
}

.background-image {
    z-index: 1; /* Place background image at the bottom */
}

.overlay-image {
    z-index: 2; /* Place overlay image on top of background image */
    opacity: 0.7; /* Adjust opacity as needed */
}

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 contain">  
                <img src="<?php echo URLROOT."/img/54.png";?>" alt="Background Image" class="background-image">
                <img src="<?php echo URLROOT."/img/55.png";?>" height="400px" style="rotate:180deg;margin-left:110px" alt="Overlay Image" class="overlay-image">         
        </div>
        <div class="col-sm-4">
            <p class="text-center pt-5 mt-4" style="font-size:4rem;color:#A6613B;font-family: 'Inter', sans-serif;">Tea</p>
            <p class="text-center text">"In the presence of tea, worries dissolve and peace prevails”.</p>
        </div>
        <div class="col-sm-4">
            <img src="<?php echo URLROOT."/img/56.png";?>" style="margin-top:40px;height:300px" alt="">
        </div>
    </div>
</div>

<div class="container">
   
    <div class="row pb-5 mt-5 pt-5">
        <!-- first row -->
        <div class="col-sm-6 mt-5 mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/46.png";?>" style="height:190px;margin-top:0px" alt="">

                </div>
               <div class="col-sm-1"></div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[0]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[0]->price;?>/-</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-5  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/31.png";?>" style="height:190px" alt="">

                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[1]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[1]->price;?>/-</p>
                </div>
            </div>
        </div>

<!-- second row -->
        <div class="col-sm-6 mt-3  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/47.png";?>" style="height:210px;margin-top:-20px" alt="">

                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/58.png";?>" height="160px" style="margin-left:-110px;rotate:50deg;margin-top:70px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[2]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[2]->price;?>/-</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mt-3  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/48.png";?>" style="height:130px;margin-top:30px;margin-left:0px" alt="">

                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/59.png";?>" height="80px"
                        style="margin-top:120px;margin-left:-70px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[3]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[3]->price;?> /-</p>
                </div>
            </div>
        </div>

<!-- third row -->
        <div class="col-sm-6 mt-5  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/32.png";?>" style="height:180px;margin-top:0px;" alt="">

                </div>
               <div class="col-sm-1"></div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[4]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[4]->price;?>/-</p>
                </div>
            </div>
        </div>


        <div class="col-sm-6 mt-5  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/49.png";?>" style="height:180px;margin-top:0px;" alt="">

                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/60.png";?>" height="60px"
                        style="margin-top:90px;margin-left:-70px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[5]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[5]->price;?>/-</p>
                </div>
            </div>
        </div>
<!-- fourth row -->
        <div class="col-sm-6 mt-5  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/50.png";?>" style="height:150px;margin-top:0px;" alt="">

                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/61.png";?>" height="80px"
                        style="margin-top:90px;margin-left:-90px;" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[6]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[6]->price;?>/-</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mt-5  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/51.png";?>"
                        style="height:200px;margin-top:0px;margin-left:0px" alt="">

                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/62.png";?>" height="80px"
                        style="margin-top:90px;margin-left:-60px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[7]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[7]->price;?>/-</p>
                </div>
            </div>
        </div>

    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>