<!DOCTYPE html>
<html>
<head>
<title>Deploy</title>
</head>
<body>
GT
<?php
echo "2023";
$output = shell_exec("ls -l");
echo "<pre>$output</pre>"; 
?>
<?php
echo "<br>------------------";
// Set the path to your Git repository
// Execute the git pull command
$output = shell_exec('git pull');
//$output2 = exec('sudo cd /var/www/html/Java-Course && git pull');
// Display the output (optional)
echo "<pre>1 $output</pre>";

?>

</body>
</html>
