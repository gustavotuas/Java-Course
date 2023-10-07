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

$repositoryPath = '/var/www/html/Java-Course';

// Set the branch you want to pull from
$branch = 'master';

//$result = exec("cd {$repositoryPath} &&  git pull origin {$branch} 2>&1", $r2);
$result = exec("pwd && ls -a && git && git --version && git pull origin {$branch} 2>&1", $r2);

echo "<pre>";

foreach ($r2 as $line) {
        echo $line . "\n";
}

unset($r2);

echo "\n\n";
echo "------------------------------------------------------";
echo "\ngit status\n";
echo "------------------------------------------------------";
echo "\n\n";

$result = exec("git status 2>&1", $r2);

echo "<pre>";

foreach ($r2 as $line) {
        echo $line . "\n";
}
