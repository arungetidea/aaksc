<?php 
  $papers = [
    [
      "id" => 1,
      "name" => "JEE-Advanced-2011-Question-Paper-with-Answers-Paper-1-Copy-1",
      "file" => "pdf_paper/JEE-Advanced-2011-Question-Paper-with-Answers-Paper-1-Copy-1-compressed.pdf"
    ],
    [
      "id" => 2,
      "name" => "JEE-Advanced-2012-Question-Paper-with-Answers-Paper-1-1",
      "file" => "pdf_paper/JEE-Advanced-2012-Question-Paper-with-Answers-Paper-1-1-compressed.pdf"
    ],
    [
      "id" => 3,
      "name" => "JEE-Advanced-2012-Question-Paper-with-Answers-Paper-2",
      "file" => "pdf_paper/JEE-Advanced-2012-Question-Paper-with-Answers-Paper-2-compressed.pdf"
    ],
    [ 
      "id" => 4,
      "name" => "JEE-Advanced-2013-Question-Paper-with-Answers-Paper-1-Copy",
      "file" => "pdf_paper/JEE-Advanced-2013-Question-Paper-with-Answers-Paper-1-Copy-compressed.pdf"
    ],
    [
      "id" => 5,
      "name" => "JEE-Advanced-2014-Question-Paper-with-Answers-Paper-1",
      "file" => "pdf_paper/JEE-Advanced-2014-Question-Paper-with-Answers-Paper-1-compressed.pdf"
    ],
    [
      "id" => 6,
      "name" => "JEE-Advanced-2014-Question-Paper-with-Answers-Paper-2",
      "file" => "JEE-Advanced-2014-Question-Paper-with-Answers-Paper-2-compressed.pdf"
    ],
    [
      "id" => 7,
      "name" => "JEE-Advanced-2015-Question-Paper-with-Answers-Paper-1",
      "file" => "pdf_paper/JEE-Advanced-2015-Question-Paper-with-Answers-Paper-1-compressed.pdf"
    ],
    [
      "id" => 8,
      "name" => "JEE-Advanced-2015-Question-Paper-with-Answers-Paper-2",
      "file" => "pdf_paper/JEE-Advanced-2015-Question-Paper-with-Answers-Paper-2-compressed.pdf"
    ],
    [
      "id" => 9,
      "name" => "2010p1",
      "file" => "pdf_paper/2010p1-compressed.pdf"
    ],
    [
      "id" => 10,
      "name" => "2010p2",
      "file" => "pdf_paper/2010p2-compressed.pdf"
    ],
    [
      "id" => 11,
      "name" => "2016p1",
      "file" => "pdf_paper/2016p1-compressed.pdf"
    ],
    [
      "id" => 12,
      "name" => "2016p2",
      "file" => "pdf_paper/2016p2-compressed.pdf"
    ],
  ];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AAKSC ONLINE Chemistry -Sample Paper</title>
    <?php include("./include/head.php");?>
  </head>
  <body>
   <?php include("./include/navbar.php");?>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Exam Name</th>
                    <th scope="col">Downlod</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                   for($i=0;$i<count($papers);$i++){
                    $singlePaper = $papers[$i];
                    echo " <tr>
                    <th scope='row'>".$singlePaper['id']."</th>
                    <td colspan='1'>".$singlePaper['name']."</td>
                    <td><a href=".$singlePaper['file']." downlod target='_blank'>Downlod</a></td>
                  </tr>";
                  }
                  ?>
                </tbody>
              </table>
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
  </body>
</html>
