<?php require APPROOT . '/views/inc/header.php'; ?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Klee+One&display=swap');

.contain {
    position: relative;
    text-align: center;
    color: white;
}

h1 {
    font-family: "Jacques Francois Shadow", serif;
    color: #E9B78A;
}

.bottom-left {
    position: absolute;
    top: 410px;
    left: -10px;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 76px;
}

.bottom-right {
    position: absolute;
    top: 400px;
    right: 16px;
}

.centered {
    position: absolute;
    top: 300px;
    left: 50%;
    transform: translate(-50%, -50%);
}

.main {
    line-height: 0;
}
</style>
<section class="bg">
    <form action="<?php echo URLROOT; ?>coffeewithmes/navform" method="post" style="margin-bottom:0px">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="#"><img src="<?php echo URLROOT."/img/log.png";?>" height="50px"
                        alt=""></a>
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left links -->
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <button class="nav-link active text-light" name="home" id="home" aria-current="page"
                                href="#">Home</button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#about">About</a>
                        </li>
                        <!-- Navbar dropdown -->
                        <li class="nav-item dropdown">
                            <a data-mdb-dropdown-init class="nav-link dropdown-toggle text-light" href="#menu"
                                id="navbarDropdown" role="button" aria-expanded="false"> Menu
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li>
                                    <button class="dropdown-item" name="coffee" id="coffee">Coffee</button>
                                </li>
                                <li>
                                    <button class="dropdown-item" name="tea" id="tea">Tea</button>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link text-light">Gallery</button>
                        </li>
                        
                    </ul>
                </div>

                <div class="d-flex align-items-center">
                    <a class="link-secondary me-3 text-light">
                        Cart <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </nav>
    </form>

    <div class="container-fluid contain">
        <div class="bottom-left"><img src="<?php echo URLROOT."/img/1.png";?>" style="rotate:30deg;height:150px" alt="">
        </div>
        <div class="top-left">Top Left</div>
        <div class="top-right"><img src="<?php echo URLROOT."/img/4.png";?>" style="rotate:30deg;height:400px" alt="">
        </div>
        <div class="bottom-right"><img src="<?php echo URLROOT."/img/2.png";?>" height="200px" alt=""></div>
        <div class="centered">
            <p class="text-light main">life happens Coffee helps</p>
            <p class="main-p"> <span>Coffee</span> <br> is ideas Genrator</p>
            <img src="<?php echo URLROOT."/img/3.png";?>" height="200px" alt="">
        </div>
    </div>
</section>

<section class="nt" id="about">
    <div class="container-fluid">
        <div class="row pt-4">
            <div class="col-sm-1">
                <img src="<?php echo URLROOT."/img/coffe.png";?>" height="60px" alt="">
            </div>
            <div class="col-sm-10 text-center">
                <h1>About Us</h1>
            </div>
            <div class="col-sm-1">
                <img src="<?php echo URLROOT."/img/8.png";?>" height="60px" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <img src="<?php echo URLROOT."/img/9.png";?>" style="margin-top:300px;height:60px" alt="">
            </div>
            <div class="col-sm-5 pt-5 mt-5 text-dark">
                <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or
                    double click me to add your own content and make changes to the font. I’m a great place for you to
                    tell a story and let your users know a little more about you.</p>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo URLROOT."/img/11.jpeg";?>" style="height:100px;width:100px;border-radius:50%"
                    alt="">
                <img src="<?php echo URLROOT."/img/7.jpeg";?>" style="border-radius:50%;height:400px;width:400px"
                    alt="">
            </div>
        </div>


    </div>
</section>

<section class="nt" id="menu">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Our Menu</h1>
            <p class="text-center text-light mb-4">Sipping on more than just coffee..</p>
            <div class="col-sm-4 ">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo URLROOT."/img/5.jpeg";?>"
                            style="border-radius:10px;height:100px;width:110px" alt="">
                    </div>
                    <div class="col-sm-8">
                        <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;">Espresso &
                            Coffee</p>
                        <p style="color:#FF5B00;text-align:center">60/-</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo URLROOT."/img/14.jpeg";?>"
                            style="border-radius:10px;height:100px;width:110px" alt="">
                    </div>
                    <div class="col-sm-8">
                        <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;">Ristretto
                            Coffee</p>
                        <p style="color:#FF5B00;text-align:center">60/-</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo URLROOT."/img/6.jpeg";?>"
                            style="border-radius:10px;height:100px;width:110px" alt="">
                    </div>
                    <div class="col-sm-8">
                        <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;">Cappuccino</p>
                        <p style="color:#FF5B00;text-align:center">60/-</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-4">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo URLROOT."/img/13.jpeg";?>"
                            style="border-radius:10px;height:100px;width:110px" alt="">
                    </div>
                    <div class="col-sm-8">
                        <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;">Cafe au Lait
                        </p>
                        <p style="color:#FF5B00;text-align:center">60/-</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-4">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo URLROOT."/img/15.jpeg";?>"
                            style="border-radius:10px;height:100px;width:110px" alt="">
                    </div>
                    <div class="col-sm-8">
                        <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;">Iced Coffee</p>
                        <p style="color:#FF5B00;text-align:center">60/-</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mt-4">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo URLROOT."/img/12.jpeg";?>"
                            style="border-radius:10px;height:100px;width:110px" alt="">
                    </div>
                    <div class="col-sm-8">
                        <p class="text-dark" style="font-size:1.3rem; font-family: 'Klee One', cursive;">Frappuccino
                            Coffes</p>
                        <p style="color:#FF5B00;text-align:center">60/-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>