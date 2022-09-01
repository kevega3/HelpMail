<?php 
include('Modelo/Correos/Mail/class.phpmailer.php');
include('Modelo/Correos/Mail/class.smtp.php');
//Configuration
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->CharSet  = 'UTF-8';
$mail->Host     = 'localhost';
$mail->SMTPAuth = false;

//Email details
$mail->From     = 'email@email.com'; 
$mail->FromName = 'My email'; 
$mail->Subject  = 'You have a new email';
$mail->Body     = 'Hi there, You have a new message.<br>';
$mail->AltBody  = 'Hi there, You have a new message.';

//Loop through recipients
$mail->AddStringAttachment($pdf, $filename); 
if (!empty($attach)) {
    $mail->AddAttachment($path, $report);    
}

foreach ($recipients as $recipient) {
    $mail->addAddress($recipient);

    if ( !$mail->Send() ) {
        echo 'Not sent';     
    } else {
        echo 'Sent';
    }

    // Clear all addresses and attachments for next loop
    $mail->clearAllRecipients();
}

$mail->clearAttachments();
?>