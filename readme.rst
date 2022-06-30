###################
Client Feedback Form README
###################

1.) For creating Database, you can run "CreateDB.php" inside the "feedbackForm" Folder.
-It will automatically create a superadmin account that will let you create frontdesk officers -Super Admin Login Credentials are (Username: superadmin | Password: superadmin)
2.) base_url is set as; $localIp = gethostbyname(gethostname()); $config['base_url'] = 'http://'.$localIp."/feedbackForm/";

3.) Only Super Admin can access Summary of Client Feedback and Register new Front desk officers while Front Desk officer accounts can only access the list of submitted feedback

4.) Super Admin can download a PDF version of Summary of Client Feedback base on the set timeline (Monthly, Yearly or All Time Reports)

5.) Administrator can Access phpmyadmin in case there is need to change login credentials of front desk officers or the Super Admin.

[KNOWN BUGS] 1.) the list of submitted feedback forms are sorted by name(ascending) NOT by log date(ascending)

[Future development] 1.) add "Forgot password" function on the login page 2.) add new Super Admin (if necessary) 3.) make the Summary of Client Feedback downloadable as Excel (currently downloadable as PDF) 

###################
Screenshots:
###################

Landing Page

.. image:: /Screenshots/Landing%20Page.JPG

Login

.. image:: /Screenshots/Login.JPG

Data Table

.. image:: /Screenshots/DataTable.JPG

Front Desk Registration

.. image:: /Screenshots/Front%20Desk%20Registration.JPG

Data Analytics

.. image:: /Screenshots/Data%20Analytics.JPG

PDF Report

.. image:: /Screenshots/PDF%20Report.JPG

###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/userguide3/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
