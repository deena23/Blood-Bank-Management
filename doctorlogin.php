<?php
        $conn = mysqli_connect("localhost","root","23032000","life");
        if($conn-> connect_error)
        {
            die("Connection Failed".$conn-> connect_error);
        }
        echo 'connected successfully <br>';
        $v = $_POST['doctorid'];
        $va = $_POST['pass'];
        $sql = "SELECT doctorname FROM doctorsign WHERE doctorid='$v' AND pass='$va' ";
        $result =mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        if(!$result)
        {
            die ('Error: '.mysqli_connect_error());
        }
        if(mysqli_num_rows($result)>0)
        {
            echo "Welcome Doctor ".$row['doctorname']."<br>";
            mysqli_free_result($result);
        }
        else{
            echo "Invalid Username or Password";
        }
        mysqli_close($conn);
?>
