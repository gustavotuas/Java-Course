<?php
// Get the request data

    // Pull the latest changes from the Git repository
    exec("cd /var/www/html/Java-Course && git pull");
    echo "Git pull successful!";

?>
