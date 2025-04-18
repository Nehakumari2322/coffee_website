<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <img src="<?php echo URLROOT."/img/27.png";?>" style="margin-left:-70px" alt="">
        </div>
        <div class="col-sm-4">
            <p class="text-center pt-5" style="font-size:4rem;color:#A6613B;font-family: 'Inter', sans-serif;">Our <br>
                Menu</p>
        </div>
        <div class="col-sm-4">
            <img src="<?php echo URLROOT."/img/26.png";?>" style="width:450px;margin-top:200px" alt="">
        </div>
    </div>
</div>

<div class="container">
    <h1 class="text-center mt-4" style="color:#914019">Coffee</h1>
    <p class="text-center text">Flavors that will make you do a happy dance.</p>
    <div class="row pb-5">
        <div class="col-sm-6 mt-3 mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/28.png";?>" style="height:290px;margin-top:-100px" alt="">
                    
                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/29.png";?>" height="130px" style="margin-top:80px;margin-left:-70px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[0]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[0]->price;?> /-</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mt-3  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/30.png";?>" style="height:300px;margin-top:-100px" alt="">
                    
                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/45.png";?>" height="70px" style="margin-top:80px;margin-left:-60px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[1]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[1]->price;?> /-</p>
                </div>
            </div>
        </div>


        <div class="col-sm-6 mt-3  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/44.png";?>" style="height:300px;margin-top:-100px" alt="">
                    
                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/42.png";?>" height="160px" style="margin-left:-190px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[2]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[2]->price;?> /-</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mt-3  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/43.png";?>" style="height:270px;margin-top:-110px;margin-left:-40px" alt="">
                    
                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/bin.png";?>" height="80px" style="margin-top:90px;margin-left:-60px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[3]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[3]->price;?> /-</p>
                </div>
            </div>
        </div>


        <div class="col-sm-6 mt-5  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/40.png";?>" style="height:270px;margin-top:-60px;" alt="">
                    
                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/36.png";?>" height="80px" style="margin-top:90px;margin-left:-60px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[4]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[4]->price;?> /-</p>
                </div>
            </div>
        </div>


        <div class="col-sm-6 mt-5  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/39.png";?>" style="height:240px;margin-top:-60px;" alt="">
                    
                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/33.png";?>" height="80px" style="margin-top:90px;margin-left:-60px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[5]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[5]->price;?> /-</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mt-5  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/38.png";?>" style="height:240px;margin-top:-60px;" alt="">
                    
                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/35.png";?>" height="80px" style="margin-top:90px;margin-left:-60px;rotate:250deg" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[6]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[6]->price;?> /-</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mt-5  mb-3">
            <div class="row">
                <div class="col-sm-4" style="background-color:#bd8d5c;border-radius:50%;height:200px;width:200px">
                    <img src="<?php echo URLROOT."/product_img/37.png";?>" style="height:260px;margin-top:-60px;margin-left:-50px" alt="">
                    
                </div>
                <div class="col-sm-1">
                    <img src="<?php echo URLROOT."/product_img/34.png";?>" height="80px" style="margin-top:90px;margin-left:-60px" alt="">
                </div>
                <div class="col-sm-7">
                    <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;"><?php echo $data[7]->name;?></p>
                    <p>Add to Cart</p>
                    <p style="color:#FF5B00;"><?php echo $data[7]->price;?> /-</p>
                </div>
            </div>
        </div>

    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>