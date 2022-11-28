<?php
session_start();
$pswd = $_SESSION["pswd"];
?>
<h3 class="pt-5">La tua password è: <?php echo $pswd ?></h3>
<?php
?>

<a href="logout.php">torna alla home </a>