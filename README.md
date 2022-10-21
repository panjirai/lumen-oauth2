# Lumen OAuth 2.0

## Cara Instalasi

1;

    "composer update"

2;

    "php artisan cache:clear"

3;

    "php artisan migrate"

Pastikan file env sudah konek ke database

4;

     "php artisan passport:client"

5; Get token Route POST

    "/api/v1/oauth/token"
    BODY:   grant_type:client_credentials
            client_id:"CLIEN ID AFTER GENERATE"
            client_secret:SECRET AFTER GENERATE
            scope:*

6; Test get data success POST

    "/api/v1/get-data"

GOOD LUCK
