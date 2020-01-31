# PHP API REST

A tutorial inspired from [oktadeveloper](https://developer.okta.com/blog/2019/03/08/simple-rest-api-php 'PHP API REST')

## Run the server

```
composer install
cd public
php -S 127.0.0.1:8000
```

## Format Requests

```
// return all records
GET /person

// return a specific record
GET /person/{id}

// create a new record
POST /person

// update an existing record
PUT /person/{id}

// delete an existing record
DELETE /person/{id}
```