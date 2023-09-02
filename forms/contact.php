<?php 
if(isset($_POST['submit'])){
    $to = "hammouda.ahmedmustapha@gmail.com"; // This is your Email address
    $from = $_POST['email']; // This is the sender's Email address
    $name = $_POST['name'];
   
    $subject = $_POST['subject'];
   
    $message = $_POST['message'];

    // Define headers
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Return-Path: $from\r\n";
    $headers .= "X-Mailer: PHP\r\n";
    
    mail($to, $subject, $message, $headers);
    
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
