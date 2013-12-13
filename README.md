Parsedown for Laravel
=====================

A Parsedown wrapper for Laravel to compile markdown to HTML.

[Parsedown](http://parsedown.org/) is fast and supports GitHub flavored markdown.

Installation
------------

__require package in__ `composer.json`

```json
"require": {
	"laravel/framework": "4.1.*",
	"maxhoffmann/parsedown-laravel": "dev-master"
},
```

__add parsedown’s service provider in__ `config/app.php`

```php
'providers' => array(

	'Illuminate\Foundation\Providers\ArtisanServiceProvider',
	...
	'Illuminate\Workbench\WorkbenchServiceProvider',

	'MaxHoffmann\Parsedown\ParsedownServiceProvider'
),
```

__ and parsedown’s facade__ (also in `config/app.php`)

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
