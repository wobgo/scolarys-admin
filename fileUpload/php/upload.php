
<?php


require '../../Core/DBconnect.class.php';
require '../../Core/request.class.php';


$usro = new iniat\Control();

$usro->table='assistance';

//$usrdata = array(); 

$usro->bdd =  bdd();



if(isset($_FILES["file"]["type"]))
{
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);
    
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
    echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("uploads/" . $_FILES["file"]["name"])) {

         echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
}
else
{

$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable

$targetPath = "../../globals/uploads/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
//echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
//echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
//echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
//echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
$link = $_FILES['file']['name'];
   echo  $_FILES['file']['name'];
   
  // $usro->saveData(array("champ"=>"Link_File","value"=>"'$link'"));
}
}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}

