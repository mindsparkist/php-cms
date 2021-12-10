<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
		<link rel="stylesheet" href="./css/main.css" /> 
</head>
<body>
    <div id="header">
      <div class="shell1">
        <div id="top">
          <h1>Admin Panel</h1>
          <div id=top-navigation><p>Welcome Administrator</p><a href=logout.php>Log out</a> </div>
        </div>
        <div id=navigation>
          <ul>
            <li><a href="./home.php" class="<?php if($page=='home'){echo 'active_login';}?>"><span>Home</span></a></li>
            <li><a href="./prevent.php" class="<?php if($page=='prevent'){echo 'active_login';}?>"><span>Prevent</span></a></li>
            <li><a href="./symptoms.php" class="<?php if($page=='symptoms'){echo 'active_login';}?>"><span>Symptoms</span></a></li>
            <li><a href="./precautions.php" class="<?php if($page=='precautions'){echo 'active_login';}?>"><span>Precautions</span></a></li>
            <li><a href="./doctors.php" class="<?php if($page=='doctors'){echo 'active_login';}?>"><span>Doctors</span></a></li>
            <li><a href="./center&map.php" class="<?php if($page=='candm'){echo 'active_login';}?>"><span>Center&Map</span></a></li>
            <li><a href="./contact.php" class="<?php if($page=='contact'){echo 'active_login';}?>"><span>Contact</span></a></li>
          </ul>
        </div>
      </div>
       <a href="#footer"><span class="fas fa-level-down-alt"></span></a>
    </div>
