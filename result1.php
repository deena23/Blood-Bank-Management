<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doctor</title>
    <link rel="stylesheet" href="doctorfun.css">
    <script src="jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
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
                        //echo "<script>alert('login successfully');</script>";
                        echo '<a href="logout.php?logout"><i class="fa fa-sign-out fa-lg" style="margin-left:20px;"></i></a>';
                    }
                    else
                    {
                        header("location:reglog.html");
                    }
                ?>
            </div>
        <?php
$n=1;
function getName($n) {
    $characters = '+-';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $n; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    $randomString = '';
}
echo "Result:".getName($n)."Ve\n";
if(getname($n)=='+')
{
    echo 'eligible <a href="doctorfun.php">Add</a>';
    $randomString='';
}
else
{
    echo 'Not Eligible For Donating Blood';
    $randomString='';
}
?>

        </div>

        <div id="particles-js"></div>
    </div>

    <script src="particles.js"></script>
    <script src="app.js"></script>
</body>
</html>


