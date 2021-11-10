<?php
if(isset($_POST['mailform'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:'.$_POST['nom']."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
           
               <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
               <br />
               '.nl2br($_POST['message']).'
          
            </div>
         </body>
      </html>
      ';
      mail("ham.in.kneesocks@gmail.com", "Sujet du message", $message, $header);
      $msg="Votre message a bien été envoyé !";
      header("Refresh: 5; https://ilanr.promo-93.codeur.online/portfolio/");
   } else {
      $msg="Tous les champs doivent être complétés !";
   }
}
?>