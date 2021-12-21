<?php
    $page = 'prevent';
    include 'partials/header.php';
?>
<?php
      include 'connection_admin.php';
    $sql= mysqli_query($conn,"SELECT `subtitle1`, `title1`, `desc1`, `tctitle`, `tcsubtitle`, `tcimg`, `lctitle`, `lcsubtitle`, `lcimg`, `rctitle`, `rcsubtitle`, `rcimg`, `bctitle`, `bcsubtitle`, `bcimg`, `title2`, `pnp1`, `pnp2`, `pnp3`, `pnp4`, `pnp5`, `pnp6`, `pnp7`, `dsc1`, `dsc2`, `dsc3`, `dsc4`, `dsc5`, `dsc6`, `dsc7`, `pnpimg`, `title3`, `subtitle2`, `whimg1`, `whimg2`, `whimg3`, `whimg4`, `whimg5`, `whimg6`, `whst1`, `whst2`, `whst3`, `whst4`, `whst5`, `whst6` FROM `prevent` WHERE `id`=1");

    list($subtitle1,$title1,$desc1,$tctitle,$tcsubtitle,$tcimg,$lctitle,$lcsubtitle,$lcimg,$rctitle,$rcsubtitle,$rcimg,$bctitle,$bcsubtitle,$bcimg,$title2,$pnp1,$pnp2,$pnp3,$pnp4,$pnp5,$pnp6,$pnp7,$dsc1,$dsc2,$dsc3,$dsc4,$dsc5,$dsc6,$dsc7,$pnpimg,$title3,$subtitle2,$whimg1,$whimg2,$whimg3,$whimg4,$whimg5,$whimg6,$whst1,$whst2,$whst3,$whst4,$whst5,$whst6)=mysqli_fetch_row($sql);
?>
<div class="containers">
      <div class="subtitle text-center"><?php echo"$subtitle1";?></div>
      <h2 class="title text-center"><?php echo"$title1";?></h2>
      <p class="pt-3 text-center">
      <?php echo"$desc1";?>
      </p>
      <div class="row1-container card-xyz">
        <div class="box box-down cyan">
          <h2><?php echo"$tctitle";?></h2>
          <p>
          <?php echo"$tcsubtitle";?>
          </p>
          <img class="img-size pt-7" src="./images/advice-a.png" alt="" />
        </div>

        <div class="box red">
          <h2><?php echo"$lctitle";?></h2>
          <p>
          <?php echo"$lcsubtitle";?>
          </p>
          <img class="img-size pt-7" src="./images/advice-b.png" alt="" />
        </div>

        <div class="box box-down blue">
          <h2><?php echo"$rctitle";?></h2>
          <p>
          <?php echo"$rcsubtitle";?>
          </p>
          <img class="img-size pt-7" src="./images/advice-c.png" alt="" />
        </div>
      </div>
      <div class="row2-container">
        <div class="box orange">
          <h2><?php echo"$bctitle";?></h2>
          <p>
          <?php echo"$bcsubtitle";?>
          </p>
          <img class="img-size pt-7" src="./images/advice-d.png" alt="" />
        </div>
      </div>
    </div>
    <div class="containers section-content">
      <div class="flex-box-div">
        <div>
          <h2 class="take-the-step"><?php echo"$title2";?></h2>
          <!-- list -->
          <ul class="list-check">
            <li>
              <strong><?php echo"$pnp1";?></strong> <?php echo"$dsc1";?>
            </li>
            <li>
              <strong><?php echo"$pnp2";?></strong> – <?php echo"$dsc2";?>
            </li>
            <li>
              <strong><?php echo"$pnp3";?></strong> – <?php echo"$dsc3";?>
            </li>
            <li>
              <strong
                ><?php echo"$pnp4";?></strong
              >
              <?php echo"$dsc4";?>
            </li>
            <li>
              <strong><?php echo"$pnp5";?></strong> – <?php echo"$dsc5";?>
            </li>
            <li>
              <strong><?php echo"$pnp6";?></strong>
              <?php echo"$dsc6";?></a>
            </li>
            <li>
              <strong><?php echo"$pnp7";?></strong> – <?php echo"$dsc7";?>
            </li>
          </ul>
        </div>
        <img class="flex-img" src="./images/steps.png" alt="" srcset="" />
      </div>
    </div>
    <div class="containers">
      <h4 class="pt-3 text-center follow"><?php echo"$title3";?></h4>
      <span class="whydoi"><?php echo"$subtitle2";?></span>
      <!-- handwash -->
      <div class="handwash">
        <!-- h1 -->
        <div class="box4">
          <div class="box4-gfx">
            <img class="handwashimg" src="./images/hand-a.png" alt="" />
          </div>
          <div class="box4-content pt-3">
            <p><?php echo"$whst1";?></p>
          </div>
        </div>
        <!-- h2 -->
        <div class="box4">
          <div class="box4-gfx">
            <img class="handwashimg" src="./images/hand-b.png" alt="" />
          </div>
          <div class="box4-content pt-3">
            <p><?php echo"$whst2";?></p>
          </div>
        </div>
        <div class="box4">
          <div class="box4-gfx">
            <img class="handwashimg" src="./images/hand-c.png" alt="" />
          </div>
          <div class="box4-content pt-3">
            <p><?php echo"$whst3";?></p>
          </div>
        </div>
        <div class="box4">
          <div class="box4-gfx">
            <img class="handwashimg" src="./images/hand-d.png" alt="" />
          </div>
          <div class="box4-content pt-3">
            <p><?php echo"$whst4";?></p>
          </div>
        </div>
        <div class="box4">
          <div class="box4-gfx">
            <img class="handwashimg" src="./images/hand-e.png" alt="" />
          </div>
          <div class="box4-content pt-3">
            <p><?php echo"$whst5";?></p>
          </div>
        </div>
        <div class="box4">
          <div class="box4-gfx">
            <img class="handwashimg" src="./images/hand-f.png" alt="" />
          </div>
          <div class="box4-content pt-3">
            <p><?php echo"$whst6";?></p>
          </div>
        </div>
      </div>
      <!-- h2 -->
    </div>
<?php
     include 'partials/footer.php';
?>