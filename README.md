Installation process

Clone the repository <br>
=> git clone https://github.com/imamhosen737/Online-Task <br>

Switch to the repo folder <br>
=> cd "project name" <br>

Install all the dependencies using composer <br>
=> composer install <br>

Copy the database name from .env file <br>
=> DB_DATABASE=globetech <br>

=> Create a database in MySQL as the name mentioned above <br>

Run the database migrations (Set the database connection in .env before migrating) <br>
=> php artisan migrate <br>

Start the local development server <br>
=> php artisan serve <br>
