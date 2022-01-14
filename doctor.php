<?php
    $page = 'doctor';
    include 'partials/header.php';
?>
<?php
        include 'connection_admin.php';
        $sql= mysqli_query($conn,"SELECT `img_back1`, `img1`, `subtitle1`, `service_title1`, `service_subtitle1`, `service_title2`, `service_subtitle2`, `service_title3`, `service_subtitle3`, `img2`, `gallary_img1`, `gallary_img2`, `gallary_img3`, `gallary_img4`, `gallary_img5`, `gallary_img6`, `img_back2`, `expt_img1`, `expt_name1`, `expt_qul1`, `expt_add1`, `expt_img2`, `expt_name2`, `expt_qul2`, `expt_add2`, `expt_img3`, `expt_name3`, `expt_qul3`, `expt_add3`, `expt_img4`, `expt_name4`, `expt_qul4`, `expt_add4`, `expt_img5`, `expt_name5`, `expt_qul5`, `expt_add5`, `expt_img6`, `expt_name6`, `expt_qul6`, `expt_add6` FROM `doctors` WHERE `id`=1");


          
        list($img_back1, $img1, $subtitle1, $service_title1, $service_subtitle1, $service_title2, $service_subtitle2, $service_title3, $service_subtitle3, $img2, $gallary_img1, $gallary_img2, $gallary_img3, $gallary_img4, $gallary_img5, $gallary_img6, $img_back2, $expt_img1, $expt_name1, $expt_qul1, $expt_add1, $expt_img2, $expt_name2, $expt_qul2, $expt_add2, $expt_img3, $expt_name3, $expt_qul3, $expt_add3, $expt_img4, $expt_name4, $expt_qul4, $expt_add4, $expt_img5, $expt_name5, $expt_qul5, $expt_add5, $expt_img6, $expt_name6, $expt_qul6, $expt_add6)=mysqli_fetch_row($sql);
          ?>
    <!-- home section starts -->
    <section class="doctor">
        <div class="container">
            <div class="content">
                <div class="content1">
                    <img src="images/Doctor1.png" alt="">
                </div>
                <div class="content2">
                    <h1><span>stay</span>safe,<span>stay</span>healthy.</h1>
                    <h3><?php echo"$subtitle1";?></h3>
                    <a href="/MinorProject_Demo/comming_soon.php"><button class="btn">learn more</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- home section ends -->
    <!-- about section starts -->
    <section class="doctor-about">
        <div class="about-para" id="our_servicer" ><p>'Our <span>Facilities</span> '</p></div>
        <div class="about-container">
            <div class="about-content">
                <div class="content-1">
                    <div class="about-box">
                        <i class="fas fa-ambulance"></i><h2><?php echo"$service_title1";?></h3>
                        <p><?php echo"$service_subtitle1";?></p>
                    </div>
                    <div class="about-box">
                        <i class="fas fa-procedures"></i><h2><?php echo"$service_title2";?></h3>
                        <p><?php echo"$service_subtitle2";?></p>
                    </div>
                    <div class="about-box">
                        <i class="fas fa-stethoscope"></i><h2><?php echo"$service_title3";?></h3>
                        <p><?php echo"$service_subtitle3";?></p>
                    </div>
                </div>
                <div class="about-content2">
                    <div class="about-img">
                        <img src="images/Doctor2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->
    <!-- our gallery starts-->
    <!-- our gallery starts-->
    <section class="our-gallery">
    <div class="about-para"><p>'Our <span>Gallery</span>'</p></div>
            <div class="gallery-content">
                <div class="gallery-content1">

                    <div class="images">
                      <a href="images/gallery1.jpg" data-lightbox="image-1" data-title="My caption">
                      <img src="images/gallery1.jpg"  alt=""></div></a>

                    <div class="images">
                        <a href="images/gallery2.jpg" data-lightbox="image-1" data-title="My caption">
                        <img src="images/gallery2.jpg" alt=""></div></a>

                    <div class="images">
                        <a href="images/gallery3.jpg" data-lightbox="image-1" data-title="My caption">
                        <img src="images/gallery3.jpg" alt=""></div></a>
                </div>

                <div class="gallery-content1">

                    <div class="images">
                        <a href="images/gallery4.jpg" data-lightbox="image-1" data-title="My caption">
                        <img src="images/gallery4.jpg" alt=""></div></a>
                    <div class="images">
                        <a href="images/gallery5.jpg" data-lightbox="image-1" data-title="My caption">
                        <img src="images/gallery5.jpg" alt=""></div></a>
                    <div class="images">
                        <a href="images/gallery6.jpg" data-lightbox="image-1" data-title="My caption">
                        <img src="images/gallery6.jpg" alt=""></div></a>
                </div>
            </div>
    </section>
    <!-- our gallery ends-->
    <!-- our doctors starts-->
    <section class="doctors">
    <div class="about-para">
        <p>meet our <span>experts</span></p>
    </div>
    <div class="box-container">
        <div class="box">
            <a href="images/doc-1.jpg" data-lightbox="doc1" data-title="My caption">
            <img src="images/doc-1.jpg" alt=""></a>
            <!-- expert1 -->
            <h3><?php echo"$expt_name1";?></h3>
            <span><?php echo"$expt_qul1";?></span>
            <div class="share">
                <a href="#" class="fas fa-home"></a>
                <p style="margin-top:20px"><?php echo"$expt_add1";?></p>
            </div>
        </div>
        <div class="box">
            <a href="images/doc-2.jpg" data-lightbox="doc1" data-title="My caption">
            <img src="images/doc-2.jpg" alt=""></a>
            <!-- expert2 -->
            <h3><?php echo"$expt_name2";?></h3>
            <span><?php echo"$expt_qul2";?></span>
            <div class="share">
                <a href="#" class="fas fa-home"></a>
                <p style="margin-top:20px"><?php echo"$expt_add2";?></p>
            </div>
        </div>
        <div class="box">
            <a href="images/doc-3.jpg" data-lightbox="doc1" data-title="My caption">
            <img src="images/doc-3.jpg" alt=""></a>
            <!-- expert3 -->
            <h3><?php echo"$expt_name3";?></h3>
            <span><?php echo"$expt_qul3";?></span>
            <div class="share">
                <a href="#" class="fas fa-home"></a>
                <p style="margin-top:20px"><?php echo"$expt_add3";?></p>
            </div>
        </div>
        <div class="box">
            <a href="images/doc-4.jpg" data-lightbox="doc1" data-title="My caption">
            <img src="images/doc-4.jpg" alt=""></a>
            <!-- expert4 -->
            <h3><?php echo"$expt_name4";?></h3>
            <span><?php echo"$expt_qul4";?></span>
            <div class="share">
                <a href="#" class="fas fa-home"></a>
                <p style="margin-top:20px">
                    <?php echo"$expt_add4";?></p>
            </div>
        </div>
        <div class="box">
            <a href="images/doc-5.jpg" data-lightbox="doc1" data-title="My caption">
            <img src="images/doc-5.jpg" alt=""></a>
            <!-- expert5 -->
            <h3><?php echo"$expt_name5";?></h3>
            <span><?php echo"$$expt_qul5";?></span>
            <div class="share">
                <a href="#" class="fas fa-home"></a>
                <p style="margin-top:20px"><?php echo"$expt_add5";?></p>
            </div>
        </div>
        <div class="box">
            <a href="images/doc-6.jpg" data-lightbox="doc1" data-title="My caption">
            <img src="images/doc-6.jpg" alt=""></a>
            <!-- expert6 -->
            <h3><?php echo"$expt_name6";?></h3>
            <span><?php echo"$expt_qul6";?></span>
            <div class="share">
                <a href="#" class="fas fa-home"></a>
                <p style="margin-top:20px"><?php echo"$expt_add6";?></p>
            </div>
        </div>

    </div>
    </section>
    <!-- our doctors ends -->
<?php
     include 'partials/footer.php';
?>