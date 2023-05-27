<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class INHEALTH_Ajax_Public {

    public function send_email() {
        if( isset( $_POST[ 'action' ] ) ) {

            $name    = $_POST['name'];
            $email   = $_POST['email'];
            $message = $_POST['message'];

            $mail = new PHPMailer(true);

            try {
                // Configuración del servidor
                $mail->SMTPDebug = 2; // Habilita la salida de depuración detallada
                $mail->isSMTP(); // Enviar usando SMTP
                $mail->Host       = 'smtp.mail.yahoo.com'; // Configura el servidor SMTP para enviar
                $mail->SMTPAuth   = true; // Habilita la autenticación SMTP
                $mail->Username   = 'cesardpaz@yahoo.es'; // Nombre de usuario SMTP
                $mail->Password   = 'xgchiantmugskkop'; // Contraseña SMTP
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Habilita la encriptación TLS; `PHPMailer::ENCRYPTION_SMTPS` también aceptado
                $mail->Port       = 587; // Puerto TCP para conectar, usa 465 para `PHPMailer::ENCRYPTION_SMTPS` arriba

                // Destinatarios
                $mail->setFrom('cesardpaz@yahoo.es', 'Mailer');
                $mail->addAddress('multiples_expresiones@yahoo.com.ar', $name); // Añadir un destinatario

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
