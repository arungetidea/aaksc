<?php 
  $courses1 = [
    [
      "id" => "01",
      "title" => "Live Classes",
      "subtitle" => "online & offline",
      "color" => "#13ABE1"

    ],
    [
      "id" => "02",
      "title" => "Regular worksheet & their discussion",
      "subtitle" => "",
      "color" => "#765CFD"
    ],
    [
      "id" => "03",
      "title" => "Regular tests",
      "subtitle" => "subjective as well as objective",
      "color" => "#43D1A0"
    ],
    [ 
      "id" => "04",
      "title" => "Doubt sessions",
      "subtitle" => "",
      "color" => "#FD585F"
    ],
    [
      "id" =>"05",
      "title" => "Availability of Lecture recording",
      "subtitle" => "",
      "color" => "#FFA652"
    ],
  ];
  $courses2 = [
    [
      "id" => "01",
      "title" => "Live Classes",
      "subtitle" => "online & offline",
      "background" => "#B7BD34",
      "image" => "images/arrow.png"

    ],
    [
      "id" => "02",
      "title" => "Regular worksheet & their discussion",
      "subtitle" => "",
      "background" =>"#82BC54",
      "image" => "images/arrow.png"
    ],
    [
      "id" => "03",
      "title" => "Regular tests",
      "subtitle" => "subjective as well as objective",
      "background" => "#41A974",
      "image" => "images/arrow.png"
    ],
    [ 
      "id" => "04",
      "title" => "Doubt sessions",
      "subtitle" => "",
      "background" => "#048681",
      "image" => "images/arrow.png"
    ],
   
  ];
  $courses3 = [
    [
      "id" => "01",
      "title" => "Only video Lectures",
      "subtitle" => "online & offline",
      "color" => "#D98B02"

    ],
    [
      "id" => "02",
      "title" => "Objective Test",
      "subtitle" => "",
      "color" => "#D75759"
    ],
  ];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AAKSC ONLINE Chemistry-Programs</title>
    <style>
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(20px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .animated-section {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.9s ease-in-out, transform 0.9s ease-in-out;
      }

      
    </style> <?php include("./include/head.php");?>
  </head>
  <body> <?php include("./include/navbar.php");?> <section class="container-fluid bg-light">
      <div class="container pb-5">
        <div id="online_offline_programme" style="display:flex;flex-direction:column; justify-content:center;align-items:center;">
          <h1 class="text-muted text-center my-4 font-weight-bold size">ONLINE & OFFLINE CLASSES</h1>
          <h3 class="font-weight-bold">Course-1</h3>
          <div class="row" style="justify-content:center;"> <?php 
                   for($i=0;$i
						
						
						<count($courses1);$i++){
                    $singleCourse1 = $courses1[$i];
                    echo "
							
							
							<div class='bg-light' style='height:250px; width:250px; border:14px solid".$singleCourse1['color']."; background-color:white; border-radius:100%; position:relative;display:flex; justify-content:center;align-items:center;margin:35px 25px;'>
								<div class='bg-light' style='height:70px; width:70px; background-color:white; position:absolute; top:-35px; left:calc(125px - 50px) ; display:flex; justify-content:center;align-items:center;font-size:45px;font-weight:600'>
                    ".$singleCourse1['id']."
                    </div>
								<div class='card-paragraph card-body animated-section p-0' style='display:flex;flex-direction: column; justify-content:center;align-items:center;text-align:center;'>
									<h5 class='card-title'>
										<strong>".$singleCourse1['title']."</strong>
									</h5>
									<p class='card-text'>".$singleCourse1['subtitle']."</p>
								</div>
							</div> ";
                  }
                  ?> </div>
        </div>
      </div>
    </section>
    <section class="container-fluid bg-light">
      <div class="container">
        <div id="online_offline_programme" style="display:flex;flex-direction:column; align-items:center;">
          <h1 class="text-muted text-center my-4 font-weight-bold size">ONLINE CLASSES</h1>
          <h3 class="font-weight-bold">Course-2</h3>
          <div class="" style="justify-content:center; display:flex;flex-direction:column;">
           <?php
          for ($i = 0; $i < count($courses2); $i++) {
           $singleCourse2 = $courses2[$i];  
           ?>
                <div class='card-paragraph card-body animated-section' style='background: <?= $singleCourse2['background'] ?>'>
                <div class='arrow-content position-relative'>
								<img src='<?php echo $singleCourse2['image']?>' id='img-content'>
									<h6 id='image-header'><?php echo $singleCourse2['id']?></h6>
                </div>
									<h5 class='card-title m-0'>
										<strong><?= $singleCourse2['title']?></strong>
									</h5>
									<p class='card-text'><?= $singleCourse2['subtitle']?></p> 
								</div>
                <?php
            }
             ?> </div>
        </div>
      </div>
    </section>
    <section class="container-fluid bg-light">
      <div class="container">
        <div id="online_offline_programme" style="display:flex;flex-direction:column; justify-content:center;align-items:center;">
          <h1 class="text-muted text-center mt-5 font-weight-bold size">VIDEO CLASSES</h1>
          <h3 class="font-weight-bold">Course-3</h3>
          <div class="row" style="justify-content:center;"> <?php 
                   for($i=0;$i
							
								
								<count($courses3);$i++){
                    $singleCourse3 = $courses3[$i];
                    echo "
								
									
									<div class='bg-light' style='height:250px; width:250px; border:14px solid ".$singleCourse3['color']."; background-color:white; position:relative;display:flex; justify-content:center;align-items:center;margin:35px 25px;'>
										<div class='bg-light' style='height:70px; width:70px; background-color:white; position:absolute; top:-35px; left:calc(125px - 50px) ; display:flex; justify-content:center;align-items:center;font-size:45px;font-weight:600'>
                    ".$singleCourse3['id']."
                    </div>
										<div class='card-paragraph card-body animated-section' style='display:flex;flex-direction: column; justify-content:center;align-items:center;text-align:center;margin-top:10px;'>
											<h5 class='card-title'>
												<strong>".$singleCourse3['title']."</strong>
											</h5>
											<p class='card-text'>".$singleCourse3['subtitle']."</p>
										</div>
									</div> ";
                  }
                  ?> </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid">
        <div class="container">
          <div class="my-5">
            <h3 class="font-weight-bold">Assignments</h3>
            <ul class="list-group">
              <li class="list-group-item list-group-item-primary d-md-flex">
                <!-- <div class="row"> -->
                  <span class="pr-2">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                    <i class="fa fa-caret-right" style='position:relative; left:-5px' aria-hidden="true"></i>
                  </span>
                  <span class="col-md-11 pl-0"> Thoroughly revised and updated, aim to give student extra edge over others. Students are supposed to try the set of problems given in them. </span>
                <!-- </div> -->
              </li>
              <li class="list-group-item list-group-item-success ">
                <span>
                  <i class="fa fa-caret-right" aria-hidden="true"></i>
                  <i class="fa fa-caret-right" style='position:relative; left:-5px' aria-hidden="true"></i>
                </span> They are targeted on the two important factors i.e. good subject knowledge & a regular practice of subject.
              </li>
              <li class="list-group-item list-group-item-secondary">
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <i class="fa fa-caret-right" style='position:relative; left:-5px' aria-hidden="true"></i> They are designed in order to improve time management and minimizing errors.
              </li>
              <li class="list-group-item list-group-item-danger">
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <i class="fa fa-caret-right" style='position:relative; left:-5px' aria-hidden="true"></i> They cover all aspects like entrances, boards & comprehensive subject knowledge.
              </li>
              <li class="list-group-item list-group-item-info">
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <i class="fa fa-caret-right" style='position:relative; left:-5px' aria-hidden="true"></i> They cover all aspects like entrances, boards & comprehensive subject knowledge.
              </li>
              <li class="list-group-item list-group-item-light">
                <h5>All students are expected to solve them in time frame</h5>
              </li>
            </ul>
          </div>
          <div class="my-5">
            <h3 class="font-weight-bold">Testing System:</h3>
            <ul class="list-group">
              <li class="list-group-item list-group-item-primary">
                <div>
                  <span>
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                    <i class="fa fa-caret-right" style='position:relative; left:-5px' aria-hidden="true"></i>
                  </span>
                  <span> There is a well planned testing system which force on boosting abilities of every student. </span>
                </div>
              </li>
              <li class="list-group-item list-group-item-secondary">
                <span>
                  <i class="fa fa-caret-right" aria-hidden="true"></i>
                  <i class="fa fa-caret-right" style='position:relative; left:-5px' aria-hidden="true"></i>
                </span> We expect sincere attempt on all tests, in order to develop expected abilities.
              </li>
              <li class="list-group-item list-group-item-danger">
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <i class="fa fa-caret-right" style='position:relative; left:-5px' aria-hidden="true"></i> Subjective tests are conducted fortnightly, which help students on presentation of test as well as to improve their school scores.
              </li>
              <li class="list-group-item list-group-item-success">
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <i class="fa fa-caret-right" style='position:relative; left:-5px' aria-hidden="true"></i> They cover all aspects like entrances, boards & comprehensive subject knowledge.
              </li>
              <li class="list-group-item list-group-item-warning">
                <i class="fa fa-caret-right" aria-hidden="true"></i>
                <i class="fa fa-caret-right" style='position:relative; left:-5px' aria-hidden="true"></i> Regular class tests of 10 to 15 questions to improve their application as well as for memorising facts.
              </li>
            </ul>
          </div>
          <div class="py-5">
            <h5 class="text-center font-weight-bold">
            Teaching methodology adopted by us has a holistic approach & generates <br>
            interactive & information classroom discussion, which ensures communication<br> between student & teacher
            </h5>
            <h5 class="text-center font-weight-bold">
            We have a competitive environment with personalize attention to analyze student performance
            </h5>
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
      // Intersection Observer to trigger the animation
      const animatedSections = document.querySelectorAll('.animated-section');
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, {
        threshold: 0.5
      }); // Adjust the threshold as needed
      animatedSections.forEach(section => {
        observer.observe(section);
      });
    </script>
  </body>
</html>