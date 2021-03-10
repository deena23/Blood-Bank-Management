<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
      <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .box{
            height: 150px;
            width: 70%;
            border:1px solid black;
            align-items:center;
            justify-content: space-around;
        }
        input{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="box">
    <form action="free2sms.php" method="POST" accept-charset="utf-8">
        Mobile:<input type="tel" name="mno" value="" placeholder=""><br>
        Msg:<input type="text" name="msg" value="" placeholder=""><br>
        <input type="submit" name="ok" value="Send">
    </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['ok']))
    {
        $mobile = $_POST['mno'];
        $msg = $_POST['msg'];
        //post
        $url="https://www.way2sms.com/api/v1/sendCampaign";
        $message = urlencode("msg");// urlencode your message
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
        curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=EP38KZK94BZOHK0VJ8NI6ACZ6CDVK39A&secret=VTD7T77VKXXNVPLI&usetype=stage&phone=$mobile&senderid=vbaskar.1999@gmail.com&message=$msg");// post data
        // query parameter values must be given without squarebrackets.
         // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result1 = curl_exec($curl);
        curl_close($curl);
        echo $result1;
    }
?>
