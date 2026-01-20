<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST["Name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Simple validation
    if(empty($Name) || empty($email) || empty($phone) || empty($message)) {
        echo "Please fill all fields!";
        exit;
    }

    // Optional: Email sending (later enable)
    /*
    $to = "yourmail@gmail.com";
    $subject = "New Contact Message";
    $body = "Email: $email\nPhone: $phone\nMessage:\n$message";
    $headers = "From: $email";

    mail($to, $subject, $body, $headers);
    */

    echo "Message Sent Successfully!";
}
?>
<script>
  function toggleMenu() {
    document.getElementById("sideMenu").classList.toggle("active");
  }
</script>
