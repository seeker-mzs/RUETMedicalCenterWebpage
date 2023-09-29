<?php
$conn = mysqli_connect('localhost', 'root', '','ruet_medical_center') or die('connection failed');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO contact_form(name, email,number,date) VALUES('$name','$email', '$number', '$date')") or die('query failed');

    if($insert){
        $message[]='appointment made successfully';
    }
    else{
        $message[] = 'appointment failed';
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
        <link rel="stylesheet" href="css/style1.css">

    </head>
    <body>
    <!--header section starts-->
    
    
    <header class="header">
        
        
        <a href="#" class="logo"><img src="image/RUET logo.png"><i class="fas fa-heartbeat"></i><strong>RUET</strong>MedicalCenter</a>

        <nav class="navber">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="services.php">services</a>
            <a href="doctor.php">doctors</a>
            <a href="appointment.php">appointment</a>
            <a href="employeelist.php">employee</a>
            <a href="#blogs">blogs</a>
            <button class="btnLogin-popup"><a href="login.php">logout</a></button>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
    
    <!--appointmenting section starts-->

    <section class="appointment" id="appointment">

        <h1 class="heading"> <span>appointment</span> now</h1>
        
        <div class="row">

            <div class="image">
                <img src="image/appointment-img.svg" alt="">
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class = "message">'.$message.'</p';
                    }
                }
            ?>
                <h3>make appointment</h3>
                <input type="text" name="name" placeholder="your name" class="box">
                <input type="number" name="number" placeholder="your number" class="box">
                <input type="email" name="email" placeholder="your email" class="box">
                <input type="date" name="date" class="box">
                <input type="submit" name="submit" placeholder="submit" value="appointment now" class="btn">
            </form>

        </div>
    </section>

    <!--appointment section ends-->

    <a href="appointmentno.php">Appointment List</a>
    
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="about.php"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="services.php"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="doctor.php"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="appointment.php"> <i class="fas fa-chevron-right"></i> appointment </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>

            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
            </div>

            <div class="box">
                <h3>appointment info</h3>
                <a href="#"> <i class="fa fa-heartbeat"></i> faceappointment </a>
                <a href="#"> <i class="fas fa-phone"></i> +880 2588866798 </a>
                <a href="#"> <i class="fas fa-fax"></i> +880 2588867105 </a>
                <a href="#"> <i class="fas fa-envelope"></i> registrar@ruet.ac.bd </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Rajshahi University of Engineering & Technology <br>Kazla, Rajshahi-6204, Bangladesh. </a>
                
            </div>

            <div class="box">
                <h3>follow us</h3>
                
                <a href="#"> <i class="fa fa-facebook"></i> facebook </a>
                <a href="#"> <i class="fa fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fa fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fa fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> created by <span>MZS</span> | all right reserved </div>
    </section>

    
    <script src="javascript/script.js"></script>
    </body>
</html>