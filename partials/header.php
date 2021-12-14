<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">

    <title>Covid-19</title>
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- video.js -->
    <link href="css/video-js.css" rel="stylesheet" />
     <!-- Owl Carosel -->
     <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <!-- litebox -->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- darkmode -->
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    
    <!-- header section start --> 
    <header class="header">
        <a href="index.php" class="logo">C<span class="fas fa-virus"></span>VID-19</a>
        <nav class="navbar" id="navbar">
            <ul>
                <li><a href="index.php" class="<?php if($page=='home'){echo 'act_cls';}?>">Home</a></li>
                <li><a href="prevent.php" class="<?php if($page=='prevent'){echo 'act_cls';}?>">Prevent</a></li>
                <li><a href="symptoms.php" class="<?php if($page=='symptoms'){echo 'act_cls';}?>">Symptoms</a></li>
                <li><a href="precaution.php" class="<?php if($page=='precaution'){echo 'act_cls';}?>">Precautions</a></li>
                <li><a href="doctor.php" class="<?php if($page=='doctor'){echo 'act_cls';}?>">Doctors</a></li>
                <li><a href="center_map.php" class="<?php if($page=='candm'){echo 'act_cls';}?>">Center&Map</a></li>
                <li><a href="contact.php" class="<?php if($page=='contact'){echo 'act_cls';}?>">Contact</a></li>
            </ul>
        </nav>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
    </header>
    <!-- header section end -->
