<!DOCTYPE html>
<html>
<head>
<title>Deploy</title>
</head>
<body>
Gustavo Tua
<?php
echo "<b>GitHub Deploy</b>";
//$output = shell_exec(" git branch");
//$output = shell_exec('/usr/bin/git -C /var/www/html/Java-Course pull 2>&1');
$output2 = shell_exec('git --version');
$output = shell_exec('git branch');
$output3 = shell_exec('git init');
echo "<pre>$output2</pre>"; 
echo "<pre>$output</pre>"; 
echo "<pre>$output3</pre>"; 
?>


</body>
</html>
