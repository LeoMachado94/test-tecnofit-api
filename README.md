<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" style="float:left">
        <img src="https://play-lh.googleusercontent.com/PDZ0MjtpWKT-gjKL_aVt3LJ873HGR-f535lgRg7JHm2JU1vsfZuy0YdJuTnRkXAvqdO6" width="400" style="float:left">
    </a>
</p>


## INTRO

This API was made to demonstrate the technical knowledge in programming during the selection process of the company Tecnofit. Good programming practices were followed to the fullest.

Challenge: Considering the database below, build a REST endpoint (preferably in PHP)
that returns the ranking of a given movement, bringing the movement name and a
ordered list with users, their respective personal record (highest value), position and date. Attention: Users with the same personal best value must occupy the same position
in the ranking.

As a bonus, authentication was added using Passport and a route with general ranking of users (sum of all scores in all exercises/movements).
<br><br>

## ABOUT

The API is composed of 3 entities: User, Movement and Personal Record.

**User**
<p>They are the users of the application, athletes.</p>

**Movement**
<p>Are the exercises practiced by users.</p>

**Personal Record**
<p>It is the record of user records in each movement practiced.</p>
<br><br>

## CONFIGURATION:

<p>1. Clone the repository;</p>

<p>2. Enter the project folder and install the dependencies: "composer install";</p>

<p>3. Create an .env file with the same structure as .env.example and set the following parameters according to your database;</p>

DB_DATABASE=your_database_name_here<br>
DB_USERNAME=your_database_user_here<br>
DB_PASSWORD=your_database_password_here<br>

<p>4. If your database is not yet created, create a new one using the following command: "php artisan database:create". By default the database will be created with the name defined in DB_DATABASE of the .env file. If you already have a database created and empty, skip this step;</p>

<p>5. Run migrations to create database tables: "php artisan migrate";</p>

<p>6. Run seeders to populate the database: "php artisan db:seed";</p>

<p>7. Start the API server however you like. The simplest way is to use the built-in php server, for that use the command: "php artisan serve";</p>

<p>8. Install passport: "php artisan passport:install", 2 clients will be created. Copy the data from the second client and put it in the .env file under PASSPORT_CLIENT_ID and PASSPORT_CLIENT_SECRET. Also define the PASSPORT_ENDPOINT, it will vary according to the server you are using, if you use the built-in php server through the command "php artisan serve", set the value to "http://localhost:8000/oauth/token" if it is another server/host use the pattern "{host}/oauth/token";</p>

<p>9. Import the JSON file with the api routes in postman or software of your choice to test the API routes. Download [here](https://github.com/LeoMachado94/test-tecnofit-api/blob/main/Tecnofit%20API%20-%20Test.postman_collection.json).</p>
<br><br>

## NOTES
<p>1. The api url base is composed of the host and the api prefix, like this: {host}/api. To follow the project pattern and test without having to modify the defined postman routes, create an environment and define the host variable in this pattern (host + prefix).</p>
<p>2. To avoid compatibility issues, use php 8.0.x.</p>
<br><br>

### DATABASE RESUME (rows/records)
<p>
Movement 1 (Deadlift) - Records per user<br>

User 1 = 100 + 180 + 150 + 110 = 540<br>
User 2 = 110 + 140 + 190 =  440<br>
User 3 = 170 + 120 + 130 = 420<br>

Maximum score = 190 (user 2)<br><br>

Movement 2 (Back Squat) - Records per user<br>

User 1 = 130 + 110 = 240<br>
User 2 = 130 + 120 = 250<br>
User 3 = 125 + 120 = 245<br>

Maximum score = 130 (user 1 and user 2)<br><br>

Movement 3 (Bench Press) - Records per user<br>

User 1 = 130 + 110 = 240<br>
User 2 = 130 + 120 = 250<br>
User 3 = 125 + 120 = 245<br>

Maximum score = 130 (user 1 and user 2)<br>
</p>
