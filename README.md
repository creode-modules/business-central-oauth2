# Business Central OAuth2 Client

This package provides Microsoft Dynamics 365 Business Central OAuth 2.0 support for the PHP League's OAuth 2.0 Client.

## Installation

You can install the package via composer:

```bash
composer require creode/business-central-oauth2
```

## Usage

To use this package, you must first configure it by setting the appropriate values in the configuration file. Once configured, you can use the package as follows:

```php
use Creode\BusinessCentralOauth2\Providers\BusinessCentralProvider;

$provider = new BusinessCentralProvider([
    'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret',
    'redirectUri' => 'your-redirect-uri',
    'urlAccessToken' => 'your-token-url',
]);

$accessToken = $provider->getAccessToken('client_credentials', [
    'scope' => 'your-scope',
]);

$request = $provider->getAuthenticatedRequest(
    'GET',
    'https://api.businesscentral.dynamics.com/v2.0/{tenantId}/{environmentName}/',
    $accessToken
);

$response = $provider->getParsedResponse($request);
```

## Testing

To run the tests for this package, use the following command:

```bash
./vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email security@creode.co.uk instead of using the issue tracker.

## Credits

- [Creode](https://github.com/creode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
