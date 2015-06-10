# Simple HTTP Requests

I personally find my self making lots of external API requests using Laravel. So I wrote a simple wrapper around the Guzzle API to make my life a little easier.

## Install

Pull this package in through Composer.

```js
composer require josh-hornby/http
```

You will also need to add just two things to your ```config/app.php``` file, first add this to your ***providers*** array

```php
'JoshHornby\Http\HttpServiceProvider'
```

And as this is a facade, add this to the ***aliases*** array

```php
'Http' => 'JoshHornby\Http\HttpCore'
```

## Usage

```php
Http::get('http://myrequest.com');
```

```php
Http::post('http://myrequest.com', ['postKey' => 'postValue' ]);
```

```php
Http::put('http://myrequest.com', ['postKey' => 'postValue' ]);
```

```php
Http::delete('http://myrequest.com');
```

```php
Http::head('http://myrequest.com');
```

The package will check if it returns the correct status code (200 or 201) and present you with a nice JSON array. Simple!

## Todo

- Unit testing
- Better header handling

