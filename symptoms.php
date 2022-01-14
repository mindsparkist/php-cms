<?php
    $page = 'symptoms';
    include 'partials/header.php';
?>  
<?php
          include 'connection_admin.php';
          $sql= mysqli_query($conn,"SELECT `title1`, `desc1`, `point1`, `point2`, `point3`, `point4`, `point5`, `img1`, `title2`, `img2`, `img3`, `title3`, `slimg1`, `sltitle1`, `slsubtitle1`, `sldesc1`, `slimg2`, `sltitle2`, `slsubtitle2`, `sldesc2`, `slimg3`, `sltitle3`, `slsubtitle3`, `sldesc3`, `title4`, `q1`, `qa1`, `q2`, `qa2`, `q3`, `qa3` FROM `symptoms` WHERE `id`=1");

          list($title1, $desc1, $point1, $point2, $point3, $point4, $point5, $img1, $title2, $img2, $img3, $title3, $slimg1, $sltitle1, $slsubtitle1, $sldesc1, $slimg2, $sltitle2, $slsubtitle2, $sldesc2, $slimg3, $sltitle3, $slsubtitle3, $sldesc3, $title4, $q1, $qa1, $q2, $qa2, $q3, $qa3)=mysqli_fetch_row($sql);
  ?>
<div class="container-fluid">
      <p class="mt-15 subtitle">
        <?php echo"$title1";?>
      </p>
      <!-- covid section -->
      <div class="flex">
        <!-- covid main paragraph -->
        <div class="flex-para">
          <p class="para">
            <?php echo"$desc1";?>
          </p>
          <!-- ol list -->
          <main>
            <ol class="gradient-list">
              <li><?php echo"$point1";?></li>
              <li><?php echo"$point2";?></li>
              <li><?php echo"$point3";?></li>
              <li><?php echo"$point4";?></li>
              <li><?php echo"$point5";?></li>
            </ol>
            <!-- btn -->
            <button class="btn-primary">learn More</button>
          </main>
        </div>
        <img
          src="./images/symptoms-img.png"
          class="img-symp"
          alt="Women Having covid problems"
          srcset=""
        />
      </div>
    </div>
    <!-- least common section -->
    <div class="bg-gry">
      <div class="container-fluid">
        <p class="mt-15 headine txt-cen"><?php echo"$title2";?></p>
        <div class="flex">
          <img
            src="./images/main-symp-img.png"
            alt=""
            srcset=""
            class="least-symp1"
          />
          <img
            src="images/Least Common Symptoms.png"
            alt=""
            srcset=""
            class="least-symp"
          />
        </div>
      </div>
    </div>
    <!-- slider -->
    <div class="slider-container">
      <p class="headine txt-cen" style="margin-top: -50px"><?php echo"$title3";?></p>
      <div class="slider owl-carousel">
        <!-- <div class="card-slider">
          <div class="img-slider">
            <img
              src="./images/towfiqu-barbhuiya--jthScuVWT0-unsplash.jpg"
              alt=""
            />
          </div>
          <div class="slider-content">
            <div class="slider-title">Breathing difficulties</div>
            <div class="slider-sub-title">lung damage</div>
            <p>
              Covid-19 Spikes Hold your Lungs For the oxygen and causing
              shortness of breath, cough and other symptoms And Other Things .
            </p>
            <div class="btn-slider">
              
              <button>Read more</button>
            </div>
          </div>
        </div> -->

        <div class="card-slider">
          <div class="img-slider">
            <img
            src="./images/towfiqu-barbhuiya--jthScuVWT0-unsplash.jpg"
              alt=""
            />
          </div>
          <div class="slider-content">
            <div class="slider-sub-title"><?php echo"$sltitle1";?></div>
            <div class="sub-title"><?php echo"$slsubtitle1";?></div>
            <p><?php echo"$sldesc1";?></p>
            <div class="btn-slider">
              
              <button>Read more</button>
            </div>
          </div>
        </div>
        <div class="card-slider">
          <div class="img-slider">
            <img
              src="./images/142525700-old-man-patient-of-alzheimer-disease-thinking-hand-vector-illustration.jpg"
              alt=""
            />
          </div>
          <div class="slider-content">
            <div class="slider-sub-title"><?php echo"$sltitle2";?></div>
            <div class="sub-title"><?php echo"$slsubtitle2";?></div>
            <p><?php echo"$sldesc2";?></p>
            <div class="btn-slider">
              
              <button>Read more</button>
            </div>
          </div>
        </div>
        
        <div class="card-slider">
          <div class="img-slider">
            <img src="./images/istockphoto-528432900-612x612.jpg" alt="" />
          </div>
          <div class="slider-content">
            <div class="slider-sub-title"><?php echo"$sltitle3
			";?></div>
            <div class="sub-title"><?php echo"$slsubtitle3";?></div>
            <p><?php echo"$sldesc3";?></p>
            <div class="btn-slider">
              <!-- https://www.hopkinsmedicine.org/health/conditions-and-diseases/coronavirus/can-coronavirus-cause-heart-damage -->
              <button>Read more</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Common questions -->
    <div class="relative">
      <p class="headine txt-cen1">
        <i class="fas fa-exclamation-triangle"></i>
        <?php echo"$title4";?>
      </p>
      <!-- Accordian -->
      <div class="container-sm">
        <div class="wrapper-accordian">
          <button class="toggle-accordian">
            <?php echo"$q1";?>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="content-accordian">
            <p><?php echo"$qa1";?></p>
          </div>
        </div>
        <div class="wrapper-accordian">
          <button class="toggle-accordian">
            <?php echo"$q2";?>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="content-accordian">
            <p><?php echo"$qa2";?></p>
          </div>
        </div>
        <div class="wrapper-accordian">
          <button class="toggle-accordian">
            <?php echo"$q3";?>
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="content-accordian">
            <p><?php echo"$$qa3";?></p>
          </div>
        </div>
      </div>
    </div>

<?php
     include 'partials/footer.php';
?>