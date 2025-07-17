 <?php
   if ($_SERVER["REQUEST_METHOD"] == "GET") {
       // Collect form data
       $name = htmlspecialchars($_GET['name']);
       $email = htmlspecialchars($_GET['email']);
       $phone = htmlspecialchars($_GET['phone']);
       $subject = htmlspecialchars($_GET['subject']);
       $message = htmlspecialchars($_GET['message']);
       // Email settings
       $to = "svpatel442@gmail.com"; // Your registered email
       $subject = "New Contact Form Submission: $subject";
       $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
       $headers = "From: $email";
       // Send email
       if (mail($to, $subject, $body, $headers)) {
           echo "Message sent successfully!";
       } else {
           echo "Failed to send message.";
       }
   } else {
       echo "Invalid request.";
   }
   ?>
