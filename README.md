# AutoGitPullPHP
Automated PHP Script to pull git updates utilizing githubs webhooks feature. This script is intended to live on your server and allows you to virtually push updates directly to your server. Save autoPull.php to a location in your publically accessible server directory, and tell github where to point. You can add features like specifying the branch to update using the json message from github, but this is a minimal script. This is obviously not recomended for anything beyond simple personal sites, due to the risk of errors with automated pulling.

# Step One - personal access token
You'll need to create a personal access token on github so you don't need to store your password. This is super easy, just select these two options: "repo" and "read:org" for the scope.

![image](https://github.com/williamdjestes/AutoGitPullPHP/assets/106040564/ceee5a77-d03f-4adf-a86c-360d359b3311)

# Step Two - update php file
Ensure you update all necessary values.

![image](https://github.com/williamdjestes/AutoGitPullPHP/assets/106040564/f15b7b78-efc6-4fc6-b0b2-ce5a87c273d6)


# Step Three - add webhook to the repository
Simply update the url to the location on your server where you've saved the php file.

![image](https://github.com/williamdjestes/AutoGitPullPHP/assets/106040564/2bf7ac88-1186-4439-ba12-abe3c676c62b)

