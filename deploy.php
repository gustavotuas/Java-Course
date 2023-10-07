<!DOCTYPE html>
<html>
<head>
<title>Deploy</title>
</head>
<body>
GT
<?php
echo "2023";
//$output = shell_exec(" git branch");
$output = shell_exec('/usr/bin/git -C /var/www/html/Java-Course pull 2>&1');
echo "<pre>$output</pre>"; 
?>
<?php
echo "<br>------------------";
// Set the path to your Git repository
// Execute the git pull command
$output2 = shell_exec('git pull');
//$output2 = exec('sudo cd /var/www/html/Java-Course && git pull');
// Display the output (optional)
echo "<pre>1 $output2</pre>";

?>

</body>
</html>
