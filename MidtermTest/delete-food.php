<?php
$foodId = $_GET['foodId'];
if (is_numeric($foodId)) {
    // connect to db
include('shared/db.php');

// prepare SQL DELETE
$sql = "DELETE FROM foods WHERE foodId = :foodId";
$cmd = $db->prepare($sql);
$cmd->bindParam(':showId', $showId, PDO::PARAM_INT);

// execute the delete
$cmd->execute();

// disconnect
$db = null;

// show a message (temporarily)
echo 'Show Deleted';

// redirect back to updated shows.php (eventually)
header('select-cuisine.php');
}
