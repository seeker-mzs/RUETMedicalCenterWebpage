<?php
    $conn = mysqli_connect('localhost','root', '','ruet_medical_center');

    $result = mysqli_query($conn,"SELECT * FROM contact_form");
    
    
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
        <!--custom css file link-->
        <link rel="stylesheet" href="css/style1.css">

    </head>
    <body>
    <!--header section starts-->
    
    
    <header class="header">
        
        
        <a style="font-size: 40px;" href="#" class="logo"><i class="fas fa-heartbeat"></i><strong>RUET </strong>Medical Center</a>

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
    <br><br><br><br><br><br><br><br>
    <section class="appointmentno" id="appointmentno">
    <div class="box-container">
        <div class="box">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 style="font-size: 2rem; color: var(--orange); " class="display-6 text-center">Appointment List</h2>
                        </div>
                        <div style="font-size: 2rem; color: var(--blue);" class="card-body">
                            <tr>
                                <td>Serial No.</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>mobile_no</td>
                                <td>Date</td><br>
                            </tr>
                            <tr>
                            <?php
                                while($row=mysqli_fetch_assoc($result))
                                {
                            ?>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['number']?></td>
                                <td><?php echo $row['date']?></td><br>

                            </tr>
                            <?php
                                }
                              
                            ?>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    </section>
    <script src="javascript/script.js"></script>
    </body>
</html>