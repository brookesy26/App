Questionnaire Managment system

steps needed to make the program function:
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
1. Create a database via MySQL workbench (windows installer in folder)
2. Create a new schema in the connected server
3. Change the .env file to match your database details
4. Make sure you are using mariaDB within docker and have it running
5. Open up the App folder within Visual Studios in a container
6. Once the terminal window is finished installing all files it should say press any key to close the terminal.
7. open up a terminal and make sure mariaDB and the new container are on the same virtual network, this can be done by docker network connect [networkName] [ContainerName]
8. now change the .env file IP addresses acordingly
9. in a new terminal window cd into questionnaireSystem 
10. Once inside the folder you will need to migrate the database files, in the terminal type: php artisan migrate
11. once all of the migrations have been completed you should have a populated database with several tables
12. in the terminal within visual studio, make sure you are inside the questionnaireSystem folder, type: php artisan serve
13. If everything has been installed and setup correctly the app should open in the web browser.
14. register an account [passwords must be 8 characters or more]
15. login
16. you now have full access to the system
