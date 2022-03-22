<?php
    if (isset($_POST['login'])) {
        $a=$_POST['username'];
        $b=$_POST['password'];
            $conn=mysqli_connect("localhost","root","","cpdms");
            $sql=mysqli_query($conn,"SELECT `username` FROM `login` WHERE `password`='$b'");
                list($username)=mysqli_fetch_row($sql);
                    if($a == $username){
                        setcookie("MinorCookie","$username",time()+60*60);
                        header("LOCATION:home.php");
                    }else{
                        header("LOCATION:default.php");
                    }
    }else{
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link rel="stylesheet" href="css/login.css"> 
        <!-- Jquery -->
        <script src="js/jquery.min.js"></script>
        <!-- Sweetalert -->
        <script src="js/sweetalert2@11.js"></script>
        <script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    Swal.fire({
                          icon: 'error',
                          title: 'Field Empty',
                          text: 'Username And Password Field Empty',
                        })
                    return false;  
                }  
                else{  
                    if(id.length=="") {  
                        Swal.fire({
                          icon: 'error',
                          title: 'Field Empty',
                          text: 'Username Field Empty',
                        })
                        return false;  
                    }   
                    if (ps.length=="") {  
                        Swal.fire({
                          icon: 'error',
                          title: 'Field Empty',
                          text: 'Password Field Empty',
                        })
                        return false;  
                    }  
                    if (id!="admin" && ps!="admin") {
                         Swal.fire({
                          icon: 'error',
                          title: 'Field Empty',
                          text: 'You Have Entered Wrong Username And Password',
                          footer:'<a href="/MinorProject_Demo/admin/default.php"> Reload Page</a>'
                        })
                        return false; 
                    }
                    else{
                        header("LOCATION:home.php");
                    }
                }                             
            }  
        </script>
    </head>
    <body>
        <!-- Container -->
        <div id="container">
          <div class="shell">
             <section class="admin">
                <div class="login">
                    <h2>ADMIN LOGIN</h2>
                    <form action="default.php" method="POST" name="f1" onsubmit = "return validation()">
                        <div class="input">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username" name="username" autocomplete="off">
                        </div>
                        <div class="input">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" name="password" autocomplete="off">
                        </div>
                        <input type="submit" value="Sign In" id="mainak" name="login">
                    </form>
                </div>
            </section>
          </div>
        </div>
    </body>
    </html>
    <?php
        }
    ?>