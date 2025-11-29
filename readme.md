
<p align="center">
<img src="./public/img/dark_fastkit_logo.svg">
</p>

<p align="center">
 This is a small and elegant PHP framework to accelerate the creation of websites and applications.
 created by <a href="https://github.com/cceffas">ceffas</a>
</p>

<hr>

start now

```
composer install

```

start serve

```
php fast serve

```


start code

```php

# web/routes/uri.php

use Fastkit\libs\Http as Route;
use Fastkit\libs\View;


Route::get('/', function () {
    
   echo "hello world";

});


```