<?php
 
require_once 'swiftmailer-master/lib/swift_required.php';
 
//Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername('juan2ramos@gmail.com')
  ->setPassword('JcRpYjErT1212')
  ;
 
/*
You could alternatively use a different transport such as Sendmail or Mail:
 
//Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
 
//Mail
$transport = Swift_MailTransport::newInstance();
*/
 
//Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);
 
//Create a message
$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('john@doe.com' => 'John Doe'))
  ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))
  ->setBody('Here is the message itself')
  ;
   
//Send the message
$result = $mailer->send($message);