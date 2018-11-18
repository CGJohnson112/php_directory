<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD Folder</title>
</head>
<body>
<form action="upload.php" method="post">


	<label>Name of file:</label>
	<input type="text" name="name">
	<br>
	<button name="submit">Submit</button>
</form>


<form action="select.php" method="post">

<button name="select_dir">Select directory</button>
</form>	
<h3>Directories</h3>
<?php
$dir_path = "file/";
$extensions_array = array('jpg','png','jpeg');

if(is_dir($dir_path))
{
    $files = scandir($dir_path);
    
    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] !='.' && $files[$i] !='..')
        {
            // get file name
            echo "$files[$i]<br>";
            
            // get file extension
            $file = pathinfo($files[$i]);
            //$extension = $file['extension'];
            //echo "File Extension-> $extension<br>";
            //echo "<img src='$dir_path$files[$i]' style='width:100px;height:100px;'><br>";
           // check file extension
            
        }
    }
}



?>
</body>
</html>