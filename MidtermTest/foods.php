<html>
<body>

<?php
// Include necessary files
include('SHARED/db.php');
include('select-cuisine.php');
// Capture form inputs into variables
$cuisineName = $_POST['cuisine'];

include('shared/db.php');

$sql= "SELECT * FROM foods WHERE foods['cuisine']=:cuisineName";
$cmd = $db->prepare($sql);
$cmd->bindParam(':cuisineName', $cuisineName, PDO::PARAM_STR);
$cmd->execute();
$foods = $cmd->fetchAll();
// to display
foreach ($foods as $food) {
                if ($food['cuisine'] == $cuisineName) {
                    <a href="delete-food.php?showId=' .$food['Id'] . '" onclick="return confirmDelete();">echo $foods['name']</a>

                }
}
$db= null;
?>

//for show ID

</body>
</html>
