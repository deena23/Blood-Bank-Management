<?php
        $conn = mysqli_connect("localhost","root","23032000","life");
        if($conn-> connect_error)
        {
            die("Connection Failed".$conn-> connect_error);
        }
        //echo 'connected successfully<br>';
        $v = $_POST['donorname'];
        $va = $_POST['donorcity'];
        $val = $_POST['donormobile'];
        $valu = $_POST['blood'];
        $value = $_POST['donordate'];
        $sql = "INSERT INTO docaddfun (donorname,donorcity,donormobile,blood,donordate) VALUES ('$v','$va','$val','$valu','$value')";
        if ($conn->query($sql) === TRUE) {
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('Donor Added Successfully');
            window.location.replace(\"doctorfun.php\");
            </SCRIPT>";
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
