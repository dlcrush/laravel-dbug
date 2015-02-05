## DBug

This is a laravel package that makes your variable dumps look nicer. The output is comparable to ColdFusion's cfdump.

## Installation

This will walk you through how to set up the package.

1) Add the following to your composer.json under require:

`"dlcrush/DBug": "0.1.*"`

2) Composer update

3) Add the Service Provider to the providers array in `app/config/app.php`

```php
'dlcrush\DBug\DBugServiceProvider',
```

4) Add alias in `app/config/app.php`

```php
'DBug'			  => 'dlcrush\DBug\Facades\DBug',
```

### Usage

To dump out a variable, do the following:

```php
DBug::DBug($var);
```
