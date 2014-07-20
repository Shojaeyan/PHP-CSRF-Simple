<?php
//// first of index.php
$code=md5(uniqid(rand(),TRUE));
$_SESSION['tcode'] = $token;
$_SESSION['tcode_time'] = time();
}
$tcode_time=time() - $_SESSION['tcode_time'];
if($tcode_time <= 600 ) // logout after 10 min
{
header('Location: www.yourdomin.com');
exit();
}
?>
