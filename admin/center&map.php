<?php
    $page = 'candm';
    include 'partials/header.php';
    include 'connection_admin.php';
    if(isset($_POST['update'])){
      // $file_name = $_FILES['img1_back']['name'];
      // $file_tmp = $_FILES['img1_back']['tmp_name'];
      // move_uploaded_file($file_tmp,"upload/".$file_name);

      $title1_auto = $_POST['title1_auto'];
      
      $cntr1_title1 = $_POST['cntr1_title1'];
      $cntr1_cvc1 = $_POST['cntr1_cvc1'];
      $cntr1_block1 = $_POST['cntr1_block1'];
      $cntr1_cvcname1 = $_POST['cntr1_cvcname1'];
      $cntr1_cvct1 = $_POST['cntr1_cvct1'];
      $cntr1_vaccinet1 = $_POST['cntr1_vaccinet1'];
      $cntr1_desc1 = $_POST['cntr1_desc1'];

      $cntr2_title2 = $_POST['cntr2_title2'];
      $cntr2_cvc2 = $_POST['cntr2_cvc2'];
      $cntr2_block2 = $_POST['cntr2_block2'];
      $cntr2_cvcname2 = $_POST['cntr2_cvcname2'];
      $cntr2_cvct2 = $_POST['cntr2_cvct2'];
      $cntr2_vaccinet2 = $_POST['cntr2_vaccinet2'];
      $cntr2_desc2 = $_POST['cntr2_desc2'];

      $cntr3_title3 = $_POST['cntr3_title3'];
      $cntr3_cvc3 = $_POST['cntr3_cvc3'];
      $cntr3_block3 = $_POST['cntr3_block3'];
      $cntr3_cvcname3 = $_POST['cntr3_cvcname3'];
      $cntr3_cvct3 = $_POST['cntr3_cvct3'];
      $cntr3_vaccinet3 = $_POST['cntr3_vaccinet3'];
      $cntr3_desc3 = $_POST['cntr3_desc3'];

      $cntr4_title4 = $_POST['cntr4_title4'];
      $cntr4_cvc4 = $_POST['cntr4_cvc4'];
      $cntr4_block4 = $_POST['cntr4_block4'];
      $cntr4_cvcname4 = $_POST['cntr4_cvcname4'];
      $cntr4_cvct4 = $_POST['cntr4_cvct4'];
      $cntr4_vaccinet4 = $_POST['cntr4_vaccinet4'];
      $cntr4_desc4 = $_POST['cntr4_desc4'];

      $cntr5_title5 = $_POST['cntr5_title5'];
      $cntr5_cvc5 = $_POST['cntr5_cvc5'];
      $cntr5_block5 = $_POST['cntr5_block5'];
      $cntr5_cvcname5 = $_POST['cntr5_cvcname5'];
      $cntr5_cvct5 = $_POST['cntr5_cvct5'];
      $cntr5_vaccinet5 = $_POST['cntr5_vaccinet5'];
      $cntr5_desc5 = $_POST['cntr5_desc5'];

      $cntr6_title6 = $_POST['cntr6_title6'];
      $cntr6_cvc6 = $_POST['cntr6_cvc6'];
      $cntr6_block6 = $_POST['cntr6_block6'];
      $cntr6_cvcname6 = $_POST['cntr6_cvcname6'];
      $cntr6_cvct6 = $_POST['cntr6_cvct6'];
      $cntr6_vaccinet6 = $_POST['cntr6_vaccinet6'];
      $cntr6_desc6 = $_POST['cntr6_desc6'];


    $query = "UPDATE `centreandmap` SET `title1_auto`='$title1_auto',`cntr1_title1`='$cntr1_title1',`cntr1_cvc1`='$cntr1_cvc1',`cntr1_block1`='$cntr1_block1',`cntr1_cvcname1`='$cntr1_cvcname1',`cntr1_cvct1`='$cntr1_cvct1',`cntr1_vaccinet1`='$cntr1_vaccinet1',`cntr1_desc1`='$cntr1_desc1',`cntr2_title2`='$cntr2_title2',`cntr2_cvc2`='$cntr2_cvc2',`cntr2_block2`='$cntr2_block2',`cntr2_cvcname2`='$cntr2_cvcname2',`cntr2_cvct2`='$cntr2_cvct2',`cntr2_vaccinet2`='$cntr2_vaccinet2',`cntr2_desc2`='$cntr2_desc2',`cntr3_title3`='$cntr3_title3',`cntr3_cvc3`='$cntr3_cvc3',`cntr3_block3`='$cntr3_block3',`cntr3_cvcname3`='$cntr3_cvcname3',`cntr3_cvct3`='$cntr3_cvct3',`cntr3_vaccinet3`='$cntr3_vaccinet3',`cntr3_desc3`='$cntr3_desc3',`cntr4_title4`='$cntr4_title4',`cntr4_cvc4`='$cntr4_cvc4',`cntr4_block4`='$cntr4_block4',`cntr4_cvcname4`='$cntr4_cvcname4',`cntr4_cvct4`='$cntr4_cvct4',`cntr4_vaccinet4`='$cntr4_vaccinet4',`cntr4_desc4`='$cntr4_desc4',`cntr5_title5`='$cntr5_title5',`cntr5_cvc5`='$cntr5_cvc5',`cntr5_block5`='$cntr5_block5',`cntr5_cvcname5`='$cntr5_cvcname5',`cntr5_cvct5`='$cntr5_cvct5',`cntr5_vaccinet5`='$cntr5_vaccinet5',`cntr5_desc5`='$cntr5_desc5',`cntr6_title6`='$cntr6_title6',`cntr6_cvc6`='$cntr6_cvc6',`cntr6_block6`='$cntr6_block6',`cntr6_cvcname6`='$cntr6_cvcname6',`cntr6_cvct6`='$cntr6_cvct6',`cntr6_vaccinet6`='$cntr6_vaccinet6',`cntr6_desc6`='$cntr6_desc6' WHERE id=1";
    $result = mysqli_query($conn,$query);
    
    header('Location: center&map.php');
    }else {
      ?>
  <!-- Container -->
  <body class="content_body">
    <div class="container" style="margin-top:25px;">
    <?php
          include 'connection_admin.php';
          $sql= mysqli_query($conn,"SELECT `title1_auto`, `cntr1_title1`, `cntr1_cvc1`, `cntr1_block1`, `cntr1_cvcname1`, `cntr1_cvct1`, `cntr1_vaccinet1`, `cntr1_desc1`, `cntr2_title2`, `cntr2_cvc2`, `cntr2_block2`, `cntr2_cvcname2`, `cntr2_cvct2`, `cntr2_vaccinet2`, `cntr2_desc2`, `cntr3_title3`, `cntr3_cvc3`, `cntr3_block3`, `cntr3_cvcname3`, `cntr3_cvct3`, `cntr3_vaccinet3`, `cntr3_desc3`, `cntr4_title4`, `cntr4_cvc4`, `cntr4_block4`, `cntr4_cvcname4`, `cntr4_cvct4`, `cntr4_vaccinet4`, `cntr4_desc4`, `cntr5_title5`, `cntr5_cvc5`, `cntr5_block5`, `cntr5_cvcname5`, `cntr5_cvct5`, `cntr5_vaccinet5`, `cntr5_desc5`, `cntr6_title6`, `cntr6_cvc6`, `cntr6_block6`, `cntr6_cvcname6`, `cntr6_cvct6`, `cntr6_vaccinet6`, `cntr6_desc6` FROM `centreandmap` WHERE `id`=1");


          
            list($title1_auto, $cntr1_title1, $cntr1_cvc1, $cntr1_block1, $cntr1_cvcname1, $cntr1_cvct1, $cntr1_vaccinet1, $cntr1_desc1, $cntr2_title2, $cntr2_cvc2, $cntr2_block2, $cntr2_cvcname2, $cntr2_cvct2, $cntr2_vaccinet2, $cntr2_desc2, $cntr3_title3, $cntr3_cvc3, $cntr3_block3, $cntr3_cvcname3, $cntr3_cvct3, $cntr3_vaccinet3, $cntr3_desc3, $cntr4_title4, $cntr4_cvc4, $cntr4_block4, $cntr4_cvcname4, $cntr4_cvct4, $cntr4_vaccinet4, $cntr4_desc4, $cntr5_title5, $cntr5_cvc5, $cntr5_block5, $cntr5_cvcname5, $cntr5_cvct5, $cntr5_vaccinet5, $cntr5_desc5, $cntr6_title6, $cntr6_cvc6, $cntr6_block6, $cntr6_cvcname6, $cntr6_cvct6, $cntr6_vaccinet6, $cntr6_desc6)=mysqli_fetch_row($sql);
          ?>
      <form action="" method="post" enctype="multipart/form-data">
        <!--2 title1_auto -->
        <div class="form-group">
          <label for="">Autometic Title 1</label>
          <input
            type="text"
            class="form-control"
            name="title1_auto"
            value="<?php echo"$title1_auto";?>"
          />
        </div>
        <!--3 cntr1_title1 -->
        <div class="form-group">
          <label for="">Center1 Title1</label>
          <input
            type="text"
            class="form-control"
            name="cntr1_title1"
            value="<?php echo"$cntr1_title1";?>"
          />
        </div>
        <!--4 cntr1_cvc1 -->
        <div class="form-group">
          <label for="">Center1 CVC Contact Number1</label>
          <input
            type="text"
            class="form-control"
            name="cntr1_cvc1"
            value="<?php echo"$cntr1_cvc1";?>"
          />
        </div>
        <!--5 cntr1_block1 -->
        <div class="form-group">
          <label for="">Center1 Block Name1</label>
          <input
            type="text"
            class="form-control"
            name="cntr1_block1"
            value="<?php echo"$cntr1_block1";?>"
          />
        </div>
        <!--6 cntr1_cvcname1 -->
        <div class="form-group">
          <label for="">Center1 CVC Name1</label>
          <input
            type="text"
            class="form-control"
            name="cntr1_cvcname1"
            value="<?php echo"$cntr1_cvcname1";?>"
          />
        </div>
        <!--7 cntr1_cvct1 -->
        <div class="form-group">
          <label for="">Center1 CVC Type1</label>
          <input
            type="text"
            class="form-control"
            name="cntr1_cvct1"
            value="<?php echo"$cntr1_cvct1";?>"
          />
        </div>
        <!--8 cntr1_vaccinet1 -->
        <div class="form-group">
          <label for="">Center1 Vaccine Type1</label>
          <input
            type="text"
            class="form-control"
            name="cntr1_vaccinet1"
            value="<?php echo"$cntr1_vaccinet1";?>"
          />
        </div>
        <!--9 	cntr1_desc1 -->
        <div class="form-group">
          <label for="">Center1 Description1</label>
          <textarea
            class="form-control"
            name="cntr1_desc1"
            rows="3"
          ><?php echo"$cntr1_desc1";?></textarea>
        </div>
        <!--10 cntr2_title2 -->
        <div class="form-group">
          <label for="">Center2 Title2</label>
          <input
            type="text"
            class="form-control"
            name="cntr2_title2"
            value="<?php echo"$cntr2_title2";?>"
          />
        </div>
        <!--11 cntr2_cvc2 -->
        <div class="form-group">
          <label for="">Center2 CVC Contact Number2</label>
          <input
            type="text"
            class="form-control"
            name="cntr2_cvc2"
            value="<?php echo"$cntr2_cvc2";?>"
          />
        </div>
        <!--12 cntr2_block2 -->
        <div class="form-group">
          <label for="">Center2 Block Name2</label>
          <input
            type="text"
            class="form-control"
            name="cntr2_block2"
            value="<?php echo"$cntr2_block2";?>"
          />
        </div>
        <!--13 cntr2_cvcname2 -->
        <div class="form-group">
          <label for="">Center2 CVC Name2</label>
          <input
            type="text"
            class="form-control"
            name="cntr2_cvcname2"
            value="<?php echo"$cntr2_cvcname2";?>"
          />
        </div>
        <!--14 cntr2_cvct2 -->
        <div class="form-group">
          <label for="">Center2 CVC Type2</label>
          <input
            type="text"
            class="form-control"
            name="cntr2_cvct2"
            value="<?php echo"$cntr2_cvct2";?>"
          />
        </div>
        <!--15 cntr2_vaccinet2 -->
        <div class="form-group">
          <label for="">Center2 Vaccine Type2</label>
          <input
            type="text"
            class="form-control"
            name="cntr2_vaccinet2"
            value="<?php echo"$cntr2_vaccinet2";?>"
          />
        </div>
        <!--16	cntr2_desc2 -->
        <div class="form-group">
          <label for="">Center2 Description2</label>
          <textarea
            class="form-control"
            name="cntr2_desc2"
            rows="3"
          ><?php echo"$cntr2_desc2";?></textarea>
        </div>

        <!--17 cntr3_title3 -->
        <div class="form-group">
          <label for="">Center3 Title3</label>
          <input
            type="text"
            class="form-control"
            name="cntr3_title3"
            value="<?php echo"$cntr3_title3";?>"
          />
        </div>
        <!--18 cntr3_cvc3 -->
        <div class="form-group">
          <label for="">Center3 CVC Contact Number3</label>
          <input
            type="text"
            class="form-control"
            name="cntr3_cvc3"
            value="<?php echo"$cntr3_cvc3";?>"
          />
        </div>
        <!--19 cntr3_block3 -->
        <div class="form-group">
          <label for="">Center3 Block Name3</label>
          <input
            type="text"
            class="form-control"
            name="cntr3_block3"
            value="<?php echo"$cntr3_block3";?>"
          />
        </div>
        <!--20 cntr3_cvcname3 -->
        <div class="form-group">
          <label for="">Center3 CVC Name3</label>
          <input
            type="text"
            class="form-control"
            name="cntr3_cvcname3"
            value="<?php echo"$cntr3_cvcname3";?>"
          />
        </div>
        <!--21 cntr3_cvct3 -->
        <div class="form-group">
          <label for="">Center3 CVC Type3</label>
          <input
            type="text"
            class="form-control"
            name="cntr3_cvct3"
            value="<?php echo"$cntr3_cvct3";?>"
          />
        </div>
        <!--22 cntr3_vaccinet3 -->
        <div class="form-group">
          <label for="">Center3 Vaccine Type3</label>
          <input
            type="text"
            class="form-control"
            name="cntr3_vaccinet3"
            value="<?php echo"$cntr3_vaccinet3";?>"
          />
        </div>
        <!--23	cntr3_desc3 -->
        <div class="form-group">
          <label for="">Center3 Description3</label>
          <textarea
            class="form-control"
            name="cntr3_desc3"
            rows="3"
          ><?php echo"$cntr3_desc3";?></textarea>
        </div>

        <!--24 cntr4_title4 -->
        <div class="form-group">
          <label for="">Center4 Title4</label>
          <input
            type="text"
            class="form-control"
            name="cntr4_title4"
            value="<?php echo"$cntr4_title4";?>"
          />
        </div>
        <!--25 cntr4_cvc4 -->
        <div class="form-group">
          <label for="">Center4 CVC Contact Number4</label>
          <input
            type="text"
            class="form-control"
            name="cntr4_cvc4"
            value="<?php echo"$cntr4_cvc4";?>"
          />
        </div>
        <!--26 cntr4_block4 -->
        <div class="form-group">
          <label for="">Center4 Block Name4</label>
          <input
            type="text"
            class="form-control"
            name="cntr4_block4"
            value="<?php echo"$cntr4_block4";?>"
          />
        </div>
        <!--27 cntr4_cvcname4 -->
        <div class="form-group">
          <label for="">Center4 CVC Name4</label>
          <input
            type="text"
            class="form-control"
            name="cntr4_cvcname4"
            value="<?php echo"$cntr4_cvcname4";?>"
          />
        </div>
        <!--28 cntr4_cvct4 -->
        <div class="form-group">
          <label for="">Center4 CVC Type4</label>
          <input
            type="text"
            class="form-control"
            name="cntr4_cvct4"
            value="<?php echo"$cntr4_cvct4";?>"
          />
        </div>
        <!--29 cntr4_vaccinet4 -->
        <div class="form-group">
          <label for="">Center4 Vaccine Type4</label>
          <input
            type="text"
            class="form-control"
            name="cntr4_vaccinet4"
            value="<?php echo"$cntr4_vaccinet4";?>"
          />
        </div>
        <!--30	cntr4_desc4 -->
        <div class="form-group">
          <label for="">Center4 Description4</label>
          <textarea
            class="form-control"
            name="cntr4_desc4"
            rows="3"
          ><?php echo"$cntr4_desc4";?></textarea>
        </div>

        <!--31 cntr5_title5 -->
        <div class="form-group">
          <label for="">Center5 Title5</label>
          <input
            type="text"
            class="form-control"
            name="cntr5_title5"
            value="<?php echo"$cntr5_title5";?>"
          />
        </div>
        <!--32 cntr5_cvc5 -->
        <div class="form-group">
          <label for="">Center5 CVC Contact Number5</label>
          <input
            type="text"
            class="form-control"
            name="cntr5_cvc5"
            value="<?php echo"$cntr5_cvc5";?>"
          />
        </div>
        <!--33 cntr5_block5 -->
        <div class="form-group">
          <label for="">Center5 Block Name5</label>
          <input
            type="text"
            class="form-control"
            name="cntr5_block5"
            value="<?php echo"$cntr5_block5";?>"
          />
        </div>
        <!--34 cntr5_cvcname5 -->
        <div class="form-group">
          <label for="">Center5 CVC Name5</label>
          <input
            type="text"
            class="form-control"
            name="cntr5_cvcname5"
            value="<?php echo"$cntr5_cvcname5";?>"
          />
        </div>
        <!--35 cntr5_cvct5 -->
        <div class="form-group">
          <label for="">Center5 CVC Type5</label>
          <input
            type="text"
            class="form-control"
            name="cntr5_cvct5"
            value="<?php echo"$cntr5_cvct5";?>"
          />
        </div>
        <!--36 cntr5_vaccinet5 -->
        <div class="form-group">
          <label for="">Center5 Vaccine Type5</label>
          <input
            type="text"
            class="form-control"
            name="cntr5_vaccinet5"
            value="<?php echo"$cntr5_vaccinet5";?>"
          />
        </div>
        <!--37	cntr5_desc5 -->
        <div class="form-group">
          <label for="">Center5 Description5</label>
          <textarea
          class="form-control"
          name="cntr5_desc5"
          rows="3"
          ><?php echo"$cntr5_desc5";?></textarea>
        </div>
        <!--38 cntr6_title6 -->
        <div class="form-group">
          <label for="">Center6 Title6</label>
          <input
            type="text"
            class="form-control"
            name="cntr6_title6"
            value="<?php echo"$cntr6_title6";?>"
          />
        </div>
        <!--39 cntr6_cvc6 -->
        <div class="form-group">
          <label for="">Center6 CVC Contact Number6</label>
          <input
            type="text"
            class="form-control"
            name="cntr6_cvc6"
            value="<?php echo"$cntr6_cvc6";?>"
          />
        </div>
        <!--40 cntr6_block6 -->
        <div class="form-group">
          <label for="">Center6 Block Name6</label>
          <input
            type="text"
            class="form-control"
            name="cntr6_block6"
            value="<?php echo"$cntr6_block6";?>"
          />
        </div>
        <!--41 cntr6_cvcname6 -->
        <div class="form-group">
          <label for="">Center6 CVC Name6</label>
          <input
            type="text"
            class="form-control"
            name="cntr6_cvcname6"
            value="<?php echo"$cntr6_cvcname6";?>"
          />
        </div>
        <!--42 cntr6_cvct6 -->
        <div class="form-group">
          <label for="">Center6 CVC Type6</label>
          <input
            type="text"
            class="form-control"
            name="cntr6_cvct6"
            value="<?php echo"$cntr6_cvct6";?>"
          />
        </div>
        <!--43 cntr6_vaccinet6 -->
        <div class="form-group">
          <label for="">Center6 Vaccine Type6</label>
          <input
            type="text"
            class="form-control"
            name="cntr6_vaccinet6"
            value="<?php echo"$cntr6_vaccinet6";?>"
          />
        </div>
        <!--44	cntr6_desc6 -->
        <div class="form-group">
          <label for="">Center6 Description6</label>
          <textarea
          class="form-control"
          name="cntr6_desc6"
          rows="3"
          ><?php echo"$cntr6_desc6";?></textarea>
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
