<?php
// Get the request data
    $tmp = shell_exec('git pull');
?>

<!DOCTYPE html>
<html>
<head>
<title>Deploy</title>
</head>
<body>
<?php echo  $tmp; ?>
</body>
</html>
