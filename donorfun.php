<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctor</title>
    <link rel="stylesheet" href="donorfun.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <script src="jquery-1.10.2.min.js"></script>
       <script src="JQUERY%20Main.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Crimson+Pro&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://kit.fontawesome.com/62d7f08aa0.js"></script>

</head>
<body>
    <div class="back">
        <div class="head">
            <div class="logo">
                <a href="index.html"><img src="SVG Stroke.svg" alt=""></a>
            </div>
            <div class="header">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="reglog.html">Doctor</a></li>
                    <li><a href="donorreglog.html">Donor</a></li>
                </ul>
            </div>
            <div class="logoi">
                <i class="far fa-envelope fa-lg"></i>
                <?php
                    session_start();
                    if(isset($_SESSION['user']))
                    {
                        echo "<script>alert('login successfully');</script>";
                        echo '<a href="logout.php?logout"><i class="fa fa-sign-out fa-lg" style="margin-left:20px;"></i></a>';
                    }
                    else
                    {
                        header("location:donorreglog.html");
                    }
                ?>
            </div>
        </div>
            <!-- <div class="icon"><a href="index.html"><i class="fas fa-home fa-lg"></i></a></div> -->
            <div class="update">
                <p>Update Details</p>
                <form action="donorupdate.php" method="POST" accept-charset="utf-8">
                    <input type="tel" name="donormobile" value="<?php echo @$_SESSION['user'];?>" placeholder="DonorMobile" readonly required>
                    <input type="text" class="month" name="donordate" value="" placeholder="YYYY-MM-DD"
                     required pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" title="Enter a date in this format YYYY-MM-DD"/>
                    <button name="login">Update Donor</button>
                </form>
            </div>
        <div id="particles-js"></div>
    </div>

    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>
</html>
