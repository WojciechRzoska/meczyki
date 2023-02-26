Installation 

1.Clone the repository 

2.Install composer by command "composer install" 

3.Create database in phpmyadmin 

4.Copy .env.example by "cp .env.example .env" command also update the database configuration 
example configuration: 

DB_CONNECTION=mysql </br>
DB_HOST=127.0.0.1 </br>
DB_PORT=3306 </br>
DB_DATABASE=meczyki </br>
DB_USERNAME=root </br>
DB_PASSWORD= </br></br>

5.Generate application key by "php artisan key:generate" 

6.Run "php artisan migrate" to create the database tables 

7.Run "php artisan db:seed" to insert the initial data 

8.Run "php artisan serve" to start the development server 

API endpoints 

Get api/articles/{id} - get a JSON with single article by ID

Get api/authors/{id}/articles - get a JSON with all articles by author 

Get api/authors/top - get a JSON with TOP authors last week 
