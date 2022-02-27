
<?php


    // the message
$msg = "Aslam o Alykum,
                You have received a new Order on Perfectapapers.com \nFrom,\nPerfectapapers \n Note:\n Please don't reply because this is an auto generated email.";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

    // send email
$mail_sent = mail("aagiftforall@gmail.com","New Order on Perfectapapers",$msg);

           mail("usamasheikh1994@gmail.com","New Order on Perfectapapers",$msg);

?>