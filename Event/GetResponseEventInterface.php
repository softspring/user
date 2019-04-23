<?php

namespace Softspring\User\Event;

use Symfony\Component\HttpFoundation\Response;

interface GetResponseEventInterface
{
    /**
     * @return Response|null
     */
    public function getResponse(): ?Response;
}