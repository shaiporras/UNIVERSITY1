<?php
/* Enter the page URL you would like the user to be redirected to after a successful form submission. */
$goto_after_mail = "https://mail.google.com";
/* Enter your e-mail address for submission notifications. */
$myemail = "jewellann.delossantos31@gmail.com";
/* This section is where the script reads your form fields. */
$name= $_REQUEST['from'];
$email= $_REQUEST['to'];
/* The details field is unique and used for textarea form fields. We have special code in place here to allow for line-breaks when included in your e-mail notifications. */
$details = $_REQUEST['msg'];
$details = nl2br($details);
/* Enter your e-mail notification subject below. */
$subject = "Your Contact Form E-mail Subject";
/* Since this form contains name and e-mail fields, we will add these to pre-populate the "from" sender for e-mail notification delivery. */
$header = "From: \"$name\" <$email>\r\n";
$header .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
/* Now we construct the HTML e-mail notification template. */
$body = "<head>
<meta name=\"viewport\" content=\"width=device-width\" />
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
</head>
<body>
<p>$name</p>
<p>$email</p>
<p>$details</p>
</body>
</html>"
;
(mail("$myemail", $subject, $body, $header))  ;
header("Location: ".$goto_after_mail);
?>
