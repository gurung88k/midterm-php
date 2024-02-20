<html>
<body>
<?php
// Include necessary files
include('SHARED/db.php');

// Capture form inputs into variables
$cuisinename = $_POST['cuisine'];

include('shared/db.php');

$sql= "SELECT * FROM foods WHERE cuisine= :cuisinename";
$cmd = $db->prepare($sql);
$cmd->bindParam(':cuisinename', $cuisinename, PDO::PARAM_STR);
$cmd->execute();
$show = $cmd->fetchAll();

$db= null;
?>
foreach ($cuisines as $cuisine):

<a href="delete-food.php?foodId= ' .$food['foodId'] .'"onclick=return confirmDelete();">echo $cuisine['name']</a>

</html>