## Craiglist
This is our high fidelity prototype from **craiglist** forum website

#### Requirement
- Apache
- Mysql
- Composer
- Php > 7.1

#### How To Use
- Clone
- Run `composer install`
- Make new file `.env` from `.env.example`
- Open `.env` file and change 3 lines like this
  `DB_DATABASE=craiglist`
  `DB_USERNAME=root`
  `DB_PASSWORD=`
- Create new database `craiglist` on your local database
- Run `php artisan key:generate`
- Run `php artisan migrate:fresh`
- Run `php artisan serve`
- Open [localhost:8000](localhost:8000)