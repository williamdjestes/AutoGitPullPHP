<?php
$username = 'your-github-username';
$token = 'your-access-token';
$gitExecutable = 'location of git.exe';
$repositoryUrl = 'your repository url';
$branch = 'main'; // Replace with your desired branch name
chdir('your-repo-directory'); //change to the directory where the repo is stored on your computer

// Execute the git pull operation with credentials
$gitCommand = "$gitExecutable -c http.$repositoryUrl.extraheader=\"Authorization: Basic " . base64_encode("$username:$token") . "\" pull origin $branch";
$output = shell_exec($gitCommand);

// Output the result
echo "<pre>$output</pre>";
?>
