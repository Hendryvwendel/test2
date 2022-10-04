<?php 

if (isset(%_POST['submit'])) {
    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $place = $_POST['place'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];

    $mailTo = "hendryvwendel+code@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$adress.".\n\n".$place".\n\n".$phone;

    mail($mailTo, $name, $txt, $headers);
}

