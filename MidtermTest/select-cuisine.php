<?php
$title = 'Cuisines';
 ?>

<h2>Select Cuisines</h2>
<fieldset>
    <form action="foods.php" method="post">
    <label for="cuisine">Cuisines Available:</label>
    <select id="cuisine" name="cuisine" required>
        <?php
        // connect
        include('shared/db.php');

        // set up & run query, store data results
        $sql = "SELECT * FROM cuisines ORDER BY name";
        $cmd = $db->prepare($sql);
        $cmd->execute();
        $cuisines=$cmd->fetchAll();

        // loop through list of services, adding each one to dropdown 1 at a time
        foreach ($cuisines as $cuisine) {
            echo '<option>' . $cuisine['name'] . '</option>';
        }

        // disconnect
        $db = null;
        ?>
    </select>
</fieldset>
    <button class="Submit">Get Foods</button>

</form>
</main>
</body>
</html>
