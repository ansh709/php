<?php
  include("form.php");
  error_reporting(0);
?>

<html>
  <head>
    <title>PHP</title>
  </head>
  <body>
   
   <form>
       <input type="text" name="myname" placeholder="Name">
       <input type="submit" value="Submit" name="submit">
   </form>

  </body>
 </html>

<?php

$name=$_GET['myname'];
echo "$name";
$query ="INSERT INTO DATA VALUES('$name')";
$data = mysqli_query($conn,$query);
	if($data){
	  echo "Data inserted Into Database";
	}else{
	 echo "faild";
	}

?>

   