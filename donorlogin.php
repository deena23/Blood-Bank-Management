<?php
session_start();
$conn = mysqli_connect("localhost","root","23032000","life");
        if($conn-> connect_error)
        {
            die("Connection Failed".$conn-> connect_error);
        }
if(isset($_POST['login']))
{
    if(empty($_POST['donormobile']) || empty($_POST['pass']))
    {
        /*echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('fill the box');
        window.location.replace(\"reglog.html\");
    </SCRIPT>";*/
    }
    else
    {
        $v = $_POST['donormobile'];
        $va = $_POST['pass'];
        $sql = "SELECT donorname FROM donorsign WHERE donormobile='$v' AND pass='$va' ";
        $result =mysqli_query($conn,$sql);
        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['user']=$_POST['donormobile'];
            header("location:donorfun.php");
        }
        else{
            echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('invalid username or password');
        window.location.replace(\"donorreglog.html\");
    </SCRIPT>";
        }
    }
}
else
{
    echo 'not working';
}



  ?>
