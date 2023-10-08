<?php
// Define the path to your Git repository
$repositoryPath = '/var/www/html/Java-Course';

// Define the command to perform the Git pull
$gitPullCommand = "git -C $repositoryPath pull";

// Execute the Git pull command using SSH agent
$sshAgentCommand = "eval \$(ssh-agent -s) && ssh-add ~/.ssh/id_rsa && $gitPullCommand 2>&1";

// Execute the SSH agent command
$output = exec($sshAgentCommand);

// Display the output (optional)
echo "<pre>$output</pre>";
?>
