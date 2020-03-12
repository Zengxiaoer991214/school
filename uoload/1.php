<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 200000)){
	echo "111";
  	if ($_FILES["file"]["error"] > 0){
		echo "2";
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  	else{
	  	echo "3";
		echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		echo "Type: " . $_FILES["file"]["type"] . "<br />";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    	if (file_exists("upload/" . $_FILES["file"]["name"])){
			echo "4";
      		echo $_FILES["file"]["name"] . " already exists. ";
      }
    	else{
			echo "5";
			move_uploaded_file($_FILES["file"]["tmp_name"],
			"upload/" . $_FILES["file"]["name"]);
      		echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else{
  echo "Invalid file";
  }
$name=$_FILES['file']['name'];
echo "<img src='upload/$name'>";
?>