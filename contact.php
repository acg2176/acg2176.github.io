<?php

if($_POST["submit"]) {
    $recipient="acg2176@columbia.edu";
    $firstName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $senderEmail=$_POST["senderEmail"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    $mailBody ="Name: $firstName\n$lastName\nEmail:$senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From:$firstName $lastName <$senderEmail>");

}
?>

Thank you for your message. I will be in touch with you very soon.

<?php
}
?>