<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AAKSC ONLINE Chemistry-Video Lecture</title>
  </head> <?php include("./include/head.php");?> <body> <?php include('./include/navbar.php');?>
    <!-- MODAL... -->
    <div class="modal fade" id="videoPalyer" tabindex="-1" aria-labelledby="videoPalyerLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button type="button" class="close p-2 font-weight-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <iframe width="100%" height="450px" id="videoPlayerFrame" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="container py-5">
        <h3 class="page-header text-center" id="youtube-gallery"> Gallery of YouTube Videos </h3>
        <div class="row my-5">
          <div class="card-group">
            <div class="card">
              <div class="video-box" id="vvv">
                <span class="close" onclick="handleOnClose()">X</span>
              </div>
              <div class="video">
                <button type="button" class="btn btn-play" onclick="showVideoPlayer('https://www.youtube.com/embed/syMzV4-YWf4?si=ZUxvTdetJ3Glj4gL')">
                  <i class="fa fa-play glyphicon" aria-hidden="true"></i>
                </button>
                <img src="images/thumbnail.jpeg" class="img-responsive" />
              </div>
              <div class="card-body p-sm-4">
                <h6 class="card-title">Simplify chemistry with Anurag Sir - a glimpse of journey of 14 years</h6>
                <!-- <div class="play-video"><button
                    onclick="showVideoPlayer('https://youtu.be/syMzV4-YWf4?si=ZUxvTdetJ3Glj4gL')"
                  >
                    play video
                  </button></div> -->
              </div>
            </div>
            <div class="card">
              <div class="video-box" id="vvv">
                <span class="close" onclick="handleOnClose()">X</span>
              </div>
              <div class="video">
                <button type="button" class="btn btn-play" onclick="showVideoPlayer('https://www.youtube.com/embed/jLLPALgzMU4?si=c5_mioStO9X24JWD')">
                  <i class="fa fa-play glyphicon" aria-hidden="true"></i>
                </button>
                <img src="images/thumbnail.jpeg" class="img-responsive" />
              </div>
              <div class="card-body p-1 p-sm-4">
                <h6 class="card-title">Aufbau principle</h6>
                <!-- <div class="play-video"><button
                    onclick="showVideoPlayer('https://www.youtube.com/embed/jLLPALgzMU4?si=W20bS6UlAJ5ZLxhq')"
                  >
                    play video
                  </button></div> -->
              </div>
            </div>
            <div class="card">
              <div class="video-box" id="vvv">
                <span class="close" onclick="handleOnClose()">X</span>
              </div>
              <div class="video">
                <button type="button" class="btn btn-play" onclick="showVideoPlayer('https://www.youtube.com/embed/Jc_A_zVIEMw?si=XUfV59hJhWKe-Fs_')">
                  <i class="fa fa-play glyphicon" aria-hidden="true"></i>
                </button>
                <img src="images/thumbnail.jpeg" class="img-responsive" />
              </div>
              <div class="card-body p-sm-4">
                <h6 class="card-title">Quick revision of Bohr model</h6>
                <!-- <div class="play-video"><button
                    onclick="showVideoPlayer('https://www.youtube.com/embed/jLLPALgzMU4?si=W20bS6UlAJ5ZLxhq')"
                  >
                    play video
                  </button></div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="card-group">
            <div class="card">
              <div class="video-box" id="vvv">
                <span class="close" onclick="handleOnClose()">X</span>
              </div>
              <div class="video">
                <button type="button" class="btn btn-play" onclick="showVideoPlayer('https://www.youtube.com/embed/RLm1aqRxWHo?si=hWEX-FkUcQHHZnHL')">
                  <i class="fa fa-play glyphicon" aria-hidden="true"></i>
                </button>
                <img src="images/thumbnail.jpeg" class="img-responsive" />
              </div>
              <div class="card-body p-sm-4">
                <h6 class="card-title">Pauli's exclusion principle</h6>
                <!-- <div class="play-video"><button
                    onclick="showVideoPlayer('https://www.youtube.com/embed/jLLPALgzMU4?si=W20bS6UlAJ5ZLxhq')"
                  >
                    play video
                  </button></div> -->
              </div>
            </div>
            <div class="card">
              <div class="video-box" id="vvv">
                <span class="close" onclick="handleOnClose()">X</span>
              </div>
              <div class="video">
                <button type="button" class="btn btn-play" onclick="showVideoPlayer('https://www.youtube.com/embed/XYHNPL4NWh4?si=Wt4XxcuAwmaDNxW_')">
                  <i class="fa fa-play glyphicon" aria-hidden="true"></i>
                </button>
                <img src="images/thumbnail.jpeg" class="img-responsive" />
              </div>
              <div class="card-body p-sm-4">
                <h6 class="card-title">Hund's rule of maximum multiplicity</h6>
                <!-- <div class="play-video"><button
                    onclick="showVideoPlayer('https://www.youtube.com/embed/jLLPALgzMU4?si=W20bS6UlAJ5ZLxhq')"
                  >
                    play video
                  </button></div> -->
              </div>
            </div>
            <div class="card">
              <div class="video-box" id="vvv">
                <span class="close" onclick="handleOnClose()">X</span>
              </div>
              <div class="video">
                <button type="button" class="btn btn-play" onclick="showVideoPlayer('https://www.youtube.com/embed/SeQVfYUXI8I?si=8RDiO6Eeehz8mSwG')">
                  <i class="fa fa-play glyphicon" aria-hidden="true"></i>
                </button>
                <img src="images/thumbnail.jpeg" class="img-responsive" />
              </div>
              <div class="card-body p-sm-4">
                <h6 class="card-title">Revision of Uncertainty principle</h6>
                <!-- <div class="play-video"><button
                    onclick="showVideoPlayer('https://www.youtube.com/embed/jLLPALgzMU4?si=W20bS6UlAJ5ZLxhq')"
                  >
                    play video
                  </button></div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> <?php include("./include/footer.php");?>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
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
    <script>
      function showVideoPlayer(videLink) {
        window.videoId = videLink;
        $("#videoPalyer").modal("show");
      }
      $("#videoPalyer").on("show.bs.modal", function() {
        console.log("Video modal has opened", window.videoId);
        var iFrame = document.getElementById("videoPlayerFrame");
        iFrame.src = window.videoId;
      });
      $("#videoPalyer").on("hide.bs.modal", function() {
        console.log("Video modal has closed");
        var iFrame = document.getElementById("videoPlayerFrame");
        iFrame.src = "";
      });
    </script>
    <script>
      function handleOnPlay() {
        let d = document.getElementById("vvv");
        console.log("clicked");
        d.style.display = "flex";
        // if(d.style.display === "flex"){
        //   d.style.display = "none";
        // }
        // else{
        //   d.style.display = "flex";
        // }
      }

      function handleOnClose() {
        let d = document.getElementById("vvv");
        console.log("clicked");
        d.style.display = "none";
      }
    </script>
  </body>
</html>