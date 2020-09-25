<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "cjroberts2013@gmail.com";
    $headers = "From: ".$emailFrom;
    $txt .= "From ".$name. "\n\n";
    $txt .= "Email: ".$emailFrom. "\n\n";
    $txt .= "Message: ".$message;

    mail($mailTo, "Charles Roberts Design Inquiry", $txt, $headers);
    header("Location: contact.html?mailsend");
}

// <?php 

// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $emailFrom = $_POST['email'];
//     $message = $_POST['message'];

//     $mailTo = "cjroberts2013@gmail.com";
//     $headers = "From: ".$emailFrom;
//     $txt = "You have recieved an email from ".$name.".\n\n".$message;

//     mail($mailTo, "CRD", $txt, $headers);
//     header("Location: contact.html?mailsend");
// }