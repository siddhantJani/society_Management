<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) 
  {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } 
  else 
  {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
echo "Sorry, file already exists.";
$uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) 
{
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
echo $target_file;
} else {
echo "Sorry, there was an error uploading your file.";
}
}

$conn=new mysqli("localhost","root","root","society");
$sql="INSERT INTO img (img) VALUES('$target_file')";
$ins=$conn->query($sql);

?>


<!-- 
<div class="form-group row">
<label class="col-sm-3 form-control-label">Name of organizer</label>
<div class="col-sm-9">
<input type="text" name="adminName" value="<?php echo $_SESSION['name']?>" class="form-control" readonly>
</div>
</div>




<div class="form-group row">
                              <label class="col-sm-3 form-control-label">Event Type</label>
                              <div class="col-sm-9">
                                <select name="eventtype" class="form-control mb-3 mb-3">
                                  <option disabled selected>Select</option>
                                  <option>Festival</option>
                                  <option>party</option>
                                  <option>society meeting</option>
                                  <option>others</option>
                                </select>
                              </div>
                            </div> -->