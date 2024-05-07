1. Phone Web and Front End:

##Installation
PHP PDO version 8.2 and mongodb
-	git clone https://github.com/NokoLucky/phoneGenerator/tree/master.git
-	cd phoneWeb
-	Docker compose up -d build

Make sure to start mongodb  and mongo-express containers as they are not started on default.
Launch http://localhost:8080/ to run the web app.
Launch http://localhost:8081/ to run mongo-express for mongo collections data view
-	Username: admind
-	Password: pass

##Environment Variables
This project uses a twilio account to verify phone numbers, so I used a trial version of the account. 
The required $sid and $token are hard coded into the project so no need to set them up in the .env file.


2. Lumen Microservice API

NB: the project is provided within the already downloaded git repository under the folder “validatorAPI”
##Installation
PHP PDO version 8.2 and mySQL on http://localhost/phpmyadmin/

Composer is recommended to install this API locally.
-	Composer create-project –prefer-dist Laravel/lumen validatorAPI
-	Copy and replace the created files with the ones downloaded for the repo.
-	Cd validatorAPI
-	Run “php -s 127.0.0.1:9000 -t public” within project terminal. The 127.0.0.1 is import because it didn’t work with just localhost:9000.
-	Run “php artisan make:migration create_phones_table”
-	Run “php artisan migrate”

Easiest way to test this project is by using post man.

Launch post and use post method with url http://127.0.0.1:9000/api/phones and enter the json like below:

{"data":[
    {"phone_no":"+27682566581"},
    {"phone_no":"+27810982123"},
    {"phone_no":"+27710581237"}
    ]}


