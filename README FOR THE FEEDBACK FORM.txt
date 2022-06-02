Client Feedback Form README

1.) For creating Database, you can run "CreateDB.php" inside the "feedbackForm" Folder.
	-It will automatically create a superadmin account that will let you create frontdesk officers
	-Super Admin Login Credentials are (Username: superadmin | Password: superadmin)

2.) base_url is set as;
$localIp = gethostbyname(gethostname());
$config['base_url'] = 'http://'.$localIp."/feedbackForm/"; 

3.) Only Super Admin can access Summary of Client Feedback and Register new Front desk officers while Front Desk officer accounts can only access the list of submitted feedback

4.) Super Admin can download a PDF version of Summary of Client Feedback base on the set timeline (Monthly, Yearly or All Time Reports)

5.) Administrator can Access phpmyadmin in case there is need to change login credentials of front desk officers or the Super Admin.

[KNOWN BUGS]
1.) the list of submitted feedback forms are sorted by name(ascending) NOT by log date(ascending)

[Future development]
1.) add "Forgot password" function on the login page
2.) add new Super Admin (if necessary)
3.) make the Summary of Client Feedback downloadable as Excel (currently downloadable as PDF)
