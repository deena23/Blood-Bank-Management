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
        $values = $_POST['pass'];
        $sql = "INSERT INTO donorsign (donorname,donorcity,donormobile,blood,donordate,pass) VALUES ('$v','$va','$val','$valu','$value','$values')";
        if ($conn->query($sql) === TRUE) {
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('Registered Successfully');
            window.location.replace(\"donorreglog.html\");
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
