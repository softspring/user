<?php

namespace Softspring\User\Util;

/**
 * @deprecated since UserBundle 1.1
 */
interface TokenGeneratorInterface
{
    /**
     * @return string
     */
    public function generateToken(): string;
}
