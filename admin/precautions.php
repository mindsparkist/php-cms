<?php
    $page = 'precautions';
    include 'partials/header.php';
    include 'connection_admin.php';
    if(isset($_POST['update'])){
      // $file_name = $_FILES['img1_back']['name'];
      // $file_tmp = $_FILES['img1_back']['tmp_name'];
      // move_uploaded_file($file_tmp,"upload/".$file_name);

      $title1 = $_POST['title1'];
      $img1 = $_POST['img1'];
      $pnt1_limg1 = $_POST['pnt1_limg1'];
      $pnt1_title1 = $_POST['pnt1_title1'];
      $pnt1_desc1 = $_POST['pnt1_desc1'];
      $pnt1_rimg1 = $_POST['pnt1_rimg1'];
      $pnt2_title2 = $_POST['pnt2_title2'];
      $pnt2_desc2 = $_POST['pnt2_desc2'];
      $pnt2_rimg2 = $_POST['pnt2_rimg2'];
      $pnt3_limg3 = $_POST['pnt3_limg3'];
      $pnt3_title3 = $_POST['pnt3_title3'];
      $pnt3_desc3 = $_POST['pnt3_desc3'];
      $title2 = $_POST['title2'];
      $sd = $_POST['sd'];
      $snd = $_POST['snd'];
      $sd_pnt1_title1 = $_POST['sd_pnt1_title1'];
      $sd_pnt1_desc1 = $_POST['sd_pnt1_desc1'];
      $sd_pnt1_limg1 = $_POST['sd_pnt1_limg1'];
      $sd_pnt2_title2 = $_POST['sd_pnt2_title2'];
      $sd_pnt2_desc2 = $_POST['sd_pnt2_desc2'];
      $sd_pnt2_rimg2 = $_POST['sd_pnt2_rimg2'];
      $sd_pnt3_limg3 = $_POST['sd_pnt3_limg3'];
      $sd_pnt3_title3 = $_POST['sd_pnt3_title3'];
      $sd_pnt3_desc3 = $_POST['sd_pnt3_desc3'];
      $snd_pnt1_limg1 = $_POST['snd_pnt1_limg1'];
      $snd_pnt1_title1 = $_POST['snd_pnt1_title1'];
      $snd_pnt1_desc1 = $_POST['snd_pnt1_desc1'];
      $snd_pnt2_title2 = $_POST['snd_pnt2_title2'];
      $snd_pnt2_desc2 = $_POST['snd_pnt2_desc2'];
      $snd_pnt3_rimg3 = $_POST['snd_pnt3_rimg3'];
      $snd_pnt3_limg3 = $_POST['snd_pnt3_limg3'];
      $snd_pnt3_title3 = $_POST['snd_pnt3_title3'];
      $snd_pnt3_desc3 = $_POST['snd_pnt3_desc3'];


    $query = "UPDATE `precaution` SET `title1`='$title1',`img1`='$img1',`pnt1_limg1`='$pnt1_limg1',`pnt1_title1`='$pnt1_title1',`pnt1_desc1`='$pnt1_desc1',`pnt1_rimg1`='$pnt1_rimg1',`pnt2_title2`='$pnt2_title2',`pnt2_desc2`='$pnt2_desc2',`pnt2_rimg2`='$pnt2_rimg2',`pnt3_limg3`='$pnt3_limg3',`pnt3_title3`='$pnt3_title3',`pnt3_desc3`='$pnt3_desc3',`title2`='$title2',`sd`='$sd',`snd`='$snd',`sd_pnt1_title1`='$sd_pnt1_title1',`sd_pnt1_desc1`='$sd_pnt1_desc1',`sd_pnt1_limg1`='$sd_pnt1_limg1',`sd_pnt2_title2`='$sd_pnt2_title2',`sd_pnt2_desc2`='$sd_pnt2_desc2',`sd_pnt2_rimg2`='$sd_pnt2_rimg2',`sd_pnt3_limg3`='$sd_pnt3_limg3',`sd_pnt3_title3`='$sd_pnt3_title3',`sd_pnt3_desc3`='$sd_pnt3_desc3',`snd_pnt1_limg1`='$snd_pnt1_limg1',`snd_pnt1_title1`='$snd_pnt1_title1',`snd_pnt1_desc1`='$snd_pnt1_desc1',`snd_pnt2_title2`='$snd_pnt2_title2',`snd_pnt2_desc2`='$snd_pnt2_desc2',`snd_pnt3_rimg3`='$snd_pnt3_rimg3',`snd_pnt3_limg3`='$snd_pnt3_limg3',`snd_pnt3_title3`='$snd_pnt3_title3',`snd_pnt3_desc3`='$snd_pnt3_desc3' WHERE id=1";
    $result = mysqli_query($conn,$query);
    
    header('Location: precautions.php');
    }else {
      ?>
    <!-- Container -->
    <body class="content_body">
    <div class="container" style="margin-top:25px;">
    <?php
            include 'connection_admin.php';
          $sql= mysqli_query($conn,"SELECT `title1`, `img1`, `pnt1_limg1`, `pnt1_title1`, `pnt1_desc1`, `pnt1_rimg1`, `pnt2_title2`, `pnt2_desc2`, `pnt2_rimg2`, `pnt3_limg3`, `pnt3_title3`, `pnt3_desc3`, `title2`, `sd`, `snd`, `sd_pnt1_title1`, `sd_pnt1_desc1`, `sd_pnt1_limg1`, `sd_pnt2_title2`, `sd_pnt2_desc2`, `sd_pnt2_rimg2`, `sd_pnt3_limg3`, `sd_pnt3_title3`, `sd_pnt3_desc3`, `snd_pnt1_limg1`, `snd_pnt1_title1`, `snd_pnt1_desc1`, `snd_pnt2_title2`, `snd_pnt2_desc2`, `snd_pnt3_rimg3`, `snd_pnt3_limg3`, `snd_pnt3_title3`, `snd_pnt3_desc3` FROM `precaution` WHERE `id`=1");


          
            list($title1, $img1, $pnt1_limg1, $pnt1_title1, $pnt1_desc1, $pnt1_rimg1, $pnt2_title2, $pnt2_desc2, $pnt2_rimg2, $pnt3_limg3, $pnt3_title3, $pnt3_desc3, $title2, $sd, $snd, $sd_pnt1_title1, $sd_pnt1_desc1, $sd_pnt1_limg1, $sd_pnt2_title2, $sd_pnt2_desc2, $sd_pnt2_rimg2, $sd_pnt3_limg3, $sd_pnt3_title3, $sd_pnt3_desc3, $snd_pnt1_limg1, $snd_pnt1_title1, $snd_pnt1_desc1, $snd_pnt2_title2, $snd_pnt2_desc2, $snd_pnt3_rimg3, $snd_pnt3_limg3, $snd_pnt3_title3, $snd_pnt3_desc3)=mysqli_fetch_row($sql);
          ?>
      <form action="" method="post" enctype="multipart/form-data">
        <!--2 title1 -->
        <div class="form-group">
          <label for="">Title 1</label>
          <input
            type="text"
            class="form-control"
            name="title1"
            value="<?php echo"$title1";?>"
          />
        </div>
        <!--3 img1  -->
        <div class="form-group">
          <label>Background Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--4 pnt1_limg1  -->
        <div class="form-group">
          <label>Point1 Left Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--5 pnt1_title1 -->
        <div class="form-group">
          <label for="">Point1 Title1</label>
          <input
            type="text"
            class="form-control"
            name="pnt1_title1"
            value="<?php echo"$pnt1_title1";?>"
          />
        </div>
        <!--6 pnt1_desc1 -->
        <div class="form-group">
          <label for=""> Point1 Description1</label>
          <textarea
            class="form-control"
            name="pnt1_desc1"
            rows="3"
          ><?php echo"$pnt1_desc1";?></textarea>
        </div>
        <!--7 pnt1_rimg1  -->
        <div class="form-group">
          <label>Point1 right Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>

        <!--8 pnt2_title2 -->
        <div class="form-group">
          <label for="">Point2 Title2</label>
          <input
            type="text"
            class="form-control"
            name="pnt2_title2"
            value="<?php echo"$pnt2_title2";?>"
          />
        </div>
        <!--9 pnt2_desc2 -->
        <div class="form-group">
          <label for=""> Point2 Description2</label>
          <textarea
            class="form-control"
            name="pnt2_desc2"
            rows="3"
          ><?php echo"$pnt2_desc2";?></textarea>
        </div>
        <!--10 pnt2_rimg2  -->
        <div class="form-group">
          <label>Point2 right Image2</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--11 pnt3_limg3  -->
        <div class="form-group">
          <label>Point3 Left Image3</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--12 pnt3_title3 -->
        <div class="form-group">
          <label for="">Point3 Title3</label>
          <input
            type="text"
            class="form-control"
            name="pnt3_title3"
            value="<?php echo"$pnt3_title3";?>"
          />
        </div>
        <!--13 pnt3_desc3 -->
        <div class="form-group">
          <label for=""> Point3 Description3</label>
          <textarea
            class="form-control"
            name="pnt3_desc3"
            rows="3"
          ><?php echo"$pnt3_desc3";?></textarea>
        </div>
        <!--14 title2 -->
        <div class="form-group">
          <label for="">Title 2</label>
          <input
            type="text"
            class="form-control"
            name="title2"
            value="<?php echo"$title2";?>"
          />
        </div>
        <!--15 sd -->
        <div class="form-group">
          <label for="">Should</label>
          <input
            type="text"
            class="form-control"
            name="sd"
            value="<?php echo"$sd";?>"
          />
        </div>
        <!--16 snd -->
        <div class="form-group">
          <label for="">Should Not</label>
          <input
            type="text"
            class="form-control"
            name="snd"
            value="<?php echo"$snd";?>"
          />
        </div>

        <!--17 sd_pnt1_title1 -->
        <div class="form-group">
          <label for="">Should Point1 Title1</label>
          <input
            type="text"
            class="form-control"
            name="sd_pnt1_title1"
            value="<?php echo"$sd_pnt1_title1";?>"
          />
        </div>
        <!--18 sd_pnt1_desc1 -->
        <div class="form-group">
          <label for="">Should Point1 Description</label>
          <textarea
            class="form-control"
            name="sd_pnt1_desc1"
            rows="3"
          ><?php echo"$sd_pnt1_desc1";?></textarea>
        </div>
        <!--19 sd_pnt1_limg1  -->
        <div class="form-group">
          <label>Should Point1 Left Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>

        <!--20 sd_pnt2_title2 -->
        <div class="form-group">
          <label for="">Should Point2 Title2</label>
          <input
            type="text"
            class="form-control"
            name="sd_pnt2_title2"
            value="<?php echo"$sd_pnt2_title2";?>"
          />
        </div>
        <!--21 sd_pnt2_desc2 -->
        <div class="form-group">
          <label for="">Should Point2 Description2</label>
          <textarea
            class="form-control"
            name="sd_pnt2_desc2"
            rows="3"
          ><?php echo"$sd_pnt2_desc2";?></textarea>
        </div>
        <!--22 sd_pnt2_rimg2  -->
        <div class="form-group">
          <label>Should Point2 Right Image2</label>
          <input type="file" class="form-control" name="image" />
        </div>

        <!--23 sd_pnt3_limg3  -->
        <div class="form-group">
          <label>Should Point3 Left Image2</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--24 sd_pnt3_title3 -->
        <div class="form-group">
          <label for="">Should Point3 Title3</label>
          <input
            type="text"
            class="form-control"
            name="sd_pnt3_title3"
            value="<?php echo"$sd_pnt3_title3";?>"
          />
        </div>
        <!--25 sd_pnt3_desc3 -->
        <div class="form-group">
          <label for="">Should Point3 Description3</label>
          <textarea
            class="form-control"
            name="sd_pnt3_desc3"
            rows="3"
          ><?php echo"$sd_pnt3_desc3";?></textarea>
        </div>

        <!--26 snd_pnt1_limg1  -->
        <div class="form-group">
          <label>Should Not Point1 Left Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--27 snd_pnt1_title1 -->
        <div class="form-group">
          <label for="">Should Not Point1 Title1</label>
          <input
            type="text"
            class="form-control"
            name="snd_pnt1_title1"
            value="<?php echo"$snd_pnt1_title1";?>"
          />
        </div>
        <!--28 snd_pnt1_desc1 -->
        <div class="form-group">
          <label for="">Should Not Point1 Description1</label>
          <textarea
            class="form-control"
            name="snd_pnt1_desc1"
            rows="3"
          ><?php echo"$snd_pnt1_desc1";?></textarea>
        </div>
        <!--29 snd_pnt2_title2 -->
        <div class="form-group">
          <label for="">Should Not Point2 Title2</label>
          <input
            type="text"
            class="form-control"
            name="snd_pnt2_title2"
            value="<?php echo"$snd_pnt2_title2";?>"
          />
        </div>
        <!--30 snd_pnt2_desc2 -->
        <div class="form-group">
          <label for="">Should Not Point2 Description2</label>
          <textarea
            class="form-control"
            name="snd_pnt2_desc2"
            rows="3"
          ><?php echo"$snd_pnt2_desc2";?></textarea>
        </div>
        <!--31 snd_pnt3_rimg3  -->
        <div class="form-group">
          <label>Should Not Point3 Right Image3</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--32 snd_pnt3_limg3  -->
        <div class="form-group">
          <label>Should Not Point3 Left Image3</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--33 snd_pnt3_title3 -->
        <div class="form-group">
          <label for="">Should Not Point3 Title3</label>
          <input
            type="text"
            class="form-control"
            name="snd_pnt3_title3"
            value="<?php echo"$snd_pnt3_title3";?>"
          />
        </div>
        <!--34 snd_pnt3_desc3 -->
        <div class="form-group">
          <label for="">Should Not Point3 Description3</label>
          <textarea
            class="form-control"
            name="snd_pnt3_desc3"
            rows="3"
          ><?php echo"$snd_pnt3_desc3";?></textarea>
        </div>
        <!-- submit button -->
        <input type="submit" class="btn btn-outline-success mt-3" value="UPDATE" name="update">
      <br><br>
      </form>
    </div>
      
        <!-- End Container -->
<?php
    include 'partials/footer.php';
?> 
<?php } ?>