<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctor</title>
    <link rel="stylesheet" href="doctorfun.css">
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
                    if(isset($_SESSION['user'],$_SESSION['name'],$_SESSION['mobile']))
                    {
                        echo "<script>alert('login successfully');</script>";
                        echo '<a href="logout.php?logout"><i class="fa fa-sign-out fa-lg" style="margin-left:20px;"></i></a>';
                    }
                    else
                    {
                        header("location:reglog.html");
                    }
                ?>
            </div>
        </div>
            <!-- <div class="icon"><a href="index.html"><i class="fas fa-home fa-lg"></i></a></div> -->
            <div class="add">
                <p>Add Donor Details</p>
                <form action="docaddfun.php" method="POST" accept-charset="utf-8">
                    <input type="text" name="donorname" value="" placeholder="DonorName" required>
                    <input type="text" name="donorcity" value="" placeholder="DonorCity" required>
                    <input type="tel" name="donormobile" value="" placeholder="DonorMobile" required>
                    <select name="blood" required>
                        <option value="" selected disabled>Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
<input type="text" class="month" name="donordate" value="" placeholder="YYYY-MM-DD"
                     required pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" title="Enter a date in this format YYYY-MM-DD"/>
                 <!-- <input type="checkbox" name="" value="" required>  <p2>Not Drunk</p2> -->
                     <input type="submit" name="" value="Add Donor">
                </form>
            </div>
            <div class="update">
                <p>Update Donor Details</p>
                <form action="docupdatefun.php" method="POST" accept-charset="utf-8">
                    <input type="tel" name="donormobile" value="" placeholder="DonorMobile" required>
<input type="text" class="month" name="donordate" value="" placeholder="YYYY-MM-DD"
                     required pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" title="Enter a date in this format YYYY-MM-DD"/>                    <input type="submit" name="" value="Update Donor">
                </form>
            </div>
            <div class="search">
                <p>Search Donor</p>
                <form action="search.php" method="POST" accept-charset="utf-8">
                    <input type="text" name="donorcity" value="" placeholder="DonorCity" required>
                    <select name="blood" required>
                        <option value="" selected disabled>Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    <input type="submit" name="search" value="Search Donor">
                </form>
            </div>
        <div id="particles-js"></div>
    </div>

    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>
</html>
