<?php
    $page = 'symptoms';
    include 'partials/header.php';
    include 'connection_admin.php';
    if(isset($_POST['update'])){
      // $file_name = $_FILES['img1_back']['name'];
      // $file_tmp = $_FILES['img1_back']['tmp_name'];
      // move_uploaded_file($file_tmp,"upload/".$file_name);

      $title1 = $_POST['title1'];
      $desc1 = $_POST['desc1'];
      $point1 = $_POST['point1'];
      $point2 = $_POST['point2'];
      $point3 = $_POST['point3'];
      $point4 = $_POST['point4'];
      $point5 = $_POST['point5'];
      $img1 = $_POST['img1'];
      $title2 = $_POST['title2'];
      $img2 = $_POST['img2'];
      $img3 = $_POST['img3'];
      $title3 = $_POST['title3'];
      $slimg1 = $_POST['slimg1'];
      $sltitle1 = $_POST['sltitle1'];
      $slsubtitle1 = $_POST['slsubtitle1'];
      $sldesc1 = $_POST['sldesc1'];
      $slimg2 = $_POST['slimg2'];
      $sltitle2 = $_POST['sltitle2'];
      $slsubtitle2 = $_POST['slsubtitle2'];
      $sldesc2 = $_POST['sldesc2'];
      $slimg3 = $_POST['slimg3']; 
      $sltitle3 = $_POST['sltitle3']; 
      $slsubtitle3 = $_POST['slsubtitle3']; 
      $sldesc3 = $_POST['sldesc3']; 
      $title4 = $_POST['title4']; 
      $q1 = $_POST['q1']; 
      $qa1 = $_POST['qa1']; 
      $q2 = $_POST['q2']; 
      $qa2 = $_POST['qa2']; 
      $q3 = $_POST['q3']; 
      $qa3 = $_POST['qa3']; 


    $query = "UPDATE `symptoms` SET `title1`='$title1',`desc1`='$desc1',`point1`='$point1',`point2`='$point2',`point3`='$point3',`point4`='$point4',`point5`='$point5`',`img1`='$img1',`title2`='$title2',`img2`='$img2',`img3`='$img3',`title3`='$title3',`slimg1`='$slimg1',`sltitle1`='$sltitle1',`slsubtitle1`='$slsubtitle1',`sldesc1`='$sldesc1',`slimg2`='$slimg2',`sltitle2`='$sltitle2',`slsubtitle2`='$slsubtitle2',`sldesc2`='$sldesc2',`slimg3`='$slimg3',`sltitle3`='$sltitle3',`slsubtitle3`='$slsubtitle3',`sldesc3`='$sldesc3',`title4`='$title4',`q1`='$q1',`qa1`='$qa1',`q2`='$q2',`qa2`='$qa2',`q3`='$q3',`qa3`='$qa3' WHERE id=1";
    $result = mysqli_query($conn,$query);
    
    header('Location: symptoms.php');
    }else {
      ?>
  <!-- Container -->
  <body class="content_body">
    <div class="container" style="margin-top:25px;">
    <?php
          include 'connection_admin.php';
          $sql= mysqli_query($conn,"SELECT `title1`, `desc1`, `point1`, `point2`, `point3`, `point4`, `point5`, `img1`, `title2`, `img2`, `img3`, `title3`, `slimg1`, `sltitle1`, `slsubtitle1`, `sldesc1`, `slimg2`, `sltitle2`, `slsubtitle2`, `sldesc2`, `slimg3`, `sltitle3`, `slsubtitle3`, `sldesc3`, `title4`, `q1`, `qa1`, `q2`, `qa2`, `q3`, `qa3` FROM `symptoms` WHERE `id`=1");

          list($title1, $desc1, $point1, $point2, $point3, $point4, $point5, $img1, $title2, $img2, $img3, $title3, $slimg1, $sltitle1, $slsubtitle1, $sldesc1, $slimg2, $sltitle2, $slsubtitle2, $sldesc2, $slimg3, $sltitle3, $slsubtitle3, $sldesc3, $title4, $q1, $qa1, $q2, $qa2, $q3, $qa3)=mysqli_fetch_row($sql);
  ?>
      <form action="" method="post" enctype="multipart/form-data">

        <!-- title1 -->
        <div class="form-group">
          <label for="">Title1</label>
          <input
            type="text"
            class="form-control"
            name="title1"
            value="<?php echo"$title1";?>"
          />
        </div>

        <!-- desc1 -->
        <div class="form-group">
          <label for="">Description1</label>
          <textarea
            class="form-control"
            name="desc1"
            rows="3"
          ><?php echo"$desc1";?></textarea>
        </div>
        
        <!-- point1 -->
        <div class="form-group">
          <label for="">Point1</label>
          <input
            type="text"
            class="form-control"
            name="point1"
            value="<?php echo"$point1";?>"
          />
        </div>
        <!-- point2 -->
        <div class="form-group">
          <label for="">Point2</label>
          <input
            type="text"
            class="form-control"
            name="point2"
            value="<?php echo"$point2";?>"
          />
        </div>
        <!-- point3 -->
        <div class="form-group">
          <label for="">Point3</label>
          <input
            type="text"
            class="form-control"
            name="point3"
            value="<?php echo"$point3";?>"
          />
        </div>
        <!-- point4 -->
        <div class="form-group">
          <label for="">Point4</label>
          <input
            type="text"
            class="form-control"
            name="point4"
            value="<?php echo"$point4";?>"
          />
        </div>
        <!-- point5 -->
        <div class="form-group">
          <label for="">Point5</label>
          <input
            type="text"
            class="form-control"
            name="point5"
            value="<?php echo"$point5";?>"
          />
        </div>

        <!-- img1  -->
        <div class="form-group">
          <label>Background Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!-- title2 -->
        <div class="form-group">
          <label for="">Title2</label>
          <input
            type="text"
            class="form-control"
            name="title2"
            value="<?php echo"$title2";?>"
          />
        </div>
        <!-- img2 -->
        <div class="form-group">
          <label>Background Image2</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!-- img3 -->
        <div class="form-group">
          <label>Background Image3</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!-- title3 -->
        <div class="form-group">
          <label for="">Title3</label>
          <input
            type="text"
            class="form-control"
            name="title3"
            value="<?php echo"$title3";?>"
          />
        </div>

        <!-- slimg1 -->
        <div class="form-group">
          <label>Slider Image1</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!-- sltitle1 -->
        <div class="form-group">
          <label for="">Slider Title1</label>
          <input
            type="text"
            class="form-control"
            name="sltitle1"
            value="<?php echo"$sltitle1";?>"
          />
        </div>
        <!-- slsubtitle1 -->
        <div class="form-group">
          <label for="">Slider Subtitle1</label>
          <input
            type="text"
            class="form-control"
            name="slsubtitle1"
            value="<?php echo"$slsubtitle1";?>"
          />
        </div>
        <!-- sldesc1 -->
        <div class="form-group">
          <label for="">Slider Description1</label>
          <textarea
            class="form-control"
            name="sldesc1"
            rows="3"
          ><?php echo"$sldesc1";?></textarea>
        </div>
        <!-- slimg2 -->
        <div class="form-group">
          <label>Slider Image2</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!-- sltitle2 -->
        <div class="form-group">
          <label for="">Slider Title2</label>
          <input
            type="text"
            class="form-control"
            name="sltitle2"
            value="<?php echo"$sltitle2";?>"
          />
        </div>
        <!-- slsubtitle2 -->
        <div class="form-group">
          <label for="">Slider Subtitle2</label>
          <input
            type="text"
            class="form-control"
            name="slsubtitle2"
            value="<?php echo"$slsubtitle2";?>"
          />
        </div>
        <!-- sldesc2 -->
        <div class="form-group">
          <label for="">Slider Description2</label>
          <textarea
            class="form-control"
            name="sldesc2"
            rows="3"
          ><?php echo"$sldesc2";?></textarea>
        </div>
        <!-- slimg3 -->
        <div class="form-group">
          <label>Slider Image3</label>
          <input type="file" class="form-control" name="image" />
        </div>
        <!-- sltitle3 -->
        <div class="form-group">
          <label for="">Slider Title3</label>
          <input
            type="text"
            class="form-control"
            name="sltitle3"
            value="<?php echo"$sltitle3";?>"
          />
        </div>
        <!-- slsubtitle3 -->
        <div class="form-group">
          <label for="">Slider Subtitle3</label>
          <input
            type="text"
            class="form-control"
            name="slsubtitle3"
            value="<?php echo"$slsubtitle3";?>"
          />
        </div>
        <!-- sldesc3 -->
        <div class="form-group">
          <label for="">Slider Description3</label>
          <textarea
            class="form-control"
            name="sldesc3"
            rows="3"
          ><?php echo"$sldesc3";?></textarea>
        </div>
        <!-- title4 -->
        <div class="form-group">
          <label for="">Title4</label>
          <input
            type="text"
            class="form-control"
            name="title4"
            value="<?php echo"$title4";?>"
          />
        </div>
        <!-- q1 -->
        <div class="form-group">
          <label for="">Question1</label>
          <input
            type="text"
            class="form-control"
            name="q1"
            value="<?php echo"$q1";?>"
          />
        </div>
        <!-- qa1 -->
        <div class="form-group">
          <label for="">Answer1</label>
          <textarea
            class="form-control"
            name="qa1"
            rows="3"
          ><?php echo"$qa1";?></textarea>
        </div>
        <!-- q2 -->
        <div class="form-group">
          <label for="">Question2</label>
          <input
            type="text"
            class="form-control"
            name="q2"
            value="<?php echo"$q2";?>"
          />
        </div>
        <!-- qa2 -->
        <div class="form-group">
          <label for="">Answer2</label>
          <textarea
            class="form-control"
            name="qa2"
            rows="3"
          ><?php echo"$qa2";?></textarea>
        </div>
        <!-- q3 -->
        <div class="form-group">
          <label for="">Question3</label>
          <input
            type="text"
            class="form-control"
            name="q3"
            value="<?php echo"$q3";?>"
          />
        </div>
        <!-- qa3 -->
        <div class="form-group">
          <label for="">Answer3</label>
          <textarea
            class="form-control"
            name="qa3"
            rows="3"
          ><?php echo"$qa3";?></textarea>
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
