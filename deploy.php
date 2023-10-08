<?php

echo "GIT PULL FROM DEVELOPMENT BRANCH";
echo "<br>";
// Checks start
if(function_exists('exec')) {
    echo "exec is enabled";
}

echo "<br>";
echo exec('whoami');
echo "<br>";
echo exec('which git');
echo "<br>";
// Checks end

// Define the path to your Git repository
$repositoryPath = '/var/www/html/Java-Course';

// Define the command to perform the Git pull
$gitPullCommand = "pwd && ls -a && git --version &&  git pull origin master 2>&1";

// Execute the Git pull command using SSH agent
$sshAgentCommand = "eval \$(ssh-agent -s) && ssh-add ~/.ssh/id_rsa && $gitPullCommand ";

// Execute the SSH agent command
$output = exec($sshAgentCommand);

// Display the output (optional)
echo "<pre>$output</pre>";

$result = exec("pwd && ls -a && git --version &&  git pull origin master 2>&1", $r2);

echo "<pre>";

foreach ($r2 as $line) {
        echo $line . "\n";
}

?>
