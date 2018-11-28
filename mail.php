<?php
    $to = 'fael_st@hotmail.com';
    $firstname = $_POST["name"];
    $email= $_POST["email"];
    $assunto= $_POST["subject"];
    $text= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr><td>nome: '.$firstname.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>assunto: '.$assunto.'</td></tr>
        <tr><td>Menssagem: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Menssagem enviada com sucesso.';
    }else{
        echo 'Falha ao enviar.';
    }

?>
