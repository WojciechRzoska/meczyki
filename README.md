Installation </br>

1.Clone the repository </br>
2.Install composer by command "composer install" </br>
3.Copy .env.example by "cp .env.example .env" command also update the database configuration 
example configuration: </br></br>
DB_CONNECTION=mysql </br>
DB_HOST=127.0.0.1 </br>
DB_PORT=3306 </br>
DB_DATABASE=meczyki </br>
DB_USERNAME=root </br>
DB_PASSWORD= </br></br>
4.Generate application key by "php artisan key:generate" </br>
5.Run "php artisan migrate" to create the database tables </br>
4.Run "php artisan db:seed" to insert the initial data </br>
5.Run "php artisan serve" to start the development server </br></br>

API endpoints </br>
Get api/articles/{id} - get a JSON with single article by ID </br>
Get api/authors/{id}/articles - get a JSON with all articles by author </br>
Get api/authors/top - get a JSON with TOP authors last week </br>
