# **API Spec - Fabric Grey**

# Feature

* JWT Auth
* MYSQL

# Build
    - git clone reposotory
    - composer update
    - copy .env.example to .env
    - php artisan jwt:secret
    - php -S localhost:8000 -s public

## Authenticaion

All Api use this authentication

* Request:
    - Header :
        * Bearer-Token: "your token"

## Login

* Request:

- Method: POST
    - Endpoint: /api/v1/login
    - Header:
        * Content-Type: application/json
        * Accept: application/json
    - Body: 
    ```
    {
        "name": "string",
        "password": "string"
    }

    ```
- Response:

    ```
    {
        "massage": "success",
        "result": {
            "token":""
        },
        "code": 200
    }
    ```

## Register

* Request:

    - Method: POST
        - Endpoint: /api/v1/register
        - Header:
            * Content-Type: application/json
            * Accept: application/json
        - Body: 
        ```
        {
            "name": "string",
            "email: : "string"
            "password": "string"
        }

        ```
- Response:

    ```
    {
        "user": {
            "name": "string",
            "email": "string",
            "updated_at": "timestamp",
            "created_at": "timestamp",
            "id": "integer"
        },
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1N"
    }
    ```
