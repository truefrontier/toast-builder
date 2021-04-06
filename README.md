# Toast Builder

## Installation

Install this package via Composer by added the package and the repository link:

```composer
"require": {
  "truefrontier/toast-builder": "dev-main",
}

"repositories": [
  {
    "type":"vcs",
    "url": "https://github.com/truefrontier/toast-builder"
  }
]
```

Then run:
```bash
composer update
```

Lastly, to use the Toast Builder class, you can call it like so:
```php
use Truefrontier\ToastBuilder\Classes\ToastBuilder;

// Object
$toast_builder = new ToastBuilder();
$toast = $toast_builder->toast([
    'type' => 'info', 
    'title' => 'My New Toast', 
    'body' => 'This is only a test!'
]);

// Inline
$toast = (new ToastBuilder())->toast([
    'type' => 'info', 
    'title' => 'My New Toast', 
    'body' => 'This is only a test!'
]);

// Predefined
$toast = (new ToastBuilder(['type' => 'info']))->toast(['title' => 'Predefined Type']);
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
