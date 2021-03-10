<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        echo 'welcome dr.'.$_SESSION['user'].'</br>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:reglog.html");
    }

  ?>
