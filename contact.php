<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg']) && isset($_POST['phone']) && $_POST['name']!="" && $_POST['email']!="" && $_POST['msg']!="")
{
$te = "vasushelar3@gmail.com";
$fe = $_POST['email'];
$nm = $_POST['name'];
$ms = $_POST['msg'];
$phone = $_POST['phone'];
$sub = "Contact from your site vasuzfitness.com";
$mm = "Name : " .  $nm . "<br>EMail: " . $fe . "<br>Mobile: " . $phone . "<br>Message: " . $ms;
$sm = mail($te,$sub,$mm);

if(!sm)
{
$msg = "Message sent.";
echo <<<_END
<meta http-equiv='refresh' content='0;url=index.php?msg=$msg'>
_END;
}
else
{
$msg = "Message sent successfully.";
echo <<<_END
<meta http-equiv='refresh' content='0;url=index.php?msg=$msg'>
_END;
}

}
else
{
$msg = "Please enter all the fields";
echo <<<_END
<meta http-equiv='refresh' content='0;url=index.php?msg=$msg'>
_END;
}


?>