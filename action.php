<?php
if (isset($_POST['valide'])) {
    if (isset($_POST['user_name']) && isset($_POST['user_mail']) && isset($_POST['user_message'])) {
        if (!empty($_POST['user_name']) && !empty($_POST['user_mail']) && !empty($_POST['user_message'])) {

            $name = htmlspecialchars($_POST['user_name']);
            $mail = htmlspecialchars($_POST['user_mail']);
            $message = htmlspecialchars($_POST['user_message']);

            echo "<h2>Bonjour <b> $name </b> merci pour votre mail : <b> $mail </b> , nous avons lu votre message : </br> $message </h2>";
        }
    }
}
