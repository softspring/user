<?php

namespace Softspring\User\Util;

/**
 * @deprecated since UserBundle 1.1
 */
class TokenGenerator implements TokenGeneratorInterface
{
    /**
     * Based on FOS\UserBundle\Util\TokenGenerator
     *
     * @inheritdoc
     */
    public function generateToken(): string
    {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }
}
