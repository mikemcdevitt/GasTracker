<!doctype html>
<head>
<?php include_once('../../inc/analyticstracking.php'); ?>
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
    
    <form method="post" action="input.php">
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