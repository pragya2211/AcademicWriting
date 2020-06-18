<script language=”JavaScript”>

var frmvalidator = new Validator(“contactform”); frmvalidator.addValidation(“name”,”req”,”Please provide your name”); frmvalidator.addValidation(“email”,”req”,”Please provide your email”); frmvalidator.addValidation(“email”,”email”, “Please enter a valid email address”); </script>

<?php

$errors = "";

$myemail = 'pragyagandhi22@gmail.com';//<—–Put Your email address here. i
echo "".$myemail."";

echo "".$_POST["name"]."";
echo "".$_POST["email"]."";
echo "".$_POST["message"]."";


if(empty($_POST['name']) ||

empty($_POST['email']) ||

empty($_POST['message']))

{

$errors .= "\n Error: all fields are required";

}

$name = $_POST['name'];

$email_address = $_POST['email'];

$message = $_POST['message'];


echo "$errors";
if( empty($errors))

{
echo "innn this";
$to = $myemail;

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $name \n ".

"Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

echo "".$to."";
echo "".$headers."";
echo "".$email_subject."";
echo "".$email_body."";

if(mail($to,$email_subject,$email_body,$headers)){
        echo "The email($email_subject) was successfully sent.";
    } else {
        echo "The email($email_subject) was NOT sent.";
    }

//redirect to the ‘thank you’ page


}
