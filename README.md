Parsedown for Laravel
=====================

A Parsedown wrapper for Laravel to compile markdown to HTML.

[Parsedown](http://parsedown.org/) is fast and supports GitHub flavored markdown.

Installation
------------

require package in `composer.json`

```json
"require": {
	"laravel/framework": "4.1.*",
	"maxhoffmann/parsedown-laravel": "dev-master"
},
```

add parsedown’s service provider in `config/app.php`

```php
'providers' => array(

	'Illuminate\Foundation\Providers\ArtisanServiceProvider',
	...
	'Illuminate\Workbench\WorkbenchServiceProvider',

	'MaxHoffmann\Parsedown\ParsedownServiceProvider'
),
```

and parsedown’s facade (also in `config/app.php`)

```php
'aliases' => array(

	'App'             => 'Illuminate\Support\Facades\App',
	...
	'View'            => 'Illuminate\Support\Facades\View',

	'Markdown'        => 'MaxHoffmann\Parsedown\ParsedownFacade',

),
```

Usage
-----

```php
Markdown::parse('__Hello__ Markdown!');
// returns '<p><strong>Hello</strong> Markdown!</p>'
```
