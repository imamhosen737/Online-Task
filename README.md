Installation process

Clone the repository <br>
=> git clone https://github.com/imamhosen737/Online-Task <br>

Switch to the repo folder <br>
=> cd "project name" <br>

Install all the dependencies using composer <br>
=> composer install

Copy the database name from .env file
=> DB_DATABASE=globetech

=> Create a database in MySQL as the name mentioned above

Run the database migrations (Set the database connection in .env before migrating)
=> php artisan migrate

Start the local development server
=> php artisan serve
