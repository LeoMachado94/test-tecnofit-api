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

DB_DATABASE=your_database_name_here
DB_USERNAME=your_database_user_here
DB_PASSWORD=your_database_password_here

<p>4. If your database is not yet created, create a new one using the following command: "php artisan database:create". By default the database will be created with the name defined in DB_DATABASE of the .env file. If you already have a database created and empty, skip this step;</p>

<p>5. Run migrations to create database tables: "php artisan migrate";</p>

<p>6. Run seeders to populate the database: "php artisan db:seed";</p>

<p>7. Start the API server however you like. The simplest way is to use the built-in php server, for that use the command: "php artisan serve";</p>

<p>8. Install passport: "php artisan passport:install", 2 clients will be created. Copy the data from the second client and put it in the .env file under PASSPORT_CLIENT_ID and PASSPORT_CLIENT_SECRET. Also define the PASSPORT_ENDPOINT, it will vary according to the server you are using, if you use the built-in php server through the command "php artisan serve", set the value to "http://localhost:8000/oauth/token" if it is another server/host use the pattern "{host}/oauth/token";</p>

<p>9. Import the JSON file with the api routes in postman or software of your choice to test the API routes.</p>


This API was made to demonstrate the technical knowledge in programming during the selection process of the company Tecnofit.

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
