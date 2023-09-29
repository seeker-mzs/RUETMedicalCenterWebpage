<?php
    $conn = mysqli_connect('localhost','root', '','ruet_medical_center');

    $select = mysqli_query($conn,"SELECT * FROM doctors natural join employee");
    
    
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
    
    <!--doctor section starts-->

    <section class="doctors" id="doctors">

        <h1 class="heading"> our <span>doctors</span></h1>

        <div class="box-container">
        <?php
                while($row = mysqli_fetch_assoc($select))
                {
                ?>
            <div class="box">
                
                <img src="image/nopic.jpg" alt="">
                <h3><?php echo $row['employee_Name']?></h3>
                <span><?php echo $row['designation']?></span><br>
                <span><?php echo $row['mobile_no']?></span>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>  
            </div>
            <?php
                }
            ?>

            
        </div>

    </section>

    <!--doctors section ends-->

    
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