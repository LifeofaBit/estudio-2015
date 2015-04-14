# estudio-2015
To prevent recoding, we should probably create a list of To-Do's and individually mark what they are doing.  We can populate this list as needed.  Hopefully this can keep us organized over the next month.  Please feel free to add to this list. 

##DATABASE UPDATES:
* [4/14] ALTER TABLE ea_appointments ADD req_visit tinyint(1);
*        ALTER TABLE ea_appointments ADD req_visit tinyint(1);
* [4/12] ALTER TABLE ea_appointments ADD group_size int(4);
*        ALTER TABLE ea_roles ADD reports int(4);
*        UPDATE ea_roles SET reports = 15 WHERE id = 1;
*        UPDATE ea_roles SET reports = 0 WHERE id != 1;

##TO-DO:
####For Interface & Database:
* ~~[Matt] Add Group Size to Appointment Registration form~~
* ~~[David] Add Required Visit to Appointment Registration form~~ (not in master)
* ~~[David] Add First Visit to Appointment Registration form~~ 
* [David] Fix formatting issues caused by additional form inputs
* [] Integrate Client Login, Profile, etc into EA system
* [] Need to integrate major and year into the Client Registration
* ~~[Matt] Add Link to Reporting Section of Admin Header~~
* [Matt] Add a created date column when clients register an account
* ~~[Matt] Add corresponding columns in database for added form inputs~~
* [] Adjust book_time of ea_appointments to write at proper time (currently 6 hours ahead)
* ~~[Matt] Switched out Providers for Tutors~~

####For customer login
* [] move page 3 of the wizard to the front, create registration form/login 
* ~~[Matt] give customers permission to login to backend with correct view/edit permissions~~
* [] create registration and login pages that link to the wizard and backend appropriately
* []  

####For Reporting:
* [Matt] Adjust reporting queries for new EA database
* ~~[Matt] Divide reportQueries file into different sections so it's not 1000 lines long~~
* ~~[Matt] Refactor reporting methods to eliminate repetitive statements~~
* [Matt] Highlight % change in current reporting (red for - change, green for +)
