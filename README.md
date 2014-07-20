PHP-CSRF-Simple
================

When building an application or a website using PHP, you should be concerned with security (CSRF)

<?php
if(isset($_POST['token'])){
if ($_POST['tcode']!=$_SESSION['tcode']) {
header('Location: www.yourdomin.com');
exit();
}else{
$name=$_POST['name'];
and more .....
}
?>
