<?php

// echo number_format($_FILES['file']['size']);
// echo $_FILES['file']['tmp_name'];
// echo $_FILES['file']['type'];
// echo $_FILES['file']['error'];
// echo $_FILES['file']['name'];



if(isset($_FILES['file'])) {

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];


  $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

  $allowed = ['png', 'jpg', 'jpeg', 'svg', 'pdf', 'zip'];

  if(in_array($fileExt, $allowed)) {

    if($fileError == 0) {

      if($fileSize < 2000000) {
        $newFileName = 'test-' . time() . '.' . $fileExt;
        
        $file = 'upload/' . $newFileName;

        if(move_uploaded_file($fileTmpName, $file)) {
          echo "File Uploaded Successfully";
        }else {

          echo "Error";
        }
      
      } else {
        echo "Your file is too larg";
      }
    } else {
      echo "There was an error uploading file";
    }
  }else {
      echo "This file is not valid";
  }

}