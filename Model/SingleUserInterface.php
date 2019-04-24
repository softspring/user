<?php

namespace Softspring\User\Model;

use Softspring\User\Model\UserInterface;

interface SingleUserInterface
{
    /**
     * @return UserInterface|null
     */
    public function getUser(): ?UserInterface;

    /**
     * @param UserInterface|null $user
     */
    public function setUser(?UserInterface $user): void;
}