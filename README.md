# Maintenance Middleware

### Synopsis

Slim 3 middleware that returns an error when maintenance mode is activated.

### Installation

With Composer:

```sh
composer require luisinder/maintenance-middleware
```

### Params

* Status: Enable/Disable Middleware
* Object returned: This object is return into response when status = true

### Use

```sh
$errorObject = new Example\ErrorClass();
$app->add(new Luisinder\Middleware\Maintenance(false,$errorObject));
```