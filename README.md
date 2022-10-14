# Laravel Hotel
## Examples
- Reservation
![alt text](https://github.com/WailanTirajoh/laravel_hotel/blob/main/example-b.png?raw=true)

- Dashboard
![alt text](https://github.com/WailanTirajoh/laravel_hotel/blob/main/example.png?raw=true)
- And more ...

## Instalation 

### Init DB
- Create DB Name: hotel_app
or via terminal
```
mysql -u root -p
```
enter your db credential
```
create database hotel_app;
exit;
```
### Init Commands:
```
composer install
npm install && npm run dev
php artisan migrate:fresh --seed
php artisan serv                => Terminal 1
php artisan websockets:serv     => Terminal 2   //run the websocket server for realtime notification
```
