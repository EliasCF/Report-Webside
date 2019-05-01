# Report-Webside
---
This project is made to enable the user to do two things: Use the authentication system (Register and Log in) and to download a dynamicly generated excel file, once logged in.

## Getting Started
---
The instructions in this README will get you a copy of the project up and running on your local machine for development and testing.

### Prerequisites   
---
This is a list of software you will need to have installed, before you can get the project up and running on your local machine.

* [PHP](https://www.php.net/downloads.php)
Apart from the installation of PHP itself, you will also need to enable two PHP extension in php.ini: gd2 and fileinfo.
* [MySql](https://dev.mysql.com/downloads/)
* [Composer](https://getcomposer.org/download/)

### Installing
---
This is a step by step guide on how to get the project ready to run on localhost.

First you will have to download the project. You can use git for this by using the following command.

```
git clonse https://github.com/EliasCF/Report-Webside.git
```

Once you have cloned the project you will have to change directory into the project and run a command in order to install all the necessary dependencies.

```
cd <Path to project>
composer install
```

Now that all the dependencies are installed, you need to enable the application to connect to the MySql database. In order to do this we have to rename the file called '.env.example' to '.env'. Now you will have to edit the part of the file that describes the database connection, to the following:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=webreportdb
DB_USERNAME=<Your username>
DB_PASSWORD=<Your password>
```

After editing the file you will have to create a new MySql Scheme for the authentication tables to store data in. So go make a new Schema in you database called 'webreportdb'. This is the name specified in the '.env' file. So you can choose any name as long as it is reflected in the '.env' file.

After creating the Schema you will have to run a command to create the necessary tables.

```
php artisan migrate
```

And that's it, if all went well, you are ready to run.

### Running on localhost
---
Running the project simply requires one command.

```
php artisan serve
```

If the command executed successfully, you can now write the following in your browser.

```
http://localhost:8000
```