## Getting started

 API Platform is both a ["design-first" and "code-first"](https://swagger.io/blog/api-design/design-first-or-code-first-api-development/) API framework. 

Run `composer require api` on symfony flex based system

code: https://github.com/rilwanfit/api-platform-learning/commit/1603fa44367705bbb6426d1d3b693181eae1792b

### Add the first resource

This can be done via adding `@ApiResource` annotation to any PHP class, which will enable the CRUD endpoints by default.

code: https://github.com/rilwanfit/api-platform-learning/commit/fa9571b723f93a311011aa1109c50aea5d70e1d6

### Validation

API Platform works nicely with symfony validators and provides useful information to client.

#### How do I add validation?

Validate that the User name can not be blank

code: https://github.com/rilwanfit/api-platform-learning/commit/491924c128559024ed2d29c123ca0ab4637e04ed

### Testing the API

1. Run the migrations `bin/console doctrine:migrations:migrate --env=test`
2. Creating Data Fixtures
3. Load fixtures `bin/console hautelook:fixtures:load --env=test`
4. Write functional tests
5. Run the test `bin/phpunit`

Note: 
1. Make sure to install phpunit 8.0 
    `Fatal error: Declaration of ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Constraint\ArraySubset::evaluate($other, string $description = '', bool $returnResult = false) must be compatible with PHPUnit\Framework\Constraint\Constraint::evaluate`

code: https://github.com/rilwanfit/api-platform-learning/commit/619eb1cbc2e674494d34e488f1d64d0a7b83db4a
     
### Operations
by default all CRUD operations are automatically registered.

1. Collection operations - act on a collection of resources. [GET, POST]
2. Item operations - act on a individual resource. [GET, PUT, PATCH, DELETE]
