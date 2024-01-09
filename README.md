## Description

It's just a simple Gym system I made to remember what I knew so far in laravel.


# How to run the project:

### Requirements:
1. First download xampp
   - [Download Xampp](https://www.apachefriends.org/download.html)

     get 7.4.28 / PHP 7.4.28 version
2. now the composer
   - [Download Composer](https://getcomposer.org/download/)

     get the latest version

3. now open xamp control panel and start apache and MySQL after that click admin next to mysql to open the dashboard

4. create a new database and name it roshta

5. open a terminal and change directory to the project and run composer install

### Run the project:

1. run composer install

```bash
composer install
```




2. open the .env file in the project and make DB_DATABASE=roshta 
    - after that run this command to generate the key
    note: run the command above in the first time only
        ```bash
        php artisan key:generate
        ```
    - run this command to migrate the database
        ```bash
        php artisan migrate
        ```
    - run this command to start the server
        ```bash
        php artisan serve
        ```

- if it's not ur first time using this project and u want a new database use this one instead of the second command
    ```bash
    php artisan migrate:fresh --seed
    ```
the last one will run the project on the server (http://127.0.0.1:8000/)
