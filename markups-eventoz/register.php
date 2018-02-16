<?php
    //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $user = $_POST["email"];
        $name = strip_tags(trim($_POST["name"]));
        $college = strip_tags($_POST["college"]);
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $number = filter_var($_POST["number"], FILTER_SANITIZE_NUMBER_INT);
        $events = $_POST["events"];
       

        
        if ( empty($name) OR empty($college) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR !filter_var($number, FILTER_VALIDATE_INT) OR empty($events)) {
            
            http_response_code(400);
            echo "Oops! There was a problem with your Registration. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        
        $recipient = "technical.arcadia2k18@gmail.com";

        // Set the email subject.
        $subject = "New Registration for arcadia2k18";
        $subjectuser = "Thanks for Registering";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Email: $number\n\n";
        // $email_content .= "Subject: $cont_subject\n";
        
        $email_content .= "Events: ";
        foreach($events as $event){
            $email_content.= "$event \n";
        }
    


        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! You Have been registered for Arcadia 2k18.Check your mail for more info. ";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't process your registration.";
        }
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <arcadia2k18>' . "\r\n";
$usermail = "
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans|Slabo+27px' rel='stylesheet'>
    <style type='text/css'>
        h2{
            font-family: 'Slabo 27px', serif;
        }
        h1{
            text-align: center;
            color: #EE3268;
        }
        .main{
            padding-left: 20px;
        }
       h3,p{
        font-family: 'Josefin Sans', sans-serif;
       }
    </style>
</head>
<body>
<h1>Arcadia2k18</h1>
<section class='main'>
<h2>Hi,$name</h2>
<h3>THANKS FOR REGISTERING, </h3>
<p>You have been successfully registered for the Arcadia2k18. Make sure to bring the entry fees and the fees of your events at the time of competition.</p>
<p>Regards.</p>
<p>Technical Team </p>
<p>Arcadia2k18</p>
</section>
</body>
</html>

";
    
mail($email, $subjectuser, $usermail, $headers);


    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
