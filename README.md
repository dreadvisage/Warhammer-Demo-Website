# CS268GroupProject
This project assumes you have a basic understanding on how to use XAMPP and PHPMyAdmin. In order to get this 
project working, you need to install XAMPP. If you don't know how to install XAMPP, find a guide on the 
internet for your operating system. Once XAMPP installed, you'll need to utilize PHPMyAdmin in order to create
a database that this project will use. 

## PHPMyAdmin Account Creation
Using PHPMyAdmin, create a user account. This user account should have a "host name" of "localhost". The username
and password for this account can be whatever you wish. You'll need to remember your username and password for later 
when you place those values into a specific config file for the project (we'll do that later). This account should
also have "all privileges" available to it. 

## PHPMyAdmin Database Creation
Once your user account is created, create a database named "cs268database" or whatever you want this database to 
be named. You'll need to remember this database name for later when you place those values into a specific config 
file for the project (we'll do that later). Then using the included .sql file included in the project root, use the 
import button while having your database selected and import the project .sql file. This will create and populate 
tables will necessary information to properly run the website. 

## Project "secrets.php" Creation
Once you have the user account and related database created, you can do the last setup. From the project root, you'll 
need to create a folder titled "secrets" and a file within that folder called "secrets.php". The folder structure 
from the project root should look like CS268GroupProject/secrets/secrets.php . Within the secrets.php file, you'll
need to copy/paste the contents below and set the PHP variables to be your personal information from earlier.
```
<?php
// The name of the server. Probably localhost.
$db_server = "localhost";
// The username for the server
$db_username = "CS268Tyler";
// The password for the server
$db_password = "12345";
// The specific database within that server to use
$db_name = "cs268database";
?>
```
Once the secrets.php file has been created and you placed your relevant data into it, you can offically use the website. 

## Last Things
Ensure that within the XAMPP Control Panel, you first start the processes "Apache" and "MySQL". You can test if these 
are running by using a web browser and navigating to "localhost". If you get an XAMPP-related welcome screen, you are
good to go. Also, XAMPP needs to be able to find this project. By default, XAMPP searches in 
<XAMPP_install_path>/XAMPP/htdocs . Within htdocs, you'll need to place this project "CS268GroupProject" so that the file 
structure looks like <XAMPP_install_path>/XAMPP/htdocs/CS268GroupProject . Alternatively, you can create a soft link 
that points to another location on your computer where you installed this repository. This soft link can be named whatever
you wish, and the name will be used to navigate to this website. The soft link file structure looks like 
<XAMPP_install_path>/XAMPP/htdocs/super_cool_soft_link and can used in a web browser. e.g. localhost/super_cool_soft_link 
If you don't know how to create a soft link, use a guide for your specific operating system. Nevertheless, you can now 
navigate to your website using localhost/CS268GroupProject (if this project was placed in XAMPP/htdocs). Or by localhost/<soft_link_name> if you prefered 
to create a soft link to XAMPP/htdocs.
