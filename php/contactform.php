
<?php


if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $message = $_POST['message'];

$mailTo = "firstview.let@btinternet.com";
$headers = "From: ".$mailFrom;
$txt = "You have recieved an enquiry from ".$name.".\n\n".$message."\n\n Phone Number: ".$phone."\n\n Address: ".$address;


  mail($mailTo, $subject, $txt, $headers);
  header("Location: index-contact.php?mailsend");

}
?>
