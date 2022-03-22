<?php
    $page = 'candm';
    include 'partials/header.php';
?>
<?php
    include 'connection_admin.php';
    $sql= mysqli_query($conn,"SELECT `title1_auto`, `cntr1_title1`, `cntr1_cvc1`, `cntr1_block1`, `cntr1_cvcname1`, `cntr1_cvct1`, `cntr1_vaccinet1`, `cntr1_desc1`, `cntr2_title2`, `cntr2_cvc2`, `cntr2_block2`, `cntr2_cvcname2`, `cntr2_cvct2`, `cntr2_vaccinet2`, `cntr2_desc2`, `cntr3_title3`, `cntr3_cvc3`, `cntr3_block3`, `cntr3_cvcname3`, `cntr3_cvct3`, `cntr3_vaccinet3`, `cntr3_desc3`, `cntr4_title4`, `cntr4_cvc4`, `cntr4_block4`, `cntr4_cvcname4`, `cntr4_cvct4`, `cntr4_vaccinet4`, `cntr4_desc4`, `cntr5_title5`, `cntr5_cvc5`, `cntr5_block5`, `cntr5_cvcname5`, `cntr5_cvct5`, `cntr5_vaccinet5`, `cntr5_desc5`, `cntr6_title6`, `cntr6_cvc6`, `cntr6_block6`, `cntr6_cvcname6`, `cntr6_cvct6`, `cntr6_vaccinet6`, `cntr6_desc6` FROM `centreandmap` WHERE `id`=1");


    
      list($title1_auto, $cntr1_title1, $cntr1_cvc1, $cntr1_block1, $cntr1_cvcname1, $cntr1_cvct1, $cntr1_vaccinet1, $cntr1_desc1, $cntr2_title2, $cntr2_cvc2, $cntr2_block2, $cntr2_cvcname2, $cntr2_cvct2, $cntr2_vaccinet2, $cntr2_desc2, $cntr3_title3, $cntr3_cvc3, $cntr3_block3, $cntr3_cvcname3, $cntr3_cvct3, $cntr3_vaccinet3, $cntr3_desc3, $cntr4_title4, $cntr4_cvc4, $cntr4_block4, $cntr4_cvcname4, $cntr4_cvct4, $cntr4_vaccinet4, $cntr4_desc4, $cntr5_title5, $cntr5_cvc5, $cntr5_block5, $cntr5_cvcname5, $cntr5_cvct5, $cntr5_vaccinet5, $cntr5_desc5, $cntr6_title6, $cntr6_cvc6, $cntr6_block6, $cntr6_cvcname6, $cntr6_cvct6, $cntr6_vaccinet6, $cntr6_desc6)=mysqli_fetch_row($sql);
?>
    <!-- typed -->
    <section id="cen">
      <div id="typed-strings">
        <p><?php echo"$title1_auto";?></p>
      </div>
      <span id="typed" class="typedjs" style=" margin-left: 22%; "></span>
    </section>
    <!-- centre section -->
   <section>
      <div class="container">
        <div class="container-card">
          <div class="circle"></div>
          <h1><?php echo"$cntr1_title1";?></h1>
          <button onClick='window.location="#map-int"' class="btn info" style="margin-top: 5px; margin-left: 3%;" data-lat="24.113344925576175" data-lng="88.27825950310414"><i class="fas fa-map-marked-alt"></i> Spot On Map</button>
          <p class="card">
            <p class="dist"><i class="fas fa-angle-right"></i> CVC contact number:<?php echo"$cntr1_cvc1";?></p> 
             <p class="muted"> <i class="fas fa-angle-right"></i> Name Of Block: <?php echo"$cntr1_block1";?></p>
             <p class="lead"><i class="fas fa-angle-right"></i> Name Of CVC : <?php echo"$cntr1_cvcname1";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of CVC :<?php echo"$cntr1_cvct1";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of vaccine: <?php echo"$cntr1_vaccinet1";?></p>
             <p> <i class="fas fa-arrow-alt-circle-right"></i>
             <?php echo"$cntr1_desc1";?></p>
             
          </p>
        </div>
      </div>
    </section>
    <!-- s2 -->
   <section>
      <div class="container">
        <div class="container-card">
          <div class="circle3"></div>
          <h1><?php echo"$cntr2_title2";?></h1>
          <button onClick='window.location="#map-int"' class="btn info" style="margin-top: 5px; margin-left: 3%;" data-lat="24.092138003989554" data-lng="88.26432609696948"><i class="fas fa-map-marked-alt"></i> Spot On Map</button>
          <p class="card">
            <p class="dist"><i class="fas fa-angle-right"></i> CVC contact number:<?php echo"$cntr2_cvc2";?></p> 
             <p class="muted"> <i class="fas fa-angle-right"></i> Name Of Block: <?php echo"$cntr2_block2";?></p>
             <p class="lead"><i class="fas fa-angle-right"></i> Name Of CVC : <?php echo"$cntr2_cvcname2";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of CVC :<?php echo"$cntr2_cvct2";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of vaccine: <?php echo"$cntr2_vaccinet2";?></p>
             <p> <i class="fas fa-arrow-alt-circle-right"></i>
              <?php echo"$cntr2_desc2";?></p>
             
          </p>
        </div>
      </div>
    </section>
    <!-- s3 -->
   <section>
      <div class="container">
        <div class="container-card">
          <div class="circle1"></div>
          <h1><?php echo"$cntr3_title3";?></h1>
          <button onClick='window.location="#map-int"' class="btn info" style="margin-top: 5px; margin-left: 3%;" data-lat="24.109006707017933" data-lng="88.23239071046135"><i class="fas fa-map-marked-alt"></i> Spot On Map</button>
          <p class="card">
            <p class="dist"><i class="fas fa-angle-right"></i> CVC contact number:<?php echo"$cntr3_cvc3";?></p> 
             <p class="muted"> <i class="fas fa-angle-right"></i> Name Of Block:<?php echo"$cntr3_block3";?></p>
             <p class="lead"><i class="fas fa-angle-right"></i> Name Of CVC :<?php echo"$cntr3_cvcname3";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of CVC :<?php echo"$cntr3_cvct3";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of vaccine:<?php echo"$cntr3_vaccinet3";?></p>
             <p> <i class="fas fa-arrow-alt-circle-right"></i>
               <?php echo"$cntr3_desc3";?></p>
             
          </p>
        </div>
      </div>
    </section>
    <!-- s4 -->
    <section>
      <div class="container">
        <div class="container-card">
          <div class="circle2"></div>
          <h1><?php echo"$cntr4_title4";?></h1>
          <button onClick='window.location="#map-int"' class="btn info" style="margin-top: 5px; margin-left: 3%;" data-lat="24.076605306956978" data-lng="88.26690973929685"><i class="fas fa-map-marked-alt"></i> Spot On Map</button>
          <p class="card">
            <p class="dist"><i class="fas fa-angle-right"></i> CVC contact number: <?php echo"$cntr4_cvc4";?></p> 
             <p class="muted"> <i class="fas fa-angle-right"></i> Name Of Block:<?php echo"$cntr4_block4";?></p>
             <p class="lead"><i class="fas fa-angle-right"></i> Name Of CVC : <?php echo"$cntr4_cvcname4";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of CVC :<?php echo"$cntr4_cvct4";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of vaccine: <?php echo"$cntr4_vaccinet4";?> </p>
             
             <p> <i class="fas fa-arrow-alt-circle-right"></i>
              <?php echo"$cntr4_desc4";?></p>
          </p>
        </div>
      </div>
    </section>
    <!-- s5 -->
    <section>
      <div class="container">
        <div class="container-card">
          <div class="circle5"></div>
          <h1><?php echo"$cntr5_title5";?></h1>
          <button onClick='window.location="#map-int"' class="btn info" style="margin-top: 5px; margin-left: 3%;" data-lat="23.40050264484303" data-lng="88.66543644529844"><i class="fas fa-map-marked-alt"></i> Spot On Map</button>
          <p class="card">
            <p class="dist"><i class="fas fa-angle-right"></i> CVC contact number:<?php echo"$cntr5_cvc5";?></p> 
             <p class="muted"> <i class="fas fa-angle-right"></i> Name Of Block: <?php echo"$cntr5_block5";?></p>
             <p class="lead"><i class="fas fa-angle-right"></i> Name Of CVC : <?php echo"$cntr5_cvcname5";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of CVC :<?php echo"$cntr5_cvct5";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of vaccine: <?php echo"$cntr5_vaccinet5";?></p>
             <p> <i class="fas fa-arrow-alt-circle-right"></i>
              <?php echo"$cntr5_desc5";?></p>
             
          </p>
        </div>
      </div>
    </section>
    <!-- s6 -->
    <section>
      <div class="container">
        <div class="container-card">
          <div class="circle6"></div>
          <h1><?php echo"$cntr6_title6";?></h1>
          <button onClick='window.location="#map-int"' class="btn info" style="margin-top: 5px; margin-left: 3%;" data-lat="23.406343280991866" data-lng="88.49012518994371"><i class="fas fa-map-marked-alt"></i> Spot On Map</button>
          <p class="card">
            <p class="dist"><i class="fas fa-angle-right"></i> CVC contact number:<?php echo"$cntr6_cvc6";?></p> 
             <p class="muted"> <i class="fas fa-angle-right"></i> Name Of Block:<?php echo"$cntr6_block6";?></p>
             <p class="lead"><i class="fas fa-angle-right"></i> Name Of CVC :<?php echo"$cntr6_cvcname6";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of CVC :<?php echo"$cntr6_cvct6";?></p>
             <p class="typeofvaccine"><i class="fas fa-angle-right"></i> Type Of vaccine:<?php echo"$cntr6_vaccinet6";?> </p>
             <p> <i class="fas fa-arrow-alt-circle-right"></i>
               <?php echo"$cntr6_desc6";?></p>
             
          </p>
        </div>
      </div>
    </section>
    <!-- map -->
    <div class="container" style="margin-bottom: 20px;" id="map-int">
        <div id="map-canvas"></div>
    </div>
<?php
     include 'partials/footer.php';
?>