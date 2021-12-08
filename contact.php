<?php
$server='localhost';//127.0.0.1
$username='root';
$password='';
$db='cpdms';
 $conn=mysqli_connect($server,$username,$password,$db);
?>

<?php
    $page = 'contact';
    include 'partials/header.php';
?>

    <!-- contact section starts -->
    <div class="contact-us">
    <section class="contact">
        <div class="text">Contact Us</div>
        <form action="contact.php" method="POST" class="form">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name:</span>
                    <input type="text" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="input-box">
                    <span class="details">Age:</span>
                    <input type="number" name="age" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email:</span>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Telephone:</span>
                    <input type="number" name="mobile" placeholder="Enter your phone number" required>
                </div>
            </div>    
            <div class="symptoms-details">
                <span>Select Symptoms:</span>
                <div class="category">
                    <div class="boxs">
                        <input type="checkbox" value="Cold" name="symptoms[]">
                        <label for="#">Cold</label>
                    </div>
                    <div class="boxs">
                        <input type="checkbox" value="Fever" name="symptoms[]">
                        <label for="#">Fever</label>
                    </div>
                    <div class="boxs">
                        <input type="checkbox" value="Difficulty in Breath" name="symptoms[]">
                        <label for="#">Difficulty in Breath</label>
                    </div>
                    <div class="boxs">
                        <input type="checkbox" value="Feeling Weak" name="symptoms[]">
                        <label for="#">Feeling Weak</label>
                    </div>
                </div>
            </div>  
            <div class="message-details">
                <div class="message-box">
                    <span>Describe how you are feeling</span>
                    <textarea name="comments" class="textarea" placeholder="Write About yourself..." required></textarea>
                </div>
            </div> 
            <div class="submit">
                <input type="submit" value="Sunmit" name="submit">

            </div>
        </form>
    </section>
</div>
    <!-- contact section ends -->
<?php
     include 'partials/footer.php';
?>

<?php

    if(isset($_POST['submit'])){
        $Name=$_POST['name'];
        $Age=$_POST['age'];
        $Email=$_POST['email'];
        $Mobile=$_POST['mobile'];
        $Symptoms=$_POST['symptoms'];
        $Chkstr=implode(",",$Symptoms);
        $Comments=$_POST['comments'];

        $sql="INSERT INTO `contact`(`name`,`age`,`email`,`mobile`,`symptoms`,`comments`) VALUES ('$Name','$Age','$Email','$Mobile','$Chkstr','$Comments')";
        $result=mysqli_query($conn,$sql);
    }
?>