### abstruct
snipet for getting strava data

### what you need
php (>= 5.4), composer

### get it started
1. ```composer install```
1. echo ```<your client secret>``` > secret/clientSecret.data
2. ```sudo CLIENT_SECRET=`cat secret/clientSecret.data` php -S 127.0.0.1:80```
3. access http://127.0.0.1/auth.php
4. get id and update getData.php
5. get data!!!
