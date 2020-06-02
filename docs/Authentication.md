## Authentication

Check how to implement CQRS https://github.com/rilwanfit/api-platform-learning/blob/master/docs/ddd.md#the-cqrs-pattern-with-symfony-messenger

### JWT Authentication

#### Setup
- install required package `composer require jwt-auth`

- Generate the SSH keys
    ```bash
    mkdir -p config/jwt
    openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096
    openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout
    ``` 
  
  code: https://github.com/rilwanfit/api-platform-learning/commit/346aeb99f616086321739ae612a4d18087bb5ded

- Create User entity and make it implement `UserInterface`

- Configure security
    - encoders
    - providers
    - json_login with jwt

- Configure routes for login
