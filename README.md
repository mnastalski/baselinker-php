# BaseLinker PHP library

PHP wrapper for [baselinker.com](https://baselinker.com/).

## Requirements

- PHP >=8.1

## Installation

```shell script
composer require mnastalski/baselinker-php
```

## Usage

### Creating an instance

```php
use Baselinker\Baselinker;

$baselinker = new Baselinker('[API token]');
```

### Creating a request

```php
$response = $baselinker->orders()->getOrders([
    'date_from' => 1609506671,
    'get_unconfirmed_orders' => true,
]);

$response->toArray();

/*
    [
        'status' => 'SUCCESS',
        'orders' => [
            [
                    'order_id' => '123456',
                    ...
            ],
            ...
        ]
    ]
*/

$orders = $response->getParameter('orders');

/*
    [
        [
                'order_id' => '123456',
                ...
        ],
        ...
    ]
*/
```

## API Documentation

[https://api.baselinker.com/](https://api.baselinker.com/)
