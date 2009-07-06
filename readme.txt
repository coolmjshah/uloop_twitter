#####################################################################################
##	Date: 06/15/2009
##  Read-Me file for how to execute program and information about files and account
#####################################################################################

for test use i have created dummy twitter account 
	username: onlyfortest
	password: 123456

Login with this account and execute the steps below

1. Run home1.php in browser -> that will lists all the tweets matched with query terms(terms are stored in an array in the home1.php file, change it as required).
2. Click store data button -> that will stores user_name and ID for user in separate files called from_user_id.txt and from_user.txt in the same directory.
3. execute (command-line) "time php store_location.php > from_user_location.txt" command that will finds and stroes the location of all users of founded tweets in from_user_location.txt file
4. execute (command-line) "time php find_location.php > user_with_location.txt" command that will creates new file user_with_location.txt, that conatains final users and their location info after removing the user outside of USA and eliminating users that dont have a location.
5. finally execute (command-line) "time php send_tweets.php" command to update the status with @username followed by message followed by bit.ly URL
6. your status(with username: onlyfortest) will be updated everytime and all users will be notified with '@screen_name message'.

done. 