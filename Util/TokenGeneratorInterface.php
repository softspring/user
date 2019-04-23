<?php

namespace Softspring\User\Util;

interface TokenGeneratorInterface
{
    /**
     * @return string
     */
    public function generateToken(): string;
}
