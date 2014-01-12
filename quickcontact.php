<?php 
$name       =    $_POST['quick-contact-form-name'];
$email      =    $_POST['quick-contact-form-email'];
$message    =    $_POST['quick-contact-form-message'];

$headingStyle   =   "style=\"font-weight: bold; padding-right: 20px; background: rgb(77, 173, 197); color: white; text-align: right; padding: 5px 10px;\"";
$valueStyle     =   "style=\"font-weight: bold; padding-right: 20px; background: rgb(223, 223, 223); color: rgb(90, 90, 90); padding: 5px 10px;\"";


// $to         = "sandeep@creativesands.in, vinay@thsae.com, abhishek@thsae.com";
$to         = "sandeep@creativesands.in";
$from       = "info@quicksparks.org";
$subject    = "Quick Contact Request From $name";

$emailBody  = "<table style=\"width: 80%;\">
    <tr>
        <td $headingStyle >Name</td>
        <td $valueStyle >$name</td>
    </tr>
    <tr>
        <td $headingStyle >Email</td>
        <td $valueStyle >$email</td>
    </tr>
    <tr>
        <td $headingStyle >Message</td>
        <td $valueStyle >$message</td>
    </tr>
</table>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= "From: $from" . "\r\n";

mail($to,$subject,$emailBody,$headers);

echo "Thank you $name, we will revert back to you at the earliest."

?>
