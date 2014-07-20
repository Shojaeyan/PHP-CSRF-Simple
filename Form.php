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
<form class="form-horizontal" role="form" name="myform" method="post">
<input type="text" name="name">
<button class="btn btn-primary " name="save" type="submit">Save</button>
<input type="hidden" value="<?=$_SESSION['tcode'];?>" name="tcode">
</form>
