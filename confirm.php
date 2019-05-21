<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Virtual Assistant On Demand - jacehr.com</title>
</head>

<body>

<?php
 $name=$_POST['name'];
 $email = $_POST['email'];
 $phoneNo = $_POST['phoneNo'];
 $message = $_POST['message'];
  
 
  $to = 'va@jacehr.com';
  $subject = 'Website Contact Form';
  $msg = "Name: $name\n
		 Email: $email\n
		 Phone: $phoneNo\n
		 Message: $message" ;
	
  mail($to, $subject, $msg, 'From:' . $email);

   echo '<p style="font-family:calibri; font-size:17px; line-height:25px; padding:10px 20px; 0px 20px;">Yaay! You just took the first step towards working with me. Give me a couple of hours and I will get back to you.<br/> <br/>
  </p>';

?>

</body>
</html>