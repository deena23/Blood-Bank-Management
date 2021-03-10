<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctor</title>
    <link rel="stylesheet" href="search1.css">
    <link rel="stylesheet" href="doctorfun.css.css">
      <script src="jquery-1.10.2.min.js"></script>
       <script src="JQUERY%20Main.js"></script>
       <link rel="stylesheet" href="./fontawesome/css/all.css">
       <link href="https://fonts.googleapis.com/css?family=Crimson+Pro&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://kit.fontawesome.com/62d7f08aa0.js"></script>
       <style>
       body{
        color: white;
        }
        th{
        text-align:center;
        background-color: transparent;
        color:white;
        }
        table{
        border-collapse:collapse;
        width:70%;
        font-family:sans-serif;
        font-size: 15px;
        text-align:center;
        margin-top:50px;
        margin-left: auto;
        margin-right: auto;
        }
        table,th,td{
        padding:10px;
        border:1px solid white;
        }
        p4{
        font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="back">
            <div class="logo">
                <a href="index.html"><img src="SVG Stroke.svg" alt=""></a>
            </div>
            <nav>
            <div class="header">
                <button class="home"><a href="#">Home</a></button>
                <div class="doctor">
                    <button>Doctor</button>
                    <ul>
                        <li><a href="reglog.html">SignIn</a></li>
                        <li><a href="reglog.html">SignUp</a></li>
                        <li><a href="doctorfun.php">Add</a></li>
                        <li><a href="doctorfun.php">Update</a></li>
                        <li><a href="doctorfun.php">Search</a></li>
                    </ul>
                </div>
                <div class="donor">
                    <button>Donor</button>
                    <ul>
                        <li><a href="">SignIn</a></li>
                        <li><a href="">SignUp</a></li>
                        <li><a href="">Update</a></li>
                    </ul>
                </div>
            </div>
        </nav>
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
    <table>
            <tr align="justify">
            <th> DonorName </th>
            <th> DonorCity </th>
            <th> DonorMobile </th>
            <th> BloodGroup </th>
            <th> Last Donate Date(YY-MM-DD) </th>
            <th> Duration </th>
        </tr>
        <?php
        //session_start();
        $conn = mysqli_connect("localhost","root","23032000","life");
        if($conn-> connect_error)
        {
            die("Connection Failed".$conn-> connect_error);
        }
        //echo 'connected successfully<br>';
        if(isset($_POST['search']))
        {
        $sql="CREATE VIEW search1 AS
            (
            SELECT donorsign.donorname,
                   donorsign.donorcity,
                   donorsign.donormobile,
                   donorsign.blood,
                   donorsign.donordate,
                   DATEDIFF(CURDATE(), donordate) AS last FROM donorsign
                   UNION
            SELECT docaddfun.donorname,
                   docaddfun.donorcity,
                   docaddfun.donormobile,
                   docaddfun.blood,
                   docaddfun.donordate,
                   DATEDIFF(CURDATE(), donordate) AS last FROM docaddfun order by donorname)";
        $res = $conn->query($sql);
        $va = $_POST['donorcity'];
        $v = $_POST['blood'];
        $sql1 = "SELECT * FROM SEARCH1 WHERE blood='$v' AND donorcity LIKE '%$va%' AND last>120";
        //$sql1 = "SELECT * FROM search1 WHERE blood='$v' AND donorcity LIKE '%$va%'";
        $result = $conn->query($sql1);
        if ($result->num_rows > 0)
        {
            echo "<p4> Search result for ".$v." donors in ".$va. "</p4>";
        // output data of each row
        while($row = $result->fetch_assoc())
            {
                echo "<tr><td>" . $row["donorname"]. "</td><td>" . $row["donorcity"]. "</td><td>" . $row["donormobile"].
                 "</td><td>" . $row["blood"]. "</td><td>" . $row["donordate"]."</td><td>".$row["last"]."</td></tr>";
                 //send msg
                $mobile = $row["donormobile"];
                $msg = "Urgently need '".$row['blood']."' Blood Group.\nPlease contact Dr.".$_SESSION['name']."\nContact:".$_SESSION['mobile']."\nFrom Lifesaver Organisation";
                // Authorisation details.
                    $url="https://www.way2sms.com/api/v1/sendCampaign";
                    $message = urlencode("msg");// urlencode your message
                    $curl = curl_init();
                    curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
                    curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=66J9W5IQHALZ8T9EMV3BDPZBVYJWMNLU&secret=7B71CGZHSHW2RW8N&usetype=stage&phone=$mobile&senderid=deena23032000@gmail.com&message=$msg");// post data
                    // query parameter values must be given without squarebrackets.
                     // Optional Authentication:
                    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                    $result1 = curl_exec($curl);
                    curl_close($curl);
                    //echo $result1;
                     echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$result1');
        </SCRIPT>";
            }
            echo "</table>";
        }
        else
        {
            echo "<p4> Search result for ".$v." donors in ".$va. ":0 </p4>";
            echo "";
        }
    }
     $sql2 = "DROP VIEW search1";
        $res1 = $conn->query($sql);
        if($res1)
        {
            echo 'view droped';
        }
        mysqli_close($conn);
?>




        </div>
        <div id="particles-js"></div>
    </div>

    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>
</html>



