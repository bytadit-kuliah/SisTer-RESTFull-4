### RESTFull API based on CI 4

1. set requirements (xampp, postman, vscode)
2. create database `opensid`, import  `data_awal.sql`
3. set config/database.php as your own settings
4. `composer install`, `composer update`
5. `php spark serve`
6. open postman, run `localhost/api/penduduks`, using GET, POST, PUT, as you need
<br>
Weakness : <br>
1. PendudukModel, allowedFields are not completed
