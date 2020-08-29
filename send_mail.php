<?php
        $name;$email;$comment;$captcha;
        if(isset($_POST['name'])){
                  $email=$_POST['name'];
                }
        if(isset($_POST['email'])){
          $email=$_POST['email'];
        }
        if(isset($_POST['message'])){
          $comment=$_POST['message'];
        }
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          header('Location: ./#4');
        }
        $secretKey = "6Lcm3cQZAAAAAL_3zSr3MqNZwOhvwoHdr6x6hHuD";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
          // Your code here to handle a successful verification
          $to = "kontakt@project-atlas.at";
          $subject = "".$_POST["betreff"]." | Atlas Contact Form";

          $message = "
          <html>
          <head>
          <title>". $_POST["betreff"] ."</title>
          </head>
          <body>
          <p>
            ". $_POST['message'] ."
          </p>
          <footer><small>von ". $_POST['name'] ." | ". $_POST['email'] ."</small></footer><br>
          <footer><small>Atlas | Contact Form System</small></footer>

          </body>
          </html>
          ";

          // Always set content-type when sending HTML email
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

          // More headers
          $headers .= 'From: Atlas Contact Form <kontakt@project-atlas.at>' . "\r\n";

          mail($to,$subject,$message,$headers);
          header('Location: ./?success=true#4');
        }
        else {
          header('Location: ./#4');
        }
?>