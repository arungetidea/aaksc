<?php 

  $activePage = basename($_SERVER['REQUEST_URI']);
  // var_dump($activePage);
  function isActive($page){
    global $activePage;
    if($page === $activePage){
      return "active";
    } else {
      return "";
    }
  }
  // var_dump(isActive("index.php"));
?>  

<div style='position:fixed; right:50px;bottom:50px; z-index:3'>
   <div class='text-center'>
   <a href="mailTo:info@chemistrypassion.com" class='callbtn callbtn1 icon-message'></a>
</div>
<div class='text-center mb-4'>
   <a href="tel:+91 98159-28768" class=' callbtn callbtn2 icon-phone'></a>
</div>
<div class='text-center'>
   <a href="whatsapp://send?text=Hello World!&phone=+9109815928768" class='callbtn callbtn3 icon-whatsapp'></a>
</div>
</div>
<i class="fa fa-envelope-o" aria-hidden="true"></i>
    <div class="bg-top navbar-light py-3">
      <div class="container-fluid px-md-4">
        <div
          class="row no-gutters d-flex align-items-center align-items-stretch py-2"
        >
          <div class="col-6 col-sm-2 col-md-2 col-lg-4 d-flex align-items-center pl-lg-4">
            <a class="navbar-brand" id="logo" href="index.php"
              ><img src="images/logo.png" height="100%" alt="logo"
            /></a>
          </div>
          <div class="col-6  col-sm-10 col-md-10 col-lg-8 d-block">
            <div class="row d-flex">
              <div
                class="col d-none d-sm-flex topper align-items-center align-items-stretch"
              >
                <div
                  class="icon justify-content-center align-items-center"
                >
                  <span class="icon-paper-plane"></span>
                </div>
                <div class="text">
                  <span>Email</span>
                  <a href="mailTo:info@chemistrypassion.com"
                    >info@chemistrypassion.com</a
                  >
                </div>
              </div>
              <div
                class="col d-none d-sm-flex topper align-items-center align-items-stretch"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-phone2"></span>
                </div>
                <div class="text">
                  <span>Call</span>
                  <a href="tel:+91 98159-28768">+91 98159-28768</a><br />
                  <!-- <a href="tel:+91 086994-38881">+91 086994-38881</a> -->
                </div>
              </div>
              <div
                class="col topper d-flex align-items-center justify-content-end"
              >
                <p class="mb-0 mt-3 mt-sm-0">
                  <a
                    href="#"
                    class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center"
                  >
                    <span>Login</span>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <nav
        class="navbar navbar-expand-lg navbar-dark ftco-navbar-light px-0 sticky-top pt-0"
        id="ftco-navbar"
      >
        <div
          class="container-fluid d-flex align-items-center py-2 px-lg-5"
          style="background-color:#f14c4c;"
        >
        <div class="order-lg-last w-sm-50 w-sm-50 mt-2 text-dark font-weight-bold">
            <div>
              <marquee behavior="" direction="">Online Video Lecture</marquee>
            </div>
      </div>
        <button
        class="navbar-toggler ml-auto mr-5"
        type="button"
        data-toggle="collapse"
        data-target="#ftco-nav"
        aria-controls="ftco-nav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="oi oi-menu text-dark font-weight-bold"></span>
      </button>
      
          <!-- <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
              <input type="text" class="form-control pl-3" placeholder="Search" />
              <button type="submit" placeholder="" class="form-control search">
                <span class="ion-ios-search"></span>
              </button>
            </div>
          </form> -->
          <div class="collapse navbar-collapse pl-sm-3" id="ftco-nav">
            <ul class="navbar-nav">
              <li class="nav-item <?php echo isActive("index.php"); ?>" >
                <a href="index.php" class="nav-link pl-0">Home  </a>
              </li>
              <li class="nav-item <?php echo isActive("about.php"); ?>">
                <a href="about.php" class="nav-link">About Us</a>
              </li>
              <li class="nav-item <?php echo isActive("program.php"); ?>">
                <a href="program.php" class="nav-link">Programs</a>
              </li>
             
              <li class="nav-item <?php echo isActive("online_test_series.php"); ?>">
                <a href="https://aakscaits.theonlinetests.com/dynamicwl/login" class="nav-link">Online Test Series</a>
              </li>
              
              <li class="nav-item <?php echo $activePage == "achievements.php" ? "active" : "";?> ">
                <a href="achievements.php" class="nav-link">Achievements</a>
              </li>
              <li class="nav-item <?php echo $activePage == "blog.php" ? "active" : "";?>">
                <a href="blog.php" class="nav-link">Blog</a>
              </li>
              
              <li class="nav-item dropdown <?php echo $activePage == "chdgallery.php" || $activePage == "pklgallery.php" ? "active": "pklgallery.php";?>">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                  Gallery
                </a>
                <ul class="dropdown-menu px-3">
                  <li>
                    <a class="text-dark nav-link <?php echo $activePage == "chdgallery.php" ? "text-primary" : "" ;?>" href="chdgallery.php">
                      Chandigarh
                    </a>
                  </li>
                  <li>
                    <a class="text-dark nav-link <?php echo $activePage == "pklgallery.php" ? "text-primary" : "" ;?>" href="pklgallery.php">
                       Panchkula
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item <?php echo $activePage == "video_lecture.php" ? "active" : "" ;?>">
                <a href="video_lecture.php" class="nav-link">Video Lectures</a>
              </li>
              <li class="nav-item <?php echo $activePage == "contact.php" ? "active" : "" ;?>">
                <a href="contact.php" class="nav-link">Contact Us</a>
              </li>
             
              <li class="nav-item dropdown <?php echo $activePage == "sample_paper.php" || $activePage == "jee_advance.php" ? "active" :"";?>">
                <a class="nav-link drop-menu" style='width:max-content;' href="#dropdown" role="button" data-bs-toggle="dropdown">
                  Downloads
                  <i class="fa fa-caret-up drop-icon-up" aria-hidden="true"></i>
                  <i class="fa fa-caret-down drop-icon-down" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu" style="width:max-content; padding:0px 15px;">
                  <li>
                    <a class="text-dark nav-link" href="#" role="button">
                      e-Broucher
                    </a>
                  </li>
                  <li>
                    <a class="text-dark nav-link" href="#" role="button">
                      Registration Form
                    </a>
                  </li>
                  <li>
                    <a class="nav-link <?php echo $activePage == "sample_paper.php" ? "text-danger": "text-dark" ;?>" href="sample_paper.php" role="button">
                      Sample Papers
                    </a>
                  </li>
                  <li class="submenu">
                    <a class="nav-link <?php echo $activePage == "jee_advance.php" ? "text-danger" : "text-dark" ;?>" href="#submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Previous Years
                      <i class="fa fa-caret-right fa-sm text-secondary" aria-hidden="true"></i>
                    </a>
                    <ul class="submenu-list px-3">
                      <li>
                        <a class="text-dark nav-link" href="#" role="button">
                          JEE-Main
                          <small>(<strong>2016-17</strong>)</small>
                        </a>
                      </li>
                      <li>
                        <a class="nav-link <?php echo $activePage == "jee_advance.php" ? "text-danger" :"text-dark" ;?>" href="jee_advance.php" role="button">
                          JEE-Advance
                          <small>(<strong>2010-23</strong>)</small>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          NEET
                          <small>(<strong>2016-23</strong>)</small>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          CBSE Board
                          <small>(<strong>2016-23</strong>)</small>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </div>
          
        
      </nav>