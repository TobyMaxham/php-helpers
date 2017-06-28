# TobyMaxham PHP Helpers
A PHP packages provided with many helper functions and classes.
I use this in many projects.

## Installation
```
composer require tobymaxham/php-helpers
```

## Usage 

### Functions

`collect`
```php
$collection = collect(['Freddy', 'Teddy', 'Eddy']);

$collection->first(); // Freddy
$collection->last(); // Eddy

foreach ($collection as $key => $value) {
    echo $key . ' => ' . $value;
}

// 0 => Freddy
// 1 => Teddy
// 2 => Eddy
```


### Classes

....
