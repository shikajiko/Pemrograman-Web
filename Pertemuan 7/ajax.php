<?php
if (!empty($_POST['name']) && !empty($_POST['email'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
	
    sleep(1);

    echo "<span style='color:green; font-weight:bold;'>
    Hi, $name! Your message has been received successfully (simulation only, no email sent).
    </span>";
} else {
    echo "<span style='color:red; font-weight:bold;'>
    Error: Missing name or email field.
    </span>";
}
?>
