<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<?php
try
{
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Retrieve form data
        $fullName = $_REQUEST["fullname"];
        $senderEmail = $_REQUEST["email"];
        $mobileNumber = $_REQUEST["phone"];
        $emailSubject = $_REQUEST["subject"];
        $message = $_REQUEST["message"];
    
        // Recipient's email address
        $recipientEmail = "abhaygupta242527@gmail.com";
        
        // Compose the email message
        $messageBody = "Full Name: $fullName\n";
        $messageBody .= "Sender's Email: $senderEmail\n";
        $messageBody .= "Mobile Number: $mobileNumber\n";
        $messageBody .= "Email Subject: $emailSubject\n";
        $messageBody .= "Message: $message\n";
        
        // Set headers
        $headers = "From: $senderEmail";
    
        // Send the email
        mail($recipientEmail, $emailSubject, $messageBody, $headers);
    
        // Redirect to a thank you page
       header("Location: thankyou.html");
    } else {
        // Handle cases where the form is accessed directly
        echo "Invalid request.";
    }
   
}
catch(Exception $e)
{
    echo "message : " .$e->getMessage();
}
?>
</body>
</html>