<?php
if(isset($_POST['mailform'])) {
if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
    $header="MIME-Version: 1.0\r\n";
    $header.='From:<mail>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
    $message='
    <html>
        <body>
            <div align="center">
        
            <u>Nom de l\'expéditeur :</u>'.$_POST['name'].'<br />
            <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
            <br />
            '.nl2br($_POST['message']).'
        
            </div>
        </body>
    </html>
    ';
    mail("ham.in.kneesocks@gmail.com", "Sujet du message", $message, $header);
    $msg="Votre message a bien été envoyé !";
} else {
    $msg="Tous les champs doivent être complétés !";
}
}
?>