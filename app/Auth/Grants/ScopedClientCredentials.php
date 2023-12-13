<?php

namespace Modules\BusinessCentralOauth2\app\Auth\Grants;

use League\OAuth2\Client\Grant\ClientCredentials;

/**
 * Represents a client credentials grant.
 *
 * @link http://tools.ietf.org/html/rfc6749#section-1.3.4 Client Credentials (RFC 6749, §1.3.4)
 */
class ScopedClientCredentials extends ClientCredentials
{
    /**
     * @inheritdoc
     */
    protected function getName()
    {
        return 'client_credentials';
    }

    /**
     * @inheritdoc
     */
    protected function getRequiredRequestParameters()
    {
        return [
            'scope',
        ];
    }
}
