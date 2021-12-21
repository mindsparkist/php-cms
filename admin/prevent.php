<?php
    $page = 'prevent';
    include 'partials/header.php';
    include 'connection_admin.php';
    if(isset($_POST['update'])){
      // $file_name = $_FILES['img1_back']['name'];
      // $file_tmp = $_FILES['img1_back']['tmp_name'];
      // move_uploaded_file($file_tmp,"upload/".$file_name);

      $subtitle1 = $_POST['subtitle1'];
      $title1 = $_POST['title1'];
      $desc1 = $_POST['desc1'];
      $tctitle = $_POST['tctitle'];
      $tcsubtitle = $_POST['tcsubtitle'];
      $tcimg = $_POST['tcimg'];
      $lctitle = $_POST['lctitle'];
      $lcsubtitle = $_POST['lcsubtitle'];
      $lcimg = $_POST['lcimg'];
      $rctitle = $_POST['rctitle'];
      $rcsubtitle = $_POST['rcsubtitle'];
      $rcimg = $_POST['rcimg'];
      $bctitle = $_POST['bctitle'];
      $bcsubtitle = $_POST['bcsubtitle'];
      $bcimg = $_POST['bcimg'];
      $title2 = $_POST['title2']; 
      $pnp1 = $_POST['pnp1']; 
      $pnp2 = $_POST['pnp2']; 
      $pnp3 = $_POST['pnp3']; 
      $pnp4 = $_POST['pnp4']; 
      $pnp5 = $_POST['pnp5']; 
      $pnp6 = $_POST['pnp6']; 
      $pnp7 = $_POST['pnp7']; 
      $dsc1 = $_POST['dsc1']; 
      $dsc2 = $_POST['dsc2']; 
      $dsc3 = $_POST['dsc3']; 
      $dsc4 = $_POST['dsc4']; 
      $dsc5 = $_POST['dsc5']; 
      $dsc6 = $_POST['dsc6']; 
      $dsc7 = $_POST['dsc7']; 
      $pnpimg = $_POST['pnpimg'];
      $title3 = $_POST['title3']; 
      $subtitle2 = $_POST['subtitle2'];
      $whimg1 = $_POST['whimg1'];
      $whimg2 = $_POST['whimg2'];
      $whimg3 = $_POST['whimg3'];
      $whimg4 = $_POST['whimg4'];
      $whimg5 = $_POST['whimg5'];
      $whimg6 = $_POST['whimg6'];
      $whst1 = $_POST['whst1'];
      $whst2 = $_POST['whst2'];
      $whst3 = $_POST['whst3'];
      $whst4 = $_POST['whst4'];
      $whst5 = $_POST['whst5'];
      $whst6 = $_POST['whst6'];

    $query = "UPDATE `prevent` SET `subtitle1`='$subtitle1',`title1`='$title1',`desc1`='$desc1',`tctitle`='$tctitle',`tcsubtitle`='$tcsubtitle',`tcimg`='$tcimg',`lctitle`='$lctitle',`lcsubtitle`='$lcsubtitle',`lcimg`='$lcimg',`rctitle`='$rctitle',`rcsubtitle`='$rcsubtitle',`rcimg`='$rcimg',`bctitle`='$bctitle',`bcsubtitle`='$bcsubtitle',`bcimg`='$bcimg',`title2`='$title2',`pnp1`='$pnp1',`pnp2`='$pnp2',`pnp3`='$pnp3',`pnp4`='$pnp4',`pnp5`='$pnp5',`pnp6`='$pnp6',`pnp7`='$pnp7',`dsc1`='$dsc1',`dsc2`='$dsc2',`dsc3`='$dsc3',`dsc4`='$dsc4',`dsc5`='$dsc5',`dsc6`='$dsc6',`dsc7`='$dsc7',`pnpimg`='$pnpimg',`title3`='$title3',`subtitle2`='$subtitle2',`whimg1`='$whimg1',`whimg2`='$whimg2',`whimg3`='$whimg3',`whimg4`='$whimg4',`whimg5`='$whimg5',`whimg6`='$whimg6',`whst1`='$whst1',`whst2`='$whst2',`whst3`='$whst3',`whst4`='$whst4',`whst5`='$whst5',`whst6`='$whst6' WHERE id=1";
    $result = mysqli_query($conn,$query);
    
    header('Location: prevent.php');
    }else {
      ?>
      <!-- Container -->
      <body class="content_body">
        <div class="container" style="margin-top:25px;">
        <?php
            include 'connection_admin.php';
          $sql= mysqli_query($conn,"SELECT `subtitle1`, `title1`, `desc1`, `tctitle`, `tcsubtitle`, `tcimg`, `lctitle`, `lcsubtitle`, `lcimg`, `rctitle`, `rcsubtitle`, `rcimg`, `bctitle`, `bcsubtitle`, `bcimg`, `title2`, `pnp1`, `pnp2`, `pnp3`, `pnp4`, `pnp5`, `pnp6`, `pnp7`, `dsc1`, `dsc2`, `dsc3`, `dsc4`, `dsc5`, `dsc6`, `dsc7`, `pnpimg`, `title3`, `subtitle2`, `whimg1`, `whimg2`, `whimg3`, `whimg4`, `whimg5`, `whimg6`, `whst1`, `whst2`, `whst3`, `whst4`, `whst5`, `whst6` FROM `prevent` WHERE `id`=1");


          
            list($subtitle1,$title1,$desc1,$tctitle,$tcsubtitle,$tcimg,$lctitle,$lcsubtitle,$lcimg,$rctitle,$rcsubtitle,$rcimg,$bctitle,$bcsubtitle,$bcimg,$title2,$pnp1,$pnp2,$pnp3,$pnp4,$pnp5,$pnp6,$pnp7,$dsc1,$dsc2,$dsc3,$dsc4,$dsc5,$dsc6,$dsc7,$pnpimg,$title3,$subtitle2,$whimg1,$whimg2,$whimg3,$whimg4,$whimg5,$whimg6,$whst1,$whst2,$whst3,$whst4,$whst5,$whst6)=mysqli_fetch_row($sql);
          ?>
          <form action="" method="post" enctype="multipart/form-data">

            <!-- subtitle1-->
            <div class="form-group">
              <label for="">SubTitlejn,1</label>
              <input
                name="subtitle1"
                type="text"
                class="form-control"
                value="<?php echo"$subtitle1";?>"
              />
            </div>

            <!-- title1 -->
            <div class="form-group">
              <label for="">Title1</label>
              <input
                name="title1"
                type="text"
                class="form-control"
                value="<?php echo"$title1";?>"
              />
            </div>
            
            <!-- desc1 -->
            <div class="form-group">
                <label for="">Description 1</label>
                <textarea class="form-control" name="desc1"><?php echo"$desc1";?></textarea>
              </div>

            <!-- tctitle -->
            <div class="form-group">
              <label for="">Top Cart Title</label>
              <input
                name="tctitle"
                type="text"
                class="form-control"
                value="<?php echo"$tctitle";?>"
              />
            </div>

            
            <!-- tcsubtitle -->
            <div class="form-group">
              <label for="">Top Cart Subtitle</label>
              <input
                name="tcsubtitle"
                type="text"
                class="form-control"
                value="<?php echo"$tcsubtitle";?>"
              />
            </div>
            <!-- tcimg  -->
            <div class="form-group">
              <label>Top Cart Image</label>
              <input type="file" class="form-control" name="image" />
            </div>

            <!-- lctitle -->
            <div class="form-group">
              <label for="">Left Cart Title</label>
              <input
                name="lctitle"
                type="text"
                class="form-control"
                value="<?php echo"$lctitle";?>"
              />
            </div>
            <!-- lcsubtitle -->
            <div class="form-group">
              <label for="">Left Cart Subtitle</label>
              <input
                name="lcsubtitle"
                type="text"
                class="form-control"
                value="<?php echo"$lcsubtitle";?>"
              />
            </div>
            <!-- lcimg  -->
            <div class="form-group">
              <label>Left Cart Image</label>
              <input type="file" class="form-control" name="image" />
            </div>

            <!-- rctitle -->
            <div class="form-group">
              <label for="">Right Cart Title</label>
              <input
                name="rctitle"
                type="text"
                class="form-control"
                value="<?php echo"$rctitle";?>"
              />
            </div>
            <!-- rcsubtitle -->
            <div class="form-group">
              <label for="">Right Cart Subtitle</label>
              <input
                name="rcsubtitle"
                type="text"
                class="form-control"
                value="<?php echo"$rcsubtitle";?>"
              />
            </div>
            <!-- rcimg  -->
            <div class="form-group">
              <label>Right Cart Image</label>
              <input type="file" class="form-control" name="image" />
            </div>

            <!-- bctitle -->
            <div class="form-group">
              <label for="">Bottom Cart Title</label>
              <input
                name="bctitle"
                type="text"
                class="form-control"
                value="<?php echo"$bctitle";?>"
              />
            </div>
            <!-- bcsubtitle -->
            <div class="form-group">
              <label for="">Bottom Cart Subtitle</label>
              <input
                name="bcsubtitle"
                type="text"
                class="form-control"
                value="<?php echo"$bcsubtitle";?>"
              />
            </div>
            <!-- bcimg  -->
            <div class="form-group">
              <label>Bottom Cart Image</label>
              <input type="file" class="form-control" name="image" />
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

            <!-- pnp1 -->
            <div class="form-group">
              <label for="">PNP1</label>
              <input
                name="pnp1"
                type="text"
                class="form-control"
                value="<?php echo"$pnp1";?>"
              />
            </div>
            <!-- pnp2 -->
            <div class="form-group">
              <label for="">PNP2</label>
              <input
                name="pnp2"
                type="text"
                class="form-control"
                value="<?php echo"$pnp2";?>"
              />
            </div>
            <!-- pnp3 -->
            <div class="form-group">
              <label for="">PNP3</label>
              <input
                name="pnp3"
                type="text"
                class="form-control"
                value="<?php echo"$pnp3";?>"
              />
            </div>
            <!-- pnp4 -->
            <div class="form-group">
              <label for="">PNP4</label>
              <input
                name="pnp4"
                type="text"
                class="form-control"
                value="<?php echo"$pnp4";?>"
              />
            </div>
            <!-- pnp5 -->
            <div class="form-group">
              <label for="">PNP5</label>
              <input
                name="pnp5"
                type="text"
                class="form-control"
                value="<?php echo"$pnp5";?>"
              />
            </div>
            <!-- pnp6 -->
            <div class="form-group">
              <label for="">PNP6</label>
              <input
                name="pnp6"
                type="text"
                class="form-control"
                value="<?php echo"$pnp6";?>"
              />
            </div>
            <!-- pnp7 -->
            <div class="form-group">
              <label for="">PNP7</label>
              <input
                name="pnp7"
                type="text"
                class="form-control"
                value="<?php echo"$pnp7";?>"
              />
            </div>

            <!-- dsc1 -->
            <div class="form-group">
              <label for="">PNPDSC1</label>
              <input
                name="dsc1"
                type="text"
                class="form-control"
                value="<?php echo"$dsc1";?>"
              />
            </div>
            <!-- dsc2 -->
            <div class="form-group">
              <label for="">PNPDSC2</label>
              <input
                name="dsc2"
                type="text"
                class="form-control"
                value="<?php echo"$dsc2";?>"
              />
            </div>
            <!-- dsc3 -->
            <div class="form-group">
              <label for="">PNPDSC3</label>
              <input
                name="dsc3"
                type="text"
                class="form-control"
                value="<?php echo"$dsc3";?>"
              />
            </div>
            <!-- dsc4 -->
            <div class="form-group">
              <label for="">PNPDSC4</label>
              <input
                name="dsc4"
                type="text"
                class="form-control"
                value="<?php echo"$dsc4";?>"
              />
            </div>
            <!-- dsc5 -->
            <div class="form-group">
              <label for="">PNPDSC5</label>
              <input
                name="dsc5"
                type="text"
                class="form-control"
                value="<?php echo"$dsc5";?>"
              />
            </div>
            <!-- dsc6 -->
            <div class="form-group">
              <label for="">PNPDSC6</label>
              <input
                name="dsc6"
                type="text"
                class="form-control"
                value="<?php echo"$dsc6";?>"
              />
            </div>
            <!-- dsc7 -->
            <div class="form-group">
              <label for="">PNPDSC7</label>
              <input
                name="dsc7"
                type="text"
                class="form-control"
                value="<?php echo"$dsc7";?>"
              />
            </div>

            <!-- title3 -->
            <div class="form-group">
              <label for="">Title3</label>
              <input
                name="title3"
                type="text"
                class="form-control"
                value="<?php echo"$title3";?>"
              />
            </div>

            <!-- subtitle2-->
            <div class="form-group">
              <label for="">Sub Title 2</label>
              <input
                name="subtitle2"
                type="text"
                class="form-control"
                value="<?php echo"$subtitle2";?>"
              />
            </div>


            <!-- whimg1 -->
            <div class="form-group">
              <label>Wash Hand Image1</label>
              <input type="file" class="form-control" name="image" />
            </div>
            <!-- whimg2 -->
            <div class="form-group">
              <label>Wash Hand Image2</label>
              <input type="file" class="form-control" name="image" />
            </div>
            <!-- whimg3 -->
            <div class="form-group">
              <label>Wash Hand Image3</label>
              <input type="file" class="form-control" name="image" />
            </div>
            <!-- whimg4 -->
            <div class="form-group">
              <label>Wash Hand Image4</label>
              <input type="file" class="form-control" name="image" />
            </div>
            <!-- whimg5 -->
            <div class="form-group">
              <label>Wash Hand Image5</label>
              <input type="file" class="form-control" name="image" />
            </div>
            <!-- whimg6 -->
            <div class="form-group">
              <label>Wash Hand Image6</label>
              <input type="file" class="form-control" name="image" />
            </div>
            <!-- whimg7 -->
            <div class="form-group">
              <label>Wash Hand Image7</label>
              <input type="file" class="form-control" name="image" />
            </div>

            <!-- whst1-->
            <div class="form-group">
              <label for="">Wash Hand Subtitle1</label>
              <input
                name="whst1"
                type="text"
                class="form-control"
                value="<?php echo"$whst1";?>"
              />
            </div>
            <!-- whst2-->
            <div class="form-group">
              <label for="">Wash Hand Subtitle2</label>
              <input
                name="whst2"
                type="text"
                class="form-control"
                value="<?php echo"$whst2";?>"
              />
            </div>
            <!-- whst3-->
            <div class="form-group">
              <label for="">Wash Hand Subtitle3</label>
              <input
                name="whst3"
                type="text"
                class="form-control"
                value="<?php echo"$whst3";?>"
              />
            </div>
            <!-- whst4-->
            <div class="form-group">
              <label for="">Wash Hand Subtitle4</label>
              <input
                name="whst4"
                type="text"
                class="form-control"
                value="<?php echo"$whst4";?>"
              />
            </div>
            <!-- whst5-->
            <div class="form-group">
              <label for="">Wash Hand Subtitle5</label>
              <input
                name="whst5"
                type="text"
                class="form-control"
                value="<?php echo"$whst5";?>"
              />
            </div>
            <!-- whst6-->
            <div class="form-group">
              <label for="">Wash Hand Subtitle6</label>
              <input
                name="whst6"
                type="text"
                class="form-control"
                value="<?php echo"$whst6";?>"
              />
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

