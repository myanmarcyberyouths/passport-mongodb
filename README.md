# Laravel Passport with MongoDB support

## Installation

```bash
composer require myanmarcyberyouths/laravel-mongodb-passport
```

## Usage

```php
use MyanmarCyberYouths\Laravel\MongoDB\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
}
```

## Passport Commands

The commands for the passport are the same as the original passport package. You only need to append `-mongodb` to the
command.

```bash
php artisan passport-mongodb:install
```

## Laravel Version Compatibility

 PHP Version | Laravel Version | Laravel Passport Version | Laravel MongoDB Passport Version 
-------------|-----------------|--------------------------|----------------------------------
 8.2         | 10.x            | 11.x                     | 1.x                              
