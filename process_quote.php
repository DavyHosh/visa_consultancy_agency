<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "skyfinixconsultancy@gmail.com
    ";

    // Extract form data
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $guidance = $_POST["guidance"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $message = $_POST["message"];
    $email = $_POST["email"];

    // Construct the email message
    $emailMessage = "Quote Request:\n\n";
    $emailMessage .= "Name: $firstName $lastName\n";
    $emailMessage .= "Guidance: $guidance\n";
    $emailMessage .= "Phone: $phone\n";
    $emailMessage .= "Country: $country\n";
    $emailMessage .= "Message: $message\n";
    $emailMessage .= "Email: $email\n";

    // Send email
    mail($to, "Quote Request", $emailMessage);

    header("Location: thank_you_page.php");
    exit();
}
?>
