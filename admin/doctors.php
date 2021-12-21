<?php
    $page = 'doctors';
    include 'partials/header.php';
    include 'connection_admin.php';
    if(isset($_POST['update'])){
      // $file_name = $_FILES['img1_back']['name'];
      // $file_tmp = $_FILES['img1_back']['tmp_name'];
      // move_uploaded_file($file_tmp,"upload/".$file_name);

      $subtitle1 = $_POST['subtitle1'];
      // $img_back1 = $_POST['img_back1'];
      // $img1 = $_POST['img1'];
      $service_title1 = $_POST['service_title1'];
      $service_subtitle1 = $_POST['service_subtitle1'];
      $service_title2 = $_POST['service_title2'];
      $service_subtitle2 = $_POST['service_subtitle2'];
      $service_title3 = $_POST['service_title3'];
      $service_subtitle3 = $_POST['service_subtitle3'];
      // $img2 = $_POST['img2'];
      // $gallary_img1 = $_POST['gallary_img1'];
      // $gallary_img2 = $_POST['gallary_img2'];
      // $gallary_img3 = $_POST['gallary_img3'];
      // $gallary_img4 = $_POST['gallary_img4'];
      // $gallary_img5 = $_POST['gallary_img5'];
      // $gallary_img6 = $_POST['gallary_img6'];
      // $img_back2 = $_POST['img_back2'];

      // $expt_img1 = $_POST['expt_img1'];
      $expt_name1 = $_POST['expt_name1'];
      $expt_qul1 = $_POST['expt_qul1'];
      $expt_add1 = $_POST['expt_add1'];

      // $expt_img2 = $_POST['expt_img2'];
      $expt_name2 = $_POST['expt_name2'];
      $expt_qul2 = $_POST['expt_qul2'];
      $expt_add2 = $_POST['expt_add2'];

      // $expt_img3 = $_POST['expt_img3'];
      $expt_name3 = $_POST['expt_name3'];
      $expt_qul3 = $_POST['expt_qul3'];
      $expt_add3 = $_POST['expt_add3'];

      // $expt_img4 = $_POST['expt_img4'];
      $expt_name4 = $_POST['expt_name4'];
      $expt_qul4 = $_POST['expt_qul4'];
      $expt_add4 = $_POST['expt_add4'];

      // $expt_img5 = $_POST['expt_img5'];
      $expt_name5 = $_POST['expt_name5'];
      $expt_qul5 = $_POST['expt_qul5'];
      $expt_add5 = $_POST['expt_add5'];

      // $expt_img6 = $_POST['expt_img6'];
      $expt_name6 = $_POST['expt_name6'];
      $expt_qul6 = $_POST['expt_qul6'];
      $expt_add6 = $_POST['expt_add6'];


    $query = "UPDATE `doctors` SET `img_back1`='$img_back1',`img1`='$img1',`subtitle1`='$subtitle1',`service_title1`='$service_title1',`service_subtitle1`='$service_subtitle1',`service_title2`='$service_title2',`service_subtitle2`='$service_subtitle2',`service_title3`='$service_title3',`service_subtitle3`='$service_subtitle3',`img2`='$img2',`gallary_img1`='$gallary_img1',`gallary_img2`='$gallary_img2',`gallary_img3`='$gallary_img3',`gallary_img4`='$gallary_img4',`gallary_img5`='$gallary_img5',`gallary_img6`='$gallary_img6',`img_back2`='$img_back2',`expt_img1`='$expt_img1',`expt_name1`='$expt_name1',`expt_qul1`='$expt_qul1',`expt_add1`='$expt_add1',`expt_img2`='$expt_img2',`expt_name2`='$expt_name2',`expt_qul2`='$expt_qul2',`expt_add2`='$expt_add2',`expt_img3`='$expt_img3',`expt_name3`='$expt_name3',`expt_qul3`='$expt_qul3',`expt_add3`='$expt_add3',`expt_img4`='$expt_img4',`expt_name4`='$expt_name4',`expt_qul4`='$expt_qul4',`expt_add4`='$expt_add4',`expt_img5`='$expt_img5',`expt_name5`='$expt_name5',`expt_qul5`='$expt_qul5',`expt_add5`='$expt_add5',`expt_img6`='$expt_img6',`expt_name6`='$expt_name6',`expt_qul6`='$expt_qul6',`expt_add6`='$expt_add6`' WHERE id=1";
    $result = mysqli_query($conn,$query);
    
    header('Location: doctors.php');
    }else {
      ?>
    <!-- Container -->
    <body class="content_body">
    <div class="container" style="margin-top:25px;">
    <?php
            include 'connection_admin.php';
          $sql= mysqli_query($conn,"SELECT `img_back1`, `img1`, `subtitle1`, `service_title1`, `service_subtitle1`, `service_title2`, `service_subtitle2`, `service_title3`, `service_subtitle3`, `img2`, `gallary_img1`, `gallary_img2`, `gallary_img3`, `gallary_img4`, `gallary_img5`, `gallary_img6`, `img_back2`, `expt_img1`, `expt_name1`, `expt_qul1`, `expt_add1`, `expt_img2`, `expt_name2`, `expt_qul2`, `expt_add2`, `expt_img3`, `expt_name3`, `expt_qul3`, `expt_add3`, `expt_img4`, `expt_name4`, `expt_qul4`, `expt_add4`, `expt_img5`, `expt_name5`, `expt_qul5`, `expt_add5`, `expt_img6`, `expt_name6`, `expt_qul6`, `expt_add6` FROM `doctors` WHERE `id`=1");


          
            list($img_back1, $img1, $subtitle1, $service_title1, $service_subtitle1, $service_title2, $service_subtitle2, $service_title3, $service_subtitle3, $img2, $gallary_img1, $gallary_img2, $gallary_img3, $gallary_img4, $gallary_img5, $gallary_img6, $img_back2, $expt_img1, $expt_name1, $expt_qul1, $expt_add1, $expt_img2, $expt_name2, $expt_qul2, $expt_add2, $expt_img3, $expt_name3, $expt_qul3, $expt_add3, $expt_img4, $expt_name4, $expt_qul4, $expt_add4, $expt_img5, $expt_name5, $expt_qul5, $expt_add5, $expt_img6, $expt_name6, $expt_qul6, $expt_add6)=mysqli_fetch_row($sql);
          ?>
      <form action="" method="post" enctype="multipart/form-data">
        <!--2 img_back1  -->
        <div class="form-group">
          <label>Background Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--3 img1  -->
        <div class="form-group">
          <label>Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--4 subtitle1 -->
        <div class="form-group">
          <label for="">Sub Title 1</label>
          <input
            type="text"
            class="form-control"
            name="subtitle1"
            value="<?php echo"$subtitle1";?>"
          />
        </div>
        <!--5 service_title1 -->
        <div class="form-group">
          <label for="">Service Title 1</label>
          <input
            type="text"
            class="form-control"
            name="service_title1"
            value="<?php echo"$service_title1";?>"
          />
        </div>
        <!--6 service_subtitle1 -->
        <div class="form-group">
          <label for="">Service Subtitle 1</label>
          <input
            type="text"
            class="form-control"
            name="service_subtitle1"
            value="<?php echo"$service_subtitle1";?>"
          />
        </div>
        <!--7 service_title2 -->
        <div class="form-group">
          <label for="">Service Title 2</label>
          <input
            type="text"
            class="form-control"
            name="service_title2"
            value="<?php echo"$service_title2";?>"
          />
        </div>
        <!--8 service_subtitle2 -->
        <div class="form-group">
          <label for="">Service Subtitle 2</label>
          <input
            type="text"
            class="form-control"
            name="service_subtitle2"
            value="<?php echo"$service_subtitle2";?>"
          />
        </div>
        <!--9 service_title3 -->
        <div class="form-group">
          <label for="">Service Title 3</label>
          <input
            type="text"
            class="form-control"
            name="service_title3"
            value="<?php echo"$service_title3";?>"
          />
        </div>
        <!--10 service_subtitle3 -->
        <div class="form-group">
          <label for="">Service Subtitle 3</label>
          <input
            type="text"
            class="form-control"
            name="service_subtitle3"
            value="<?php echo"$service_subtitle3";?>"
          />
        </div>
        <!--11 img2  -->
        <div class="form-group">
          <label>Image2</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--12 gallary_img1  -->
        <div class="form-group">
          <label>Gallary Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--13 gallary_img2  -->
        <div class="form-group">
          <label>Gallary Image2</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--14 gallary_img3  -->
        <div class="form-group">
          <label>Gallary Image3</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--15 gallary_img4  -->
        <div class="form-group">
          <label>Gallary Image4</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--16 gallary_img5  -->
        <div class="form-group">
          <label>Gallary Image5</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--17 gallary_img6  -->
        <div class="form-group">
          <label>Gallary Image6</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--18 img_back2  -->
        <div class="form-group">
          <label>Background Image2</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--19 expt_img1  -->
        <div class="form-group">
          <label>Expert1 Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--20 expt_name1 -->
        <div class="form-group">
          <label for="">Expert1 Name1</label>
          <input
            type="text"
            class="form-control"
            name="expt_name1"
            value="<?php echo"$expt_name1";?>"
          />
        </div>
        <!--21 expt_qul1 -->
        <div class="form-group">
          <label for="">Expert1 Qualification1</label>
          <input
            type="text"
            class="form-control"
            name="expt_qul1"
            value="<?php echo"$expt_qul1";?>"
          />
        </div>
        <!--22 expt_add1 -->
        <div class="form-group">
          <label for="">Expert1 Address1</label>
          <textarea
            class="form-control"
            name="expt_add1"
            rows="3"
          ><?php echo"$expt_add1";?></textarea>
        </div>

        <!--23 expt_img2  -->
        <div class="form-group">
          <label>Expert2 Image2</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--24 expt_name2 -->
        <div class="form-group">
          <label for="">Expert2 Name2</label>
          <input
            type="text"
            class="form-control"
            name="expt_name2"
            value="<?php echo"$expt_name2";?>"
          />
        </div>
        <!--25 expt_qul2 -->
        <div class="form-group">
          <label for="">Expert2 Qualification2</label>
          <input
            type="text"
            class="form-control"
            name="expt_qul2"
            value="<?php echo"$expt_qul2";?>"
          />
        </div>
        <!--26 expt_add2 -->
        <div class="form-group">
          <label for="">Expert2 Address2</label>
          <textarea
            class="form-control"
            name="expt_add2"
            rows="3"
          ><?php echo"$expt_add2";?></textarea>
        </div>

        <!--27 expt_img3  -->
        <div class="form-group">
          <label>Expert3 Image3</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--28 expt_name3 -->
        <div class="form-group">
          <label for="">Expert3 Name3</label>
          <input
            type="text"
            class="form-control"
            name="expt_name3"
            value="<?php echo"$expt_name3";?>"
          />
        </div>
        <!--29 expt_qul3 -->
        <div class="form-group">
          <label for="">Expert3 Qualification3</label>
          <input
            type="text"
            class="form-control"
            name="expt_qul3"
            value="<?php echo"$expt_qul3";?>"
          />
        </div>
        <!--30 expt_add3 -->
        <div class="form-group">
          <label for="">Expert3 Address3</label>
          <textarea
            class="form-control"
            name="expt_add3"
            rows="3"
          ><?php echo"$expt_add3";?></textarea>
        </div>

        <!--31 expt_img4  -->
        <div class="form-group">
          <label>Expert4 Image4</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--32 expt_name4 -->
        <div class="form-group">
          <label for="">Expert4 Name4</label>
          <input
            type="text"
            class="form-control"
            name="expt_name4"
            value="<?php echo"$expt_name4";?>"
          />
        </div>
        <!--33 expt_qul4 -->
        <div class="form-group">
          <label for="">Expert4 Qualification4</label>
          <input
            type="text"
            class="form-control"
            name="expt_qul4"
            value="<?php echo"$expt_qul4";?>"
          />
        </div>
        <!--34 expt_add4 -->
        <div class="form-group">
          <label for="">Expert4 Address4</label>
          <textarea
            class="form-control"
            name="expt_add4"
            rows="3"
          ><?php echo"$expt_add4";?></textarea>
        </div>

        <!--35 expt_img5  -->
        <div class="form-group">
          <label>Expert5 Image5</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--36 expt_name5 -->
        <div class="form-group">
          <label for="">Expert5 Name5</label>
          <input
            type="text"
            class="form-control"
            name="expt_name5"
            value="<?php echo"$expt_name5";?>"
          />
        </div>
        <!--37 expt_qul5 -->
        <div class="form-group">
          <label for="">Expert5 Qualification5</label>
          <input
            type="text"
            class="form-control"
            name="expt_qul5"
            value="<?php echo"$expt_qul5";?>"
          />
        </div>
        <!--38 expt_add5 -->
        <div class="form-group">
          <label for="">Expert5 Address5</label>
          <textarea
            class="form-control"
            name="expt_add5"
            rows="3"
          ><?php echo"$expt_add5";?></textarea>
        </div>

        <!--39 expt_img6  -->
        <div class="form-group">
          <label>Expert6 Image6</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!--40 expt_name6 -->
        <div class="form-group">
          <label for="">Expert6 Name6</label>
          <input
            type="text"
            class="form-control"
            name="expt_name6"
            value="<?php echo"$expt_name6";?>"
          />
        </div>
        <!--41 expt_qul6 -->
        <div class="form-group">
          <label for="">Expert6 Qualification6</label>
          <input
            type="text"
            class="form-control"
            name="expt_qul6"
            value="<?php echo"$expt_qul6";?>"
          />
        </div>
        <!--42 expt_add6 -->
        <div class="form-group">
          <label for="">Expert6 Address6</label>
          <textarea
            class="form-control"
            name="expt_add6"
            rows="3"
          ><?php echo"$expt_add6";?></textarea>
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
