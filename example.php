<?php
// Fxssbro Filter XSS clean
include_once("Filsany.php");

// Example of Filter
$xss = Filsany($_GET['xss']);
?>

<?php echo ($xss);?>
