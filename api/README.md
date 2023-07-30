Seminar OAuth2: Laravel & VueJS
---

__1 :: Setup__
```shell
docker compose up -d
```

__2 :: Access container bash screen__
```shell  
docker exec -it api-laravel.test-1 "/bin/bash"

# in docker bash:
cp .env.sample .env &&
npm i &&
npm run build &&
php artisan optimize &&
php artisan migrate:refresh --seed
```

> Demo account
> email: admin@example.com 
> pwd: password

__3 :: Generate Client ID & Client Secret__
```shell
php artisan passport:install &&
php artisan passport:client --password
```

__4 :: Register user__
+ Open website by any Browser: http://localhost:[APP_PORT]
+ Click register button, and enter user's infomation.

__5 :: Use postman to test API__
+ URL: htt://localhost:[APP_PORT]/oauth/token
+ Method: POST
+ Payload body 
```json
{
    "grant_type": "password",
    "client_id": "CLIENT_ID",
    "client_secret": "CLIENT_SECRET",
    "username": "USER_EMAIL",
    "password": "USER_PASSWORD",
    "scope": ""
}
```
+ And the response like that
```json
{
    "token_type": "Bearer",
    "expires_in": "ABC",
    "access_token": "XXX",
    "refresh_token": "YYY"
}
```


