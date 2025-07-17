 <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Collect form data
       $name = htmlspecialchars($_POST['name']);
       $email = htmlspecialchars($_POST['email']);
       $phone = htmlspecialchars($_POST['phone']);
       $subject = htmlspecialchars($_POST['subject']);
       $message = htmlspecialchars($_POST['message']);
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
