Seminar OAuth2: Laravel & VueJS
---

[ 1 ] __Setup__
```shell
docker compose up -d
```

[ 2 ] __Access container bash screen__
```shell  
docker exec -it api-laravel.test-1 "/bin/bash"

# in docker bash:
cp .env.sample .env &&
npm i &&
npm run build &&
php artisan migrate &&
php artisan optimize
```

[ 3 ] __Generate Client ID & Client Secret__
```shell
php artisan passport:client --password
```

[ 4 ] __Register user__
+ Open website by any Browser: http://localhost:8088
+ Click register button, and enter user's infomation.

[ 5 ] __Use postman to test API__
+ URL: htt://localhost:8088/oauth/token
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
    "expires_in": 31622400,
    "access_token": "XXX",
    "refresh_token": "YYY"
}
```
