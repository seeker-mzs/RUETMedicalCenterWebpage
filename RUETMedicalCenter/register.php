<?php
    $conn = mysqli_connect('localhost','root', '','ruet_medical_center');

    if(isset($_POST['submit']))
    {
        $username= mysqli_real_escape_string($conn, $_POST['username']);
        $user_ID=  $_POST['userid'];
        $email= mysqli_real_escape_string($conn, $_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        
        $insert = mysqli_query($conn,"INSERT INTO users(user_ID, username, email, password) VALUE('$user_ID','$username','$email','$password')") or die('Something went wrong');
        header('location:login.php');
        if($insert){
            $error[]='Registered successfully';
        }
        else{
            $error[] = 'registration failed';
        }
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RUET Medical Center website create Mashiyat</title>

        <!--font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!--custom css file link-->
        <link rel="stylesheet" href="css/style2.css">

    </head>
    <body>
    <!--header section starts-->
    
    
    <header class="header">
        
        
        <a style="font-size: 40px;" href="#" class="logo"><i class="fas fa-heartbeat"></i><strong>RUET </strong>Medical Center</a>

        <nav class="navber">
            <button class="btnLogin-popup"><a href="login.php">login</a></button>
        </nav>
    </header>
    <!--register section for students starts-->
    <div class="image">
        <img src="image/RUET.png" alt="">
    </div>
    <div class="wrapper register">

        <div class="form-box Registration">
            <h2>Registration</h2>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <input type="text" name="userid" required>
                    <label>User ID</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox">I agree to the terms and conditions</label>
                </div>
                <button type="submit" name="submit" class="btn-register">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>

                </div>
            </form>
        </div>
    </div>
    <!--login section ends-->
    <script src="javascript/script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    </body>
</html>