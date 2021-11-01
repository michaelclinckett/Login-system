<?php

require_once "connect.php";
require_once "session.php";

// Import PHPMailer classes into the global namespace 
//use PHPMailer\PHPMailer\PHPMailer; 
//use PHPMailer\PHPMailer\Exception; 
//use PHPMailer\PHPMailer\SMTP;
 
//require 'PHPMailer/src/Exception.php'; 
//require 'PHPMailer/src/PHPMailer.php'; 
//require 'PHPMailer/src/SMTP.php'; 

//$mail = new PHPMailer;





$email = $_REQUEST ['email'];
$password = $_REQUEST ['password'];
$fullname = $_REQUEST ['name'];
    
//function send_verification() {
    //        try {
    //Server settings
  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    //$mail->isSMTP();                                            //Send using SMTP
    //$mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    //$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //$mail->Username   = 'user@example.com';                     //SMTP username
    //$mail->Password   = 'secret';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    //$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    //$mail->setFrom('test@example.com', 'Mailer');
    //$mail->addAddress($email, 'User');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('18381@jhc.school.nz', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    //$mail->isHTML(true);                                  //Set email format to HTML
    //$mail->Subject = 'Verification code';
    //$mail->Body    = 'Your verification number is: <b>192749</b>';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //$mail->send();
    //echo 'Message has been sent';
//} catch (Exception $e) {
  //  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//}
            
        //}
        

$sql = "INSERT INTO users (email, password, name)
        VALUES ('$email','$password','$fullname')";


         $to = "18381@jhc.school.nz";
         $subject = "Verification code";
         
         $message = "<b>Your verification code is</b>";
         $message .= "<h1>123658</h1>";
         
         $header = "From:18381@jhc.school.nz \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
    if ($conn->query($sql) === TRUE){
        echo "New user created successfully";

        
        
        
        echo "<script>location.href='verify.php'</script>";
        header("location: verify.php");
    }
    else{
        echo"Error:" . $sql . "<br>" . $conn->error;
    }

         }else {
            echo "Message could not be sent...";
         }


        
   
?>