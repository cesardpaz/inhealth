<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class INHEALTH_Ajax_Public {

    public function send_email() {
        if( isset( $_POST[ 'action' ] ) ) {

            // TODO: remove and added fake send

            $name    = $_POST['name'];
            $email   = $_POST['email'];
            $message = $_POST['message'];

            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->Host       = 'smtp.mail.yahoo.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = '';
                $mail->Password   = '';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                $mail->setFrom('', 'Mailer');
                $mail->addAddress('multiples_expresiones@yahoo.com.ar', $name);

                $mail->isHTML(true);
                $mail->Subject = 'Formulario Web -' . $name;
                $mail->Body    = $message . '<br><br> Email: ' . $email;

                $mail->send();
                $res = [
                    'res'     => 'conexion',
                    'name'    => $name,
                    'email'   => $email,
                    'message' => $message
                ];
                echo json_encode($res);
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            wp_die();
        }
    }
   
}
