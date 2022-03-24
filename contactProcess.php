<?php // NOT FUNCTIONAL JUST FOR FUTURE REFERENCE

if($_POST['contactForm']) {
    $fullName = "contactName";
    $email = "contactEmail";
    $emailMessage = "contactMessage";
    $email_body = "";

    if(isset($_POST['contactName'])) {
        $fullName = filter_var($_POST['contactName'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Contact Name:</b></label>&nbsp;<span>".$fullName."</span>
                        </div>";
    }

    if(isset($_POST['contactEmail'])) {
        $email = filter_var($_POST['contactEmail'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Contact Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }

    if(isset($_POST['contactMessage'])) {
        $emailMessage = filter_var($_POST['contactMessage'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Your Message:</b></label>&nbsp;<span>".$emailMessage."</span>
                        </div>";
    }

    $email_body .= "</div>";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";

    if(mail($fullName, $email, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $fullName. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }

} else {
    echo '<p>Something went wrong</p>';
}
?>