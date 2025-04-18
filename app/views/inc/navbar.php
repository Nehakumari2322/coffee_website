  <!-- Nav section-->
  <form action="<?php echo URLROOT; ?>coffeewithmes/navform" method="post" style="margin-bottom:0px">
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
              <!-- Navbar brand -->
              <a class="navbar-brand" href="#"><img src="<?php echo URLROOT."/img/log.png";?>" height="50px" alt=""></a>
              <!-- Toggle button -->
              <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                  data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>

              <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left links -->
                  <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <button class="nav-link active text-light" name="home" id="home" aria-current="page" href="#">Home</button>
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
                          <button class="nav-link text-light" >Gallery</button>
                      </li>  
                  </ul>
              </div>

              <div class="d-flex align-items-center">
                  <a class="link-secondary me-3 text-light" >
                      Cart <i class="fas fa-shopping-cart"></i>
                  </a>
              </div>
          </div>
      </nav>
  </form>