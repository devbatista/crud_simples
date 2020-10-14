<?php

namespace src\controllers;

use \core\Controller;
use \PHPMailer\PHPMailer\PHPMailer;

class EmailController extends Controller
{
    public function enviarPHPMailer()
    {
        echo 'salve';
        // $mailer = new PHPMailer();

        // $mailer->isSMTP();
        // $mailer->SMTPAuth = true;

        // $mailer->SMTPDebug = 0;
        // // Ativar o Debug em 3 para verificar possíveis erros
        // // $mailer->SMTPDebug = 3; 

        // $mailer->Username = 'mensagem@awconsultores.com.br';
        // $mailer->Password = 'SpSystems@2020';

        // $mailer->SMTPSecure = 'tls';

        // $mailer->Host = 'smtp.awconsultores.com.br';
        // $mailer->Port = 587;

        // $mailer->setFrom('mensagem@awconsultores.com.br', 'AW Consultores');
        // $mailer->addReplyTo($_POST['email'], $_POST['nome']);
        // $mailer->addAddress('batist11@gmail.com', 'Rafael Batista');

        // $mailer->isHTML(true);

        // $mailer->Subject = 'Contato do site - AW Consultores';
        // $mailer->Body = 'salve';
        // $mailer->AltBody = 'salvado';

        // if (!$mailer->send()) {
        //     $return = [
        //         'code' => 1,
        //         'msg' => "Mensagem não enviada, tente novamente"
        //     ];
        //     echo json_encode($return);
        // } else {
        //     $return = [
        //         'code' => 0,
        //         'msg' => "Mensagem enviada com sucesso!"
        //     ];
        //     echo json_encode($return);
        // }
    }

    public function enviarMail()
    {
        $para = $_POST['para'];
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $subject = "Envio de email com MAIL()";

        $msg = "Dados do usuário<br>";
        $msg .= "id: " . $id . "<br>";
        $msg .= "nome: " . $nome . "<br>";
        $msg .= "email: " . $email;

        $headers = 'From: batist11@gmail.com' . "\r\n";
        $headers .= 'Reply-To: batist11@gmail.com' . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();

        if (mail($para, $subject, $msg, $headers)) {
            $code = [
                'code' => 0,
                'msg' => 'Email enviado com sucesso'
            ];
        } else {
            $code = [
                'code' => 1,
                'msg' => 'Falha no envio do email, tente novamente'
            ];
        }

        echo json_encode($code);
    }
}
