<?php

namespace Softspring\User\Model;

/**
 * @deprecated since UserBundle 1.1
 */
interface OwnerInterface
{
    /**
     * @return UserInterface|null
     */
    public function getOwner(): ?UserInterface;

    /**
     * @param UserInterface|null $owner
     */
    public function setOwner(?UserInterface $owner): void;
}