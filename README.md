## ERD

![Screen Shot 2022-12-25 at 1 30 47 PM](https://user-images.githubusercontent.com/29978555/209457947-e36fde3d-4a75-4008-bb73-f294abb82a37.png)

## Overview API Documentation
![Screen Shot 2022-12-25 at 12 31 19 PM](https://user-images.githubusercontent.com/29978555/209457958-05d2b43e-92a9-4fe0-b279-0f7129f39ed6.png)


## Installation

Install PHP dependencies via Composer.

```bash
composer install
```

> After running the command "`composer install`", the .env file is automatically copied from the .env.example file and the application key is also generated. You needn't to initialize them manually.


Set these environment variables (see .env file).

```txt
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=heath_app
DB_USERNAME=root
DB_PASSWORD=
```


```bash
php artisan migrate --seed
// User test: test@gmail.com/123456
```

```bash
php artisan passport:install
```

Set these enviroment variables (see .env file).

```bash
# Internal Password Grant OAuth2
PASSWORD_GRANT_TYPE=password
PASSWORD_CLIENT_ID=client_id
PASSWORD_CLIENT_SECRET=client_secret
```
## API Document
Generate API Document 

```bash
php artisan l5-swagger:generate
```
After that, run application and account this link to see Docs API

```bash
php artisan serve
// http://localhost:8000/api/documentation#/Authentication -> this link
```
