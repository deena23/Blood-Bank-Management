<?php
session_start();
$conn = mysqli_connect("localhost","root","23032000","life");
        if($conn-> connect_error)
        {
            die("Connection Failed".$conn-> connect_error);
        }
if(isset($_POST['login']))
{
    if(empty($_POST['doctorid']) || empty($_POST['pass']))
    {
        /*echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('fill the box');
        window.location.replace(\"reglog.html\");
    </SCRIPT>";*/
    }
    else
    {
        $v = $_POST['doctorid'];
        $va = $_POST['pass'];
        $sql = "SELECT doctorname,doctormobile FROM doctorsign WHERE doctorid='$v' AND pass='$va' ";
        $result =mysqli_query($conn,$sql);
        if($row = mysqli_fetch_assoc($result))
        {
            $_SESSION['user']=$_POST['doctorid'];
            $mobile = $row['doctormobile'];
            $_SESSION['mobile']=$mobile;
            $name = $row['doctorname'];
            $_SESSION['name']=$name;
            header("location:doctorfun.php");
        }
        else{
            echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('invalid username or password');
        window.location.replace(\"reglog.html\");
    </SCRIPT>";
        }
    }
}
else
{
    echo 'not working';
}



  ?>
