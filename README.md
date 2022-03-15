# Task-Scheduler ![Awesome]

- First you should clone the project.

   ``` 
     git clone https://github.com/Najmun-Nafiz/Taks-Scheduler
    ```

- Please setup your composer file by command.
	```
	composer install
	```

- Than please duplicate the .env.example file -> .end file and set the database name
	```
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=dbname
	DB_USERNAME=root
	DB_PASSWORD=
	```
- Than you should setup authentication of laravel default auth..
- And now please migrate the all of the migration file...
	```
	php artisan migrate:fresh
    
	```

- Now please generate the key...

	```
	 php artisan key:generate
	```	


- Now for server run...
	```
	php artisan serve
	```
- Than you should clear the cache...

       
     ```     
	php artisan cache:clear
	php artisan route:clear
	php artisan config:clear
	php artisan view:clear
    ```

- Please run your terminal with cron-job command...
	```
	php artisan schedule:work
    or
    php artisan schedule:run
	```   

- Now see your user account after everyminites point will be added 100...
	```
	Please check your laravel log file and also you will understand, if you open your users table. You can understand that everyminites point will be added with previous points...
	```   


###### Thanks.....		
