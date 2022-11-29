<?php
if(isset($_POST['btn-send'])){
    $name = $_POST['name'];
    $userEmail = $_POST['email'];
    $message = $_POST['message'];

        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        header('location:/../..index.php?invalidemail#contact');
        }
    if(empty($name) || empty($userEmail) || empty($message)){
        header('location:/../../index.php?errorblank#contact');
    }
    else
    {
            //sanitize inputs
            $name = trim($name);
            $name = strip_tags($name);
            $name = htmlspecialchars($name);

            $userEmail = trim($userEmail);
            $userEmail = strip_tags($userEmail);
            $userEmail = filter_var($userEmail, FILTER_SANITIZE_EMAIL);
            $userEmail = htmlspecialchars($userEmail);

            $message = trim($message);
            $message = strip_tags($message);
            $message = htmlspecialchars($message);
            
            //set subject
            $subject = 'Contact from: '.$name;

            // Email Headers
            $headers = "MIME-Version: 1.0"."\r\n";
            $headers .="Content-Type:text/html;charset=UTF-8"."\r\n";

            //format mail
            $messageBody = '<h2>Contact Request</h2>
            <h4>Name</h4><p>'.$name.'</p>
            <h4>Email</h4><p>'.$userEmail.'</p>
            <h4>Message</h4><p>'.$message.'</p>
            ';
            //send mail
            $to = 'contact@zschultz.com';
            if(mail($to,$subject,$messageBody,$headers)){
                header("location:/../../index.php?success#contact");
            }
        }
        
}
else
{
    header("location:index.php");
}