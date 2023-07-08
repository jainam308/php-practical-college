
<h1> Vora Jainam(216090307030)</h1>
<?php
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  $mail = new PHPMailer();
  $mail->IsSMTP();


  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "ssl";
  $mail->Port       = 465;
  $mail->Host       = " ssl://smtp.gmail.com";
  $mail->Username   = "moxit84@gmail.com";
  $mail->Password   = "tipymdyadoiozbvj"; // dont show in code of manaul!

  $mail->IsHTML(true);
  $mail->AddAddress("king98v98@gmail.com", "TEST-JAINAM");
  $mail->SetFrom("moxit84@gmail.com", "Jainam");
  $mail->AddReplyTo("king98v98@gmail.com", "TEST-JAINAM");
  $mail->AddCC("cc-king98v98@gmail.com", "cc-TEST-JAINAM");
  $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
  $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail->ErrorInfo);
  } else {
    echo "Email sent successfully";
  }