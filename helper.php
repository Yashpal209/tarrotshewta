<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require_once 'vendor/autoload.php';

    function sendmail($to,$subject,$message){

        $from='jharkhanditservice@gmail.com';
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true; 
        $mail->Username = "jharkhanditservice@gmail.com"; // SMTP username
        $mail->Password = "bntvbmrjkmabdqht"; // SMTP password 
        $mail->From = $from;
        $mail->SetFrom($from,'Tarrot With Shweta');
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587; 
        $mail->addAddress($to, $to);
        
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body =$message;
        try {
                $mail->send();
                return true;
                }         
                catch (Exception $e) {
                    return false;
            }
    }
    
?>
