<?php

namespace Softspring\User\Manager;

use Softspring\User\Model\UserAccessInterface;

/**
 * @deprecated since UserBundle 1.1
 */
interface UserAccessManagerInterface
{
    /**
     * @inheritdoc
     */
    public function getClass(): string;

    /**
     * @inheritdoc
     */
    public function create(): UserAccessInterface;

    /**
     * @param UserAccessInterface $userAccess
     *
     * @throws \Exception
     */
    public function save(UserAccessInterface $userAccess): void;
}