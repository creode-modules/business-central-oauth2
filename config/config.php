<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Client ID
    |--------------------------------------------------------------------------
    |
    | The client_id is a public identifier for applications. Think of it as a
    | username for your application. When you register your application with
    | the service you're looking to authenticate with (in this case, Business
    | Central), you're issued a client_id. This ID is unique to your
    | application and is used to identify your application to the service
    | whenever an authentication request is made.
    |
    */

    'client_id' => env('BUSINESS_CENTRAL_CLIENT_ID', null),

    /*
    |--------------------------------------------------------------------------
    | Client Secret
    |--------------------------------------------------------------------------
    |
    | The client_secret is a secret known only to the application itself and
    | the authorization server. You can think of the client_secret as a
    | password for your application. It is crucial to keep the client_secret
    | confidential to protect the security of your application. If someone else
    | gains access to your client_secret, they could potentially impersonate
    | your application and gain unauthorized access.
    |
    */
    'client_secret' => env('BUSINESS_CENTRAL_CLIENT_SECRET', null),

    /*
    |--------------------------------------------------------------------------
    | Redirect URI
    |--------------------------------------------------------------------------
    |
    | The redirect_uri is provided by the application during the authorization
    | request. After the user logs in to the service (like Business Central)
    | and authorizes the application, the OAuth server redirects the user's
    | browser to this URI, carrying along an authorization code as a URL
    | parameter.
    |
    */
    'redirect_uri' => env('BUSINESS_CENTRAL_REDIRECT_URI', null),

    /*
    |--------------------------------------------------------------------------
    | URL Authorize
    |--------------------------------------------------------------------------
    |
    | Authorization URL – in the OAuth 2.0 authentication flow is the endpoint
    | to which the application redirects a user in order to kick off the
    | authentication process. This URL represents the authorization server's
    | endpoint and is where the user is asked to log in and consent to the
    | permissions being requested by the application.
    |
    */
    'url_authorize' => env('BUSINESS_CENTRAL_AUTHORIZE_URL', null),

    /*
    |--------------------------------------------------------------------------
    | URL Access Token
    |--------------------------------------------------------------------------
    |
    | The access token URL is the endpoint provided by the OAuth server that
    | handles the exchange of an authorization code or a refresh token for an
    | access token. For Microsoft services, including Dynamics 365 Business
    | Central, the token endpoint is typically part of the Microsoft identity
    | platform.
    |
    */
    'url_access_token' => env('BUSINESS_CENTRAL_TOKEN_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Disk
    |--------------------------------------------------------------------------
    |
    | This value is the name of the disk where assets will be stored. This can
    | be any disk that you have configured in your filesystems.php config file.
    |
    */
    'scope' => env('BUSINESS_CENTRAL_SCOPE', null),
];
