<?php include 'phmagick.php';

function create_random_string( $len = 16 ){
	$the_alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$new_string = "";
	
	for( $i = 0; $i < $len; $i++ )
		$new_string.= $the_alphabet[ rand(0, strlen( $the_alphabet ) - 1) ];
		
	return $new_string;
}

$tmp_name = $_FILES['Filedata']['tmp_name'];
$name = $_FILES['Filedata']['name'];
$filesize = $_FILES['Filedata']['size'];
$extension  = strtolower(pathinfo($name,PATHINFO_EXTENSION));
$name = create_random_string( 20 - (strlen( $extension ) + 1) ) . ".jpg";

if(!empty($tmp_name)){

	$cropwidth = $_POST['width'];
	$cropheight = $_POST['height'];
	
	list($width,$height)=getimagesize($tmp_name);
	
	$newwidth = $cropwidth;
	$newheight=round(($height/$width)*$cropwidth);
	
	if($newheight < $cropheight || $cropwidth == 0){
		$newheight = $cropheight;
		$newwidth=round(($width/$height)*$cropheight);
	}
	$quality = 95;
	while($filesize > 1048576){
		$quality -= 5;
		$filesize -= 1048576;
	}
	if($cropheight == 0){
		$cropheight = $newheight;
	}
	$phMagick = new phMagick($tmp_name);
	$phMagick	->setDestination('../../Assets/uploads/'.$name)
				->setImageQuality($quality)
				->resize($newwidth,$newheight,true)
				->crop($cropwidth,$cropheight);
	
	if($_POST['thumbwidth'] != ''){
		$cropwidth = $_POST['thumbwidth'];
		$cropheight = $_POST['thumbheight'];
		
		list($width,$height)=getimagesize($tmp_name);
		
		$newwidth = $cropwidth;
		$newheight=round(($height/$width)*$cropwidth);
		
		if($newheight < $cropheight){
			$newheight = $cropheight;
			$newwidth=round(($width/$height)*$cropheight);
		}
		
		$phMagick = new phMagick($tmp_name);
		$phMagick	->setDestination('../../Assets/uploads/thumbs/'.$name)
					->setImageQuality($quality)
					->resize($newwidth,$newheight,true)
					->crop($cropwidth,$cropheight);
		
	}

	if($_POST['width'] > 600){
		$widthset = ' width="600"';
	}
	//echo 'filesize: '.round($_FILES['Filedata']['size'] / 1024) .'kb | quality: '.$quality.'%<br />';
	echo '<img src="../Assets/uploads/'.$name.'"'.$widthset.' />'.";".$name;
}else{
	echo 'Invalid file'.";".'';
}
?>