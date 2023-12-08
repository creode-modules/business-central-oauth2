# Business Central OAuth2 Client

This package provides Microsoft Dynamics 365 Business Central OAuth 2.0 support for the PHP League's OAuth 2.0 Client.

## Installation

You can install the package via composer:

```bash
composer require creode/business-central-oauth2-client
```

## Configuration

After installing the package, you may need to publish the configuration file and set up your application-specific values.

To publish the configuration file, run the following Artisan command:

```bash
php artisan vendor:publish --tag=business-central-oauth2-config
```

The configuration file will be published to your application's `config` directory. Review and update the configurations as required for your application.

Here is a breakdown of the configuration options:

### Client ID
The `client_id` provided by your Microsoft Dynamics 365 Business Central application registration.
```php
'client_id' => env('BUSINESS_CENTRAL_CLIENT_ID', null),
```

### Client Secret
The `client_secret` provided by your Business Central application registration. Keep this secret secure.
```php
'client_secret' => env('BUSINESS_CENTRAL_CLIENT_SECRET', null),
```

### Redirect URI
The URI that Business Central will redirect back to after the user authorizes your application.
```php
'redirect_uri' => env('BUSINESS_CENTRAL_REDIRECT_URI', null),
```

### URL Authorize
The endpoint for initiating the OAuth flow with Business Central.
```php
'url_authorize' => env('BUSINESS_CENTRAL_AUTHORIZE_URL', null),
```

### URL Access Token
The endpoint for requesting an access token from Business Central.
```php
'url_access_token' => env('BUSINESS_CENTRAL_TOKEN_URL', null),
```

### Scope
The scope of the access request, which determines the level of access granted to the access token.
```php
'scope' => env('BUSINESS_CENTRAL_SCOPE', null),
```

## Usage

To use this package, you must first configure it by setting the appropriate values in the configuration file. Once configured, you can use the package as follows:

```php
use Modules\BusinessCentralOauth2\app\Providers\BusinessCentralProvider;

$provider = new BusinessCentralProvider([
    'clientId' => config('business-central-oauth2.client_id'),
    'clientSecret' => config('business-central-oauth2.client_secret'),
    'redirectUri' => config('business-central-oauth2.redirect_uri'),
    'urlAccessToken' => config('business-central-oauth2.url_access_token'),
]);

$accessToken = $provider->getAccessToken('client_credentials', [
    'scope' => config('business-central-oauth2.scope')
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
