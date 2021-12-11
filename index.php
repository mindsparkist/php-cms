<?php
    $page = 'home';
    include 'partials/header.php';
?>   
<?php
            include 'connection_admin.php';
          $sql= mysqli_query($conn,"SELECT `title1`, `sub_title`, `img1_back`, `title2`, `img2`, `q1`, `q1a`, `q2`, `q2a`, `q3`, `q3a`, `img3`, `link1`, `img4_back`, `img5`, `sub_text1`, `sub_text2`, `sub_text3`, `link2`, `title3`, `img6_back` FROM `home` WHERE `id`=1");
            list($title1,$sub_title,$img1_back,$title2,$img2,$q1,$q1a,$q2,$q2a,$q3,$q3a,$img3,$link1,$img4_back,$img5,$sub_text1,$sub_text2,$sub_text3,$link2,$title3,$img6_back)=mysqli_fetch_row($sql);
?>
<!-- loader -->
<div class="loader-container"><div class="loader"></div></div>
    <!-- home section starts -->
    <section class="home" id="home" style="background-image: url(<?php echo'admin/upload/' . "$img1_back";?>); isolation: isolate;">
        <div class="content">
            <h1><?php echo"$title1";?></h1> 
            <h3><?php echo"$sub_title";?></h3>
            <div><a href="#" onclick="toggle_video()"><span class="fas fa-play-circle"></span></a></div>
        </div>

        <div class="covid19_video">
            <video  id="my-video"
                class="video-js"
                controls
                preload="auto"
                width="800"
                height="500"
                poster="images/apollo.jpg"
                data-setup="{}"
            >
            <source src="video/covid19_video.mp4" type="video/mp4" />
            
         <p class="vjs-no-js">
             To view this video please enable JavaScript, and consider upgrading to a
             web browser that
           <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>
            </video>
            <i class="fas fa-times close_video" onclick="toggle_video()"></i>
        </div>
    </section>
    <!-- home section ends -->
     
    <!-- about section starts -->
    <section class="about" id="about">
        <div class="container">
            <h1><?php echo"$title2";?></h1>
            <div class="content">
                <div class="content-1">
                    <h3><?php echo"$q1";?></h3>
                    <p><?php echo"$q1a";?></p>
                   <h3><?php echo"$q2";?></h3>
                    <p><?php echo"$q2a";?></p>
                   <h3><?php echo"$q3";?></h3>
                    <p><?php echo"$q3a";?></p>
                    <a href="https://en.wikipedia.org/wiki/COVID-19_pandemic_in_India" class="btn" target="_parent"><?php echo"$link1";?></a>
                </div>
                <div class="about-img">
                    <img src="images/about.png" alt="about-pic">
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->
    <!-- protection section starts -->
    <section class="protection">
        <div class="container">
            <div class="content">
                <div class="content1">
                    <img src="images/protection.png" alt="">
                </div>
                <div class="content2">
                    <h4><?php echo"$sub_text1";?></h4>
                    <h2><?php echo"$sub_text2";?></h2>
                    <h2><?php echo"$sub_text3";?></h2>
                    <a href="#" class="btn" target="_parent"><?php echo"$link2";?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- protection section ends -->
    <!-- spreda section starts -->
    <section class="spread" id="spread">
        <h1 class="heading"><?php echo"$title3";?></h1>
        <img src="images/map.png" alt="">
    </section>
    <!-- spread section ends -->
<?php
     include 'partials/footer.php';
?>