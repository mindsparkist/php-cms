<?php
    $page = 'precaution';
    include 'partials/header.php';
?>
<?php
            include 'connection_admin.php';
          $sql= mysqli_query($conn,"SELECT `title1`, `img1`, `pnt1_limg1`, `pnt1_title1`, `pnt1_desc1`, `pnt1_rimg1`, `pnt2_title2`, `pnt2_desc2`, `pnt2_rimg2`, `pnt3_limg3`, `pnt3_title3`, `pnt3_desc3`, `title2`, `sd`, `snd`, `sd_pnt1_title1`, `sd_pnt1_desc1`, `sd_pnt1_limg1`, `sd_pnt2_title2`, `sd_pnt2_desc2`, `sd_pnt2_rimg2`, `sd_pnt3_limg3`, `sd_pnt3_title3`, `sd_pnt3_desc3`, `snd_pnt1_limg1`, `snd_pnt1_title1`, `snd_pnt1_desc1`, `snd_pnt2_title2`, `snd_pnt2_desc2`, `snd_pnt3_rimg3`, `snd_pnt3_limg3`, `snd_pnt3_title3`, `snd_pnt3_desc3` FROM `precaution` WHERE `id`=1");
            list($title1, $img1, $pnt1_limg1, $pnt1_title1, $pnt1_desc1, $pnt1_rimg1, $pnt2_title2, $pnt2_desc2, $pnt2_rimg2, $pnt3_limg3, $pnt3_title3, $pnt3_desc3, $title2, $sd, $snd, $sd_pnt1_title1, $sd_pnt1_desc1, $sd_pnt1_limg1, $sd_pnt2_title2, $sd_pnt2_desc2, $sd_pnt2_rimg2, $sd_pnt3_limg3, $sd_pnt3_title3, $sd_pnt3_desc3, $snd_pnt1_limg1, $snd_pnt1_title1, $snd_pnt1_desc1, $snd_pnt2_title2, $snd_pnt2_desc2, $snd_pnt3_rimg3, $snd_pnt3_limg3, $snd_pnt3_title3, $snd_pnt3_desc3)=mysqli_fetch_row($sql);
          ?>
<div class="main">
        <!--Heading-->
        <div class="heading">
            <h1><?php echo"$title1";?></h1>
        </div>
        <!-- Big-Image -->
        <div class="bigimage"><img src="./images/Medical webinar on coronavirus2.png " alt=""></div>
        <!-- ----------- Points ----------- -->
        <!--1-->
        <div class="point1">
            <div class="p1"> <img src="./images/streamline-icon-nanovaccine@400x400.png" alt=""></div>
            <div class="info1">
                <h2>1.<?php echo"$pnt1_title1";?></h2>
                <p><?php echo"$pnt1_desc1";?></p>
            </div>
            <div class="p2"><img src="./images/vaccine.png" alt=""></div>

        </div>
        <!--2-->
        <div class="point2">

            <div class="info2">
                <h2>2.<?php echo"$pnt2_title2";?></h2>
                <p><?php echo"$pnt2_desc2";?></p>
            </div>


            <div class="p2">
                <img src="./images/Open Peeps - Standing.png" alt="">
            </div>

        </div>
        <!--3-->
        <div class="point3">
            <div class="p1"><img src="./images/tissues.png" alt=""></div>
            <div class="info3">
                <h2>3.<?php echo"$pnt3_title3";?></h2>
                <p><?php echo"$pnt3_desc3";?></p>
            </div>
        </div>
    </div>
    <div class="main">
        <!-- ---------------------------Top Heading--------------------------- -->
        <div class="head">
            <h1><?php echo"$title2";?></h1>
        </div>
        <!-- ---------x-----------------Top Heading--------------x------------ -->

        <!-- ---------------------------Content--------------------------- -->
        <div class="content">
        <!-- ---------Should do--------- -->

            <div class="sdo">
                <div class="heading">
                    <h2><?php echo"$sd";?></h2>
                </div>
                <!-- ---------Points--------- -->
                <!--1-->
                <div class="point1">
                    <div class="image"><img src="./images/Handwash.png" alt=""></div>
                    <div class="txt">
                        <h2><?php echo"$sd_pnt1_title1";?></h2>
                        <p><?php echo"$sd_pnt1_desc1";?></p>
                    </div>
                </div>


                <!--2-->
                <div class="point2">
                    <div class="image"><img src="./images/Mask.png" alt=""></div>
                    <div class="txt">
                        <h2><?php echo"$sd_pnt2_title2";?></h2>
                        <p><?php echo"$sd_pnt2_desc2";?></p>
                    </div>
                </div>

                <!--3-->
                <div class="point3">
                    <div class="image"><img src="./images/healthcheck.png" alt=""></div>
                    <div class="txt">
                        <h2><?php echo"$sd_pnt3_title3";?></h2>
                        <p><?php echo"$sd_pnt3_desc3";?></p>
                    </div>
                </div>
                <!-- ----x----Points---x----- -->
            </div>

            <!-- ----x----Should do---x----- -->
            <!-- ---------Should Not do--------- -->
            <div class="sndo">
                <div class="heading">
                    <h2><?php echo"$snd";?></h2>
                </div>
                <!-- ---------Points--------- -->
                <!--1-->
                <div class="point1">
                    <div class="image"><img src="./images/crowd.png" alt=""></div>
                    <div class="txt">
                        <h2><?php echo"$snd_pnt1_title1";?></h2>
                        <p><?php echo"$snd_pnt1_desc1";?></p>
                    </div>
                </div>
                <!--2-->
                <div class="point2">
                    <div class="image"><img src="./images/AvoidClosecntct.png" alt=""></div>
                    <div class="txt">
                        <h2><?php echo"$snd_pnt2_title2";?></h2>
                        <p><?php echo"$snd_pnt2_desc2";?></p>
                    </div>
                </div>
                <!--3-->
                <!-- <div class="point3">
                    <div class="image"><img src="./images/stop-flight.png" alt=""></div>
                    <div class="txt">
                        <h2>Do not travel unless necessary </h2>
                        <p>The airports and airplanes are where you are most likely to catch an infection.
                            It Is advisable not to travel unless absolutely necessary. </p>
                    </div>
                </div> -->
                <div class="point2">
                    <div class="txt">
                        <h2><?php echo"$snd_pnt3_title3";?></h2>
                        <p><?php echo"$snd_pnt3_desc3";?></p>
                    </div>
                    <div class="image"><img src="./images/stop-flight.png" alt=""></div>
                </div>

                <!-- ----x----Points---x----- -->
            </div>
            <!-- ----x----Should Not do---x----- -->
        </div>
        <!-- ---------x-----------------Content--------------x------------ -->
    </div>
<?php
     include 'partials/footer.php';
?>