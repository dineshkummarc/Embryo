<?php require_once('../../Admin/php/functions.php');
// file-upload.php

function create_random_string( $len = 6 )
{
	$the_alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$new_string = "";
	
	for( $i = 0; $i < $len; $i++ )
		$new_string.= $the_alphabet[ rand(0, strlen( $the_alphabet ) - 1) ];
		
	return $new_string;
}

$file_input = $_FILES['Filedata'];

$file_name = basename( $file_input['name'] );
// Upload the file to an 'uploads' folder (ignore the temp_uploads for this one)

$target_loc = "../uploads/"; // Change this so it points to the relevant folder
		
$extension = pathinfo($file_name);
$extension = $extension["extension"];
$table = $_POST['table'];
if($_POST['id'] != ''){
	$id = $_POST['id'];
}else{
	$id = '0';
}
$title = $file_input['name'];
$new_file_name = create_random_string( 10 - (strlen( $extension ) + 1) ).'_'. $file_name; // create a random filename so that duplicates don't happen.
if( move_uploaded_file($file_input['tmp_name'], $target_loc . $new_file_name))
{
	//query("INSERT INTO attachments (postID, posttable,name,type,title) VALUES ('$id', '$table', '$new_file_name', '".$extension[ "extension" ]."','$title')");
	//$id = mysql_insert_id();
}
echo $title.";".$extension.";".$new_file_name;

?>