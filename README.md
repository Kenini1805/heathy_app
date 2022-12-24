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
