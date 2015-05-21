<?php
require("class.phpmailer.php");
$mail          = new PHPMailer();
//********************************************/
$SMTP_Host     = "mail.suachuasmartphonedanang.com";
$SMTP_Port     = 25;
$SMTP_UserName = "test@suachuasmartphonedanang.com";
$SMTP_Password = "THL@@08mb!";
$from          = $SMTP_UserName;
$to            = "longth@matbao.com";
// Luu y: $SMTP_UserName = $from
//********************************************/

$mail->IsSMTP();
$mail->Host     = $SMTP_Host;
$mail->SMTPAuth = true;
$mail->Username = $SMTP_UserName;
$mail->Password = $SMTP_Password;

$mail->From     = $from;
$mail->FromName = "Ten Nguoi gui";
$mail->AddAddress($to);
//$mail->AddReplyTo("info@site.com","Information");

$mail->WordWrap = 50;
//$mail->AddAttachment("/var/tmp/file.tar.gz");
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");
$mail->IsHTML(true);

$mail->Subject = "Tieu de Mail";
$mail->Body    = "Day la <b>noi dung mail</b>";
$mail->AltBody = "This is the text-only body";

if (!$mail->Send()) {
  echo "Mail gui khong thanh cong! <p>";
  echo "Thong bao loi: ".$mail->ErrorInfo;
  exit;
}
echo "Mail gui thanh cong!";
?>