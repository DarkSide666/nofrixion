
# Nofrixion API Client (Beta)

> ⚠️ **Note:** This is a **beta version** of the Nofrixion API client library. Features and functionality may change in future updates.

## Installation

To install the Nofrixion API client library, use Composer:

```bash
composer require darkside666/nofrixion-api-client
```

## Usage Examples

You can find usage examples in the `/example` folder:

- **Authorization Example**: See `auth.php` for implementing authorization.
- **API Client Example**: See `test.php` for using the Nofrixion API client.

## Updating Client API Code

While it's generally not necessary to manually update the client API code, if you need to re-generate the API classes, you can follow the steps below:

1. **Install OpenAPI Generator**
   Ensure you have [NPM](https://www.npmjs.com/get-npm) installed, then install the OpenAPI Generator CLI globally:

   ```bash
   # install new
   npm install @openapitools/openapi-generator-cli -g
   # or update existing
   npm update @openapitools/openapi-generator-cli -g
   ```

2. **Generate the Nofrixion\Client Code**
   Use the OpenAPI Generator to generate the client code from the Nofrixion API Swagger definition:

   ```bash
   # generate from live API
   openapi-generator-cli generate -i https://api.nofrixion.com/swagger/v1/swagger.json -g php -o ./src-client -c src-client-config.json
   # or generate from development API
   openapi-generator-cli generate -i https://api-dev.nofrixion.com/swagger/v1/swagger.json -g php -o ./src-client -c src-client-config.json
   ```

## Client Documentation

For more detailed information on using the generated client, refer to the [**Client Documentation**](src-client/README.md).
