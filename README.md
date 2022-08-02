# TecDoc API

[![Source Code][badge-source]][source]
[![Software License][badge-license]][license]
[![Total Downloads][badge-downloads]][downloads]

gerfey/tecdoc-client - client for working with the TecDoc API, designed to run on Laravel.

## Installation

The preferred method of installation is via [Packagist][] and [Composer][]. Run
the following command to install the package and add it as a requirement to your
project's `composer.json`:

```bash
composer require gerfey/tecdoc-client
```

### Settings

1. Use command ```php artisan vendor:publish ``` and select tag: ***tecdoc***
2. Check files ***tecdoc.php*** to path ***.../laravel-project/config/***
3. Create the ***TECDOC_PROVIDER_ID***, ***TECDOC_API_KEY***, ***TECDOC_LANGUAGE_CODE*** keys in the file ***.env***

### Run

```php
<?php

$tecDoc = new \Gerfey\TecDoc\Request\Pegasus\Pegasus_3_0(new \Gerfey\TecDoc\Http\TecDocClient());
dd($tecDoc->getAmBrands()->getJson());
```

### Result

```json
{#1821
  +"data": {#1820
    +"array": array:142 [
      0 => {#1685
        +"brandId": 1
        +"brandLogoID": "100000"
        +"brandName": "SPIDAN"
      }
      1 => {#1677
        +"brandId": 2
        +"brandLogoID": "200001"
        +"brandName": "HELLA"
      }
      ...
    ]
  }
  +"status": 200
}
```

## Copyright and License

The gerfey/tecdoc-client library is copyright © [Alexander Levchenkov](https://vk.com/gerfey) and
licensed for use under the MIT License (MIT). Please see [LICENSE][] for more
information.

[packagist]: https://packagist.org/packages/gerfey/tecdoc-client
[composer]: http://getcomposer.org/

[badge-source]: https://img.shields.io/badge/gerfey/tecdoc-client-blue.svg?style=flat-square
[badge-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[badge-build]: https://img.shields.io/travis/gerfey/tecdoc-client/master.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/gerfey/tecdoc-client.svg?style=flat-square

[source]: https://github.com/gerfey/tecdoc-client
[release]: https://packagist.org/packages/gerfey/tecdoc-client
[license]: https://github.com/gerfey/tecdoc-client/blob/master/LICENSE
[build]: https://travis-ci.org/gerfey/tecdoc-client
[downloads]: https://packagist.org/packages/gerfey/tecdoc-client
