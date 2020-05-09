# Week 6 PHP - Namespaces and composer
## Repo name: week-6--namespaces-composer
## Local folder: 03-01-namespaces-composer

### Setup:

1. `composer init -n // Adds composer.json file to project root directory` 

2. Edit 'composer.json' to contain:

```{json}
{
"autoload": {
    "psr-4": {
    "App\\": "app/"
    }
},
"require": {}
}
```
- Adds autoloading for PHP classes

3. `composer require symfony/var_dumper` 
- Adds var_dumper for prettier var dumps

4. `composer require illuminate/support` 
- Adds illuminate, which includes support for collections in place of arrays

