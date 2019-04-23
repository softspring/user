<?php

namespace Softspring\User\Event;

class GetResponseUserEvent extends UserEvent implements GetResponseEventInterface
{
    use GetResponseTrait;
}