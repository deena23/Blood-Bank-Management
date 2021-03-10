<?php
$conn = mysqli_connect("localhost","root","23032000","life");
        if($conn-> connect_error)
        {
            die("Connection Failed".$conn-> connect_error);
        }
        $v = $_POST['donormobile'];
        $va = $_POST['donordate'];
        $sql = "UPDATE docaddfun SET donordate='$va' WHERE donormobile='$v' ";
        $result =mysqli_query($conn,$sql);
        if($result)
        {
            // $_SESSION['user']=$_POST['donormobile'];
            header("location:doctorfun.php");
            // echo "<SCRIPT type='text/javascript'> //not showing me this
        // alert('Updated Successfully!');
        // window.location.replace(\"donorupdate.php\");
    // </SCRIPT>";
        }
else
{
    // echo "<SCRIPT type='text/javascript'> //not showing me this
        // window.location.replace(\"donorupdate.php\");
    // </SCRIPT>";
    echo 'not working';
}
  ?>
