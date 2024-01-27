<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AAKSC ONLINE Chemistry-Online Test Series</title>
    <?php include("./include/head.php");?>
  </head>

  <body>
   <?php include("./include/navbar.php");?>
    <section
      class="login-form-section"
      style="
        background-image: url(images/form-banner.webp);
        height: 600px;
        width: 100%;
        position: relative;
        background-position: center center;
        background-position-x: center;
      ">
      <div
        style="
          background-color: black;
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          opacity: 0.8;
        "
      ></div>
      <div class="container">
        <div
          style="
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
          "
        >
          <div class="row">
            <div style="z-index: 2; display: block" id="login_button">
              <a
                href="https://aakscaits.theonlinetests.com/dynamicwl/login"
                style="transition: 0.8s; width:200px"
                type="button"
                class="btn btn-outline-danger rounded font-weight-bold py-3"
                onclick="handleonClick()"
              >
                Login
              </a>
            </div>
            <!-- <div
              class="form rounded p-4 shadow-lg"
              style="
                display: block;
                z-index: 1;
                background-color: #363535e0;
                margin-top: 70px;
              "
              id="form"
            >
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="text-light"
                    >Email address</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter email"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="text-light"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    placeholder="Password"
                    required
                  />
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1"
                  />
                  <label class="form-check-label" for="exampleCheck1"
                    >Check me out</label
                  >
                </div>
                <a
                  type="submit"
                  href="https://aakscaits.theonlinetests.com/dynamicwl/login"
                  class="btn btn-primary"
                  >Submit</a
                >
              </form>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <?php include("./include/footer.php");?>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <!-- <script>
      function handleonClick() {
        var loginButton = document.getElementById("login_button");
        var loginForm = document.getElementById("form");
        loginButton.style.display = "none";
        loginForm.style.display = "block";
      }
    </script> -->
  </body>
</html>
