<?php
// Count of uploaded files
$filesCount = count($_FILES['upload']['name']);

for( $i=0 ; $i < $filesCount ; $i++ ) {
  //Get temp file path
  $tmpPath = $_FILES['upload']['tmp_name'][$i];
  //Make sure we have a file path
  if ($tmpPath != ""){
    //Setting up the dest file name
    $destFilePath = "./uploads/" . $_FILES['upload']['name'][$i];

    //Copy temp file to dest file
    if(move_uploaded_file($tmpPath, $destFilePath)) {
      echo '<p>File <b>'.$_FILES['upload']['name'][$i].'</b> uploaded successfully</p>';
    } else {
      echo '<p>Something went wrong</p>';
    }
  }
}
?>