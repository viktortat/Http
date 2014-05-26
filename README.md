# Simple HTTP Requests

I personally find my self making lots of external API requests using Laravel. So I wrote a simple wrapper around the Guzzle API to make my life a little easier.

## Install

Pull this package in through Composer.

```js
{
    "require": {
        "josh-hornby/http": "0.1.*"
    }
}
```

You will also need to add just two things to your ```config/app.php``` file, first add this to your ***providers*** array

```php
JoshHornby\Http\HttpServiceProvider
```

And as this is a facade, add this to the ***aliases*** array

```php
'HTTP' => 'JoshHornby\Http\HttpCore',
```

## Usage

```php
HTTP::get('http://myrequest.com');
```

That's all you need to do to make a get request. The package will check if it returns the correct status code and present you with a nice JSON array. Simple!

