<?php
$dir = "uploads/";
if(!is_dir($dir)) mkdir($dir); //make directory if not
$file = $dir.basename($_FILES["file"]["name"]);
if(move_uploaded_file($_FILES["file"]["tmp_name"],$file))
{
    echo "File uploded";
}else{
    echo "file not upload";
}
?>