<!doctype html>
<head>
<?php include_once('../../inc/analyticstracking.php'); ?>
<?php include_once('inc/connect.php'); ?>
<?php 
function initializeRoller(){
    $i = 0;
    while($i < 100){
        echo '<option value="' . $i . '">' . $i . '</option>';
        $i++;
    }
}
?>


</head>

<body>
    
    <?php //Fetching from your database table.
            $query = "SELECT * FROM $table ORDER BY `date` DESC";
            $result = mysql_query($query);

            if ($result) {
                while($row = mysql_fetch_array($result)) {
                    $name = $row["$field"];
                    echo $row["date"] . " - $name Gallons<br>";
                }
            }
    ?>
    
    <form method="post" action="input.php">
        <select name="year">
        <?php initializeRoller(); ?>
        </select>
        
        
        
        
        <select name="firstRoller">
        <?php initializeRoller(); ?>
        </select>
        <select name="secondRoller">
        <?php initializeRoller(); ?>
        </select>
        <select name="thirdRoller">
        <?php initializeRoller(); ?>
        </select>
        <select name="fourthRoller">
        <?php initializeRoller(); ?>
        </select>
        <input type="submit" />
    </form>
    
</body>
