<?php

function validate_user_email($POST){
    // Remove all illegal characters from email
    $user_email = filter_var($POST['user_email'], FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        // Separate string by @ characters (there should be only one)
        $parts = explode('@', $user_email);

        // Remove and return the last part, which should be the domain
        $domain = array_pop($parts);

        // Check if the domain is WMSU
        if (strcmp(strtolower($domain), 'wmsu.edu.ph') != 0)
        {
            return false;
        }
    } else {
        return false;
    }
    return true;
}



?>