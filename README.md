## Nofrixion API client

### Installing

`composer require DarkSide666/nofrixion`

### Usage examples

See in `/example` folder how to implement authorization (`auth.php`) and use Nofrixion API client (`test.php`).

### How to update client API code

Normally you shouldn't do this, but if you really want to manually re-generate client API classes, then you can act as follows.

* Install NPM
    `npm install @openapitools/openapi-generator-cli -g`

* Generate Nofrixion\Client code
    `openapi-generator-cli generate -i https://api.nofrixion.com/swagger/v1/swagger.json -g php -o ./src-client -c src-client-config.json`

### Link to Client documentation
[**Client Documentation**](src-client/README.md)
