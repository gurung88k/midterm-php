<?php
$title = 'Cuisines';
include('shared/header.php'); ?>
<?php
// Include necessary files
include('shared/db.php');

// Fetch categories from database
$sql = "SELECT * FROM cuisines";
$cmd = $db->prepare($sql);
$cmd->bindParam(':cuisines', $cuisines, PDO::PARAM_STR);
$cmd->execute();
$categories = $cmd->fetchAll();

// Close database connection
$db = null;
?>
<h2>Select Cuisines</h2>
<fieldset>
    <form action="foods.php" method="post">
    <label for="cuisine">:</label>
    <select id="category" name="category" required>
        <?php
            // set up & run query, store data results
            $sql = "SELECT * FROM cuisines ORDER BY name";
            $cmd = $db->prepare($sql);
            $cmd->execute();
            $services = $cmd->fetchAll();

             foreach ($cuisines as $cuisine) {
            <option value="<?php echo $cuisine['Id']; ?>"><?php echo $cuisine['name']; ?></option>
        }
            $db = null;
        ?>
    </select>
</fieldset>
    <button class="Submit">Get Foods</button>

</form>
</main>
</body>
</html>