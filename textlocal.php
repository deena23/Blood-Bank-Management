<?php
    if(isset($_POST['ok']))
    {
        $mobile = $_POST['mno'];
        $msg = $_POST['msg'];
            // Authorisation details
    // Authorisation details.
    $username = "kokulmanivannan@gmail.com";
    $hash = "e3749324eebc4d928b003bd45db4968d49111324d82537dcacdd7c06bb555109";

    // Config variables. Consult http://api.txtlocal.com/docs for more info.
    $test = "0";

    // Data for text message. This is the text message data.
    $sender = "API Test"; // This is who the message appears to be from.
    $numbers = "44777000000"; // A single number or a comma-seperated list of numbers
    $message = "This is a test message from the PHP API script.";
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
    $ch = curl_init('http://api.txtlocal.com/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
    }
?>
