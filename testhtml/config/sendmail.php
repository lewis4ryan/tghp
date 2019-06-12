<?php
/**
 * Date: 2/23/17
 * Time: 14:28
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/phpmailer/phpmailer/PHPMailerAutoload.php');
/**
 * todo send mail
 * @param $subject
 * @param $body
 * @return bool
 */
function sendmail($subject, $body, $mail_to, $name_to, $name_from, $attachment = '')
{
    $config = require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->CharSet = $config["SMTP_CHARSET"];
    $mail->Host = $config["SMTP_HOST"];
    $mail->SMTPAuth = true;
    $mail->SMTPDebug  = 0;
    $mail->Username = $config["SMTP_USERNAME"];
    $mail->Password = $config["SMTP_PASSWORD"];
    $mail->SMTPSecure = $config["SMTP_SERCURE"];
    $mail->Port = $config["SMTP_PORT"];
    $mail->setFrom($config["SMTP_USERNAME"], $name_from);
    $mail->addAddress($mail_to, $name_to);
    $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
    $mail->isHTML(true);
    if(!empty($attachment)){
        $mail->AddAttachment($attachment,"履歴書.pdf");
    }
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AltBody = $body;

    return $mail->Send();
}
