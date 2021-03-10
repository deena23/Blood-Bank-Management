<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <script src="jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
       <script src="JQUERY%20Main.js"></script>
       <link href="https://fonts.googleapis.com/css?family=Crimson+Pro&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://kit.fontawesome.com/62d7f08aa0.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
      body{
            font-family: 'Crimson Pro', serif;
            overflow:hidden;
            }
        .back{
            height: 110vh;
            width: 100%;
            /*background: black;*/
            background:linear-gradient(to left,rgba(255, 143, 0,1.0) 50%,black 50%);
            /*background: rgba(255, 143, 0,1.0);*/
            }
        p{
            color: white;
            text-align: center;
            font-size: 22px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .head{
            margin-top: -20px;
            height: 70px;
            width:100%;
            background: transparent;
            text-align: center;
        }
        .head .logo{
            margin-top: 20px;
            height: 70px;
            width: 25vh;
            background: black;
        }
        .logoi{
            background: transparent;
            position: absolute;
            margin-top: -40px;
            margin-left: 82%;
            height: 70px;
            width: 36vh;
        }
        i{
            margin-left: 0px;
            margin-top: 0px;
            transform: translate(-50%,-50%);
            color: white;
        }
        .fa-question-circle{
            margin-left: 40px;
        }
        i:hover{
            color:black;
            cursor: pointer;
        }
        a{
            /*text-decoration: none;*/
            color:white;
        }
    </style>
</head>
<body>
    <div class="back">
        <div class="head">
            <div class="logo">
                <a href="index.html"><img src="SVG Stroke.svg" alt=""></a>
            </div>
            <div class="logoi">
                <i class="far fa-envelope fa-lg"></i>
                <i class="far fa-question-circle fa-lg"></i>
            </div>
            <div id="particles-js"></div>
        </div>
        <p>
        <?php
        $conn = mysqli_connect("localhost","root","23032000","life");
        if($conn-> connect_error)
        {
            die("Connection Failed".$conn-> connect_error);
        }
        //echo 'connected successfully<br>';
        $v = $_POST['doctorname'];
        $va = $_POST['workplace'];
        $val = $_POST['doctormobile'];
        $valu = $_POST['pass'];
        $sql = "INSERT INTO doctorsign (doctorname,workplace,doctormobile,pass) VALUES ('$v','$va','$val','$valu')";
        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            echo"successfully Registered!<br>";
            echo "Your DoctorID is " . $last_id;
            echo '<br>';
            echo '<a href="reglog.html"> For Login </a>';
        } else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
               }
        /*$result =mysqli_query($conn,$sql);
        if(!$result)
        {
            die ('Error: '.mysqli_connect_error());
        }*/
        mysqli_close($conn);
?>
        </p>
    </div>
    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>
</html>
