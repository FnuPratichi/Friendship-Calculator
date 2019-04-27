<html>
<head>
<title> FRIENDSHIP CALCULATOR </title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="main.css" />
</head>

<body>
<h1> FRIENDSHIP CALCULATOR </h1>
<form action="index.php" method="POST">
 <div id="first"> 
 <input type="text" name="yname" placeholder="enter name" >  <br><br></div>
  <div id="sec"> <input type="text" name="fname" placeholder="enter another name"><br><br></div>
 <input type="submit" name="submit">
 
 </body>
</html>

<?php
if(isset($_POST['yname']) && isset($_POST['fname']))
{
$yname=$_POST['yname'];
$fname=$_POST['fname'];
if(!empty($yname) && !empty($fname))
{
echo "<h1>\"Friendship between ".$yname." and ".$fname." is: ";
$rand=rand(60,100);
echo $rand."%\"</h1>";
}
}
?>