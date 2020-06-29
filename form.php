<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST["name"]) && $_POST["name"]!='' && isset($_POST["email"]) && $_POST["email"]!='' && isset($_POST["work"]) && $_POST["work"]!='')
  {  
    if( filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) )
    {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $work = $_POST["work"];
      $message= $_POST["message"];
      $to = "shaikhsadiq411@gmail.com";
      $body = " ";
      $body.="Name :".$name."\r\n";
      $body.="Email :".$email."\r\n";
      $body.="Work :".$work."\r\n";
      $body.="Message:".$message."\r\n";
      
      $emailvar = mail($to,$body,$message);
      if($emailvar == true)
      {
        echo $name.'your data has been send';
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Form Submition</title>
        </head>
          <body>
            <div class="form-div">
              <h1>message send</h1>
            </div>
          </body>
        </html>
        <?php
      }
      else{
        echo'mail not send';
      }
    }
  }
}


/*
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/

?>