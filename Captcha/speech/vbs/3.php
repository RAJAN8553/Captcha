<?php

$directory = "Audio/";


if ($submitbutton){
if (!empty($searchoriginal)) 
{
if (is_dir($directory)){

  if ($open = opendir($directory)){
if ($countsearchterms == 1)
{
    while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	$file= substr($file, 0, $position);
	
	
      if ((strpos("$file",  "$search[0]") !== false) && ($fileextension == "mp3"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<p id='para6'>$file</p>";
	 echo "<audio controls>
	 <source src='/Audio/$fileoriginal' type='audio/$fileextension'>
	Your browser does not support the audio tag.
	</audio><br><br><hr>";

}

    }
}
else if ($countsearchterms == 2) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	$file= substr($file, 0, $position);
	

    if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false)) && ($fileextension == "mp3"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<p id='para6'>$file</p>";
	 echo "<audio controls>
	 <source src='/Audio/$fileoriginal' type='audio/$fileextension'>
	Your browser does not support the audio tag.
	</audio><br><br><hr>";

}

    }
}
else if ($countsearchterms == 3) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	$file= substr($file, 0, $position);
	

    if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false))  
&& ($fileextension == "mp3"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<p id='para6'>$file</p>";
	 echo "<audio controls>
	 <source src='/Audio/$fileoriginal' type='audio/$fileextension'>
	Your browser does not support the audio tag.
	</audio><br><br><hr>";

}

    }
}

else if ($countsearchterms == 4) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	$file= substr($file, 0, $position);
	

    if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false) && (strpos("$file",  "$search[3]") !== false))  
&& ($fileextension == "mp3"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<p id='para6'>$file</p>";
	 echo "<audio controls>
	 <source src='/Audio/$fileoriginal' type='audio/$fileextension'>
	Your browser does not support the audio tag.
	</audio><br><br><hr>";
}

    }
}

else if ($countsearchterms == 5) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	$file= substr($file, 0, $position);
	

    if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false) 
&& (strpos("$file",  "$search[3]") !== false) && (strpos("$file",  "$search[4]") !== false))  
&& ($fileextension == "mp3"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<p id='para6'>$file</p>";
	 echo "<audio controls>
	 <source src='/Audio/$fileoriginal' type='audio/$fileextension'>
	Your browser does not support the audio tag.
	</audio><br><br><hr>";

}

    }
}
else if ($countsearchterms == 6) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	$file= substr($file, 0, $position);
	

    if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false) 
&& (strpos("$file",  "$search[3]") !== false) && (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false))  
&& ($fileextension == "mp3"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<p id='para6'>$file</p>";
	 echo "<audio controls>
	 <source src='/Audio/$fileoriginal' type='audio/$fileextension'>
	Your browser does not support the audio tag.
	</audio><br><br><hr>";

}

    }
}
else if ($countsearchterms == 7) {
while (($file = readdir($open)) !== false){
	$fileoriginal= $file;
	$file= strtolower($file);
	$position= strpos("$file", ".");
	$fileextension= substr($file, $position + 1);
	$fileextension= strtolower($fileextension);
	$file= substr($file, 0, $position);
	

    if (((strpos("$file",  "$search[0]") !== false) && (strpos("$file",  "$search[1]") !== false) && (strpos("$file",  "$search[2]") !== false) 
&& (strpos("$file",  "$search[3]") !== false) && (strpos("$file",  "$search[4]") !== false) && (strpos("$file",  "$search[5]") !== false) && (strpos("$file",  "$search[5]") !== false))  
&& ($fileextension == "mp3"))
	{
	$file= ucwords($file);
	$array[] += "$file";
	 echo "<p id='para6'>$file</p>";
	 echo "<audio controls>
	 <source src='/Audio/$fileoriginal' type='audio/$fileextension'>
	Your browser does not support the audio tag.
	</audio><br><br><hr>";
}

    }
}
closedir($open);
    }

  }//while loop

$arraycount= count($array);

if ($arraycount == 0)
{
echo "No results for this search entered";
}
}
}
?>

