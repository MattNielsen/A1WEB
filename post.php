<?php


if (empty($_POST["fName"])) {
    header('Location: RegistrationError.html');
}

elseif (empty($_POST["lName"])) {
    header('Location: RegistrationError.html');
}

elseif (empty($_POST["contact-number"])) {
    header('Location: RegistrationError.html');
}

elseif (empty($_POST["Day"])) {
    header('Location: RegistrationError.html');
}

elseif (empty($_POST["Time"])) {
    header('Location: RegistrationError.html');
}

elseif (empty($_POST["guideline-agree"])) {
    header('Location: RegistrationError.html');
}

else {

 date_default_timezone_set("Australia/Brisbane");
 $myFile = fopen("VollyBallRegistrations.txt", "a");

 fwrite($myFile, "First name  {" . $_POST["fName"] . "} Last name {" . $_POST["lName"] . "} Phone Number {" .
     $_POST["contact-number"] . "} E-mail address {"
     . $_POST["email"] . "} Playing day {" . $_POST["Day"] . "} Playing time {" . $_POST["Time"] . "} - submitted ; " .
     date("l jS \of F Y h:i:s A") . "\n");

 fclose($myFile);

 header('Location: RegistrationSubmit.html');
}


?>
