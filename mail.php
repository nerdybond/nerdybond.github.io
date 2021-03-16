<?php $name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$formcontent="New website contact form message from: $name \n Message: \n $message \n";
$recipient = "info@michaelbond.com.au";
$subject = "Form - Hello from $name";
$mailheader = "FROM: $email";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Sorry, but there appears to be a problem with the form you submitted. Please go back and resubmit the form.");

if (isset($_POST['Submit']))?>
<script type="text/javascript">
window.location = "http://www.michaelbond.com.au/";
</script>      
?>