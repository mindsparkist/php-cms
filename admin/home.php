<?php
    $page = 'home';
    include 'partials/header.php';
    include 'connection_admin.php';
    if(isset($_POST['update'])){
      $title1 = $_POST['title1'];

      $sub_title = $_POST['sub_title'];
            
      if(isset($_FILES['img1_back'])) {
        $img1_back = $_FILES['img1_back'] || null;
        $img1_backPath = '';
        $img1_backPath = 'uploads/' . $img1_back['name'];
        move_uploaded_file($img1_back['tmp_name'], "../uploads/" . $img1_back['name']);
      }

      $title2 = $_POST['title2'];

     if(isset($_FILES['img2'])){
       $img2 = $_FILES['img2'] || null;
       $img2_Path = '';
       $img2_Path = 'uploads/' . $img2['name'];
       move_uploaded_file($img2['tmp_name'], "../uploads/" . $img2['name']);
     }
      $q1 = $_POST['q1'];
      $q1a = $_POST['q1a'];
      $q2 = $_POST['q2'];
      $q2a = $_POST['q2a'];
      $q3 = $_POST['q3'];
      $q3a = $_POST['q3a'];
      $link1 = $_POST['link1'];
      $sub_text1 = $_POST['sub_text1'];
      $sub_text2 = $_POST['sub_text2'];
      $sub_text3 = $_POST['sub_text3'];
      $link2 = $_POST['link2'];
      $title3 = $_POST['title3'];

    $query = "UPDATE `home` SET `title1`='$title1',`sub_title`='$sub_title',`img1_back`='$img1_backPath',`title2`='$title2',`img2` = '$img2_Path',`q1`='$q1',`q1a`='$q1a',`q2`='$q2',`q2a`='$q2a',`q3`='$q3',`q3a`='$q3a',`link1`='$link1',`sub_text1`='$sub_text1',`sub_text2`='$sub_text2',`sub_text3`='$sub_text3',`link2`='$link2',`title3`='$title3' WHERE id='1'";
    $result = mysqli_query($conn,$query);
    
    header('Location: home.php');
    }else{
      ?>
        <!-- Container -->
        <body class="content_body">
          <div class="container" style="margin-top:25px;">
          <?php
            include 'connection_admin.php';
          $sql= mysqli_query($conn,"SELECT `title1`, `sub_title`, `img1_back`, `title2`, `img2`, `q1`, `q1a`, `q2`, `q2a`, `q3`, `q3a`, `img3`, `link1`, `img4_back`, `img5`, `sub_text1`, `sub_text2`, `sub_text3`, `link2`, `title3`, `img6_back` FROM `home` WHERE `id`=1");
            list($title1,$sub_title,$img1_back,$title2,$img2,$q1,$q1a,$q2,$q2a,$q3,$q3a,$img3,$link1,$img4_back,$img5,$sub_text1,$sub_text2,$sub_text3,$link2,$title3,$img6_back)=mysqli_fetch_row($sql);
          ?>
            <form action="home.php" method="post" enctype="multipart/form-data">
              <!-- title1 -->
              <div class="form-group">
                <label for="">Title 1</label>
                <input
                  name="title1"
                  type="text"
                  class="form-control"
                  value="<?php echo"$title1";?>"
                />
              </div>
              <!-- Sub title -->
              <div class="form-group">
                <label for="">sub Title</label>
                <input
                  name="sub_title"
                  type="text"
                  class="form-control"
                  value="<?php echo"$sub_title";?>"
                />
              </div>
              <!-- image  -->
          <?php if (!empty($img1_back)): ?>
            <img src="<?php echo "$img1_back" ?>" class="product-img-view">
           <?php endif; ?>
              <div class="form-group">
                <label>Background Image1</label>
                <input type="file" accept="image/png, image/jpeg" class="form-control" name="img1_back" />
              </div>
              <!-- title2 -->
              <div class="form-group">
                <label for="">Title 2</label>
                <input
                  name="title2"
                  type="text"
                  class="form-control"
                  value="<?php echo"$title2";?>"
                />
              </div>
              <!-- img2 -->
          <?php if (!empty($img2)): ?>
            <img src="<?php echo "$img2" ?>" class="product-img-view">
           <?php endif; ?>
              <div class="form-group">
                <label>Image2</label>
                <input type="file" accept="image/png, image/jpeg" class="form-control" name="img2" />
              </div>
              <!-- q1 -->
              <div class="form-group">
                <label for="">Question 1</label>
                <input
                  name="q1"
                  type="text"
                  class="form-control"
                  value="<?php echo"$q1";?>"
                />
              </div>
              <!-- qna -->
              <div class="form-group">
                <label for="">Ans1</label>
                <textarea class="form-control" name="q1a"><?php echo"$q1a";?></textarea>
              </div>
              <!-- q2 -->
              <div class="form-group">
                <label for="">Question 2</label>
                <input
                  name="q2"
                  type="text"
                  class="form-control"
                  value="<?php echo"$q2";?>"
                />
              </div>
              <!-- qna2 -->
              <div class="form-group">
                <label for="">Ans2</label>
                <textarea class="form-control" name="q2a"><?php echo"$q2a";?></textarea>
              </div>
              <!-- q3 -->
              <div class="form-group">
                <label for="">Question 3</label>
                <input
                name="q3"
                  type="text"
                  class="form-control"
                  value="<?php echo"$q3";?>"
                />
              </div>
              <!-- qn3 -->
              <div class="form-group">
                <label for="">Ans3</label>
                <textarea class="form-control" name="q3a"><?php echo"$q3a";?></textarea>
              </div>
              <!-- img3 -->
              <div class="form-group">
                <label>Image 3 </label>
                <input type="file" class="form-control" name="image" />
              </div>
              <!-- link1 -->
              <div class="form-group">
                <label for="">Link1</label>
                <input
                  name="link1"
                  type="text"
                  class="form-control"
                  value="<?php echo"$link1";?>"
                />
              </div>
              <!-- img4_back -->
              <div class="form-group">
                <label>Background Image 4 </label>
                <input type="file" class="form-control" name="image" />
              </div>
              <!-- img5 -->
              <div class="form-group">
                <label>Image5</label>
                <input type="file" class="form-control" name="image" />
              </div>
              <!-- sub_text1 -->
              <div class="form-group">
                <label for="">Sub Text1</label>
                <input
                  name="sub_text1"
                  type="text"
                  class="form-control"
                  value="<?php echo"$sub_text1";?>"
                />
              </div>
              <!-- sub_txt2 -->
              <div class="form-group">
                <label for="">Sub Text2</label>
                <input
                  name="sub_text2"
                  type="text"
                  class="form-control"
                  value="<?php echo"$sub_text2";?>"
                />
              </div>
              <!-- sub_txt3 -->
              <div class="form-group">
                <label for="">Sub Text3</label>
                <input
                  name="sub_text3"
                  type="text"
                  class="form-control"
                  value="<?php echo"$sub_text3";?>"
                />
              </div>
              <!-- link2 -->
              <div class="form-group">
                <label for="">Link2</label>
                <input
                  name="link2"
                  type="text"
                  class="form-control"
                  value="<?php echo"$link2";?>"
                />
              </div>
              <!-- title3 -->
              <div class="form-group">
                <label for="">Title 3</label>
                <input
                  name="title3"
                  type="text"
                  class="form-control"
                  value="<?php echo"$title3";?>"
                />
              </div>
              <!-- img6_back -->
              <div class="form-group">
                <label>Background Image 6</label>
                <input type="file" class="form-control" name="image" />
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
      <?php
    }
?>

