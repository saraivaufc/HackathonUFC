<?php

if (isset($_POST['formContato'])) {
    // Set some variables
    $required_fields = array('name', 'email');
    $errors = array();

    $success_message = "Parabéns! Sua mensagem foi enviada com sucesso!";
    $sendmail_error_message = "Ops! Algo deu errado, por favor tente mais tarde.";

    // Cool the form has been submitted! Let's loop through the required fields and check
    // if they meet our condition(s)
    foreach ($required_fields as $fieldName) {
        // If the current field in the loop is NOT part of the form submission -OR-
        // if the current field in the loop is empty, then...
        if (!isset($_POST[$fieldName]) || empty($_POST[$fieldName])) {

            // add a reference to the errors array, indicating that these conditions have failed
            $errors[$fieldName] = "The {$fieldName} is required!";
        }
    }

    // Proceed if there aren't any errors
    if (empty($errors)) {
        $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8' );
        $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8' );

        // Email Sender Settings
        $to_emails = "saraiva.ufc@gmail.com, elisadnh@gmail.com";

        $subject = 'Hackathon: Pedido de contato de ' . $name;
        $message = "From: {$name}";
        $message .= "Email: {$email}";
        $message .= $_POST['email'];

        $headers = "From: {$name}\r\n";
        $headers .= "Reply-To: {$email}\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();

        if (mail($to_emails, $subject, $message, $headers)) {
            echo $success_message;
        } else {
            echo $sendmail_error_message;
        }
    } else {

        foreach($errors as $invalid_field_msg) {
            echo "<p>{$invalid_field_msg}</p>";
        }
    }
}

?> 