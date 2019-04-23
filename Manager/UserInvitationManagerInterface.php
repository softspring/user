<?php

namespace Softspring\User\Manager;

use Doctrine\ORM\EntityRepository;
use Softspring\User\Model\UserInterface;
use Softspring\User\Model\UserInvitationInterface;

interface UserInvitationManagerInterface
{
    /**
     * @return string
     */
    public function getClass(): string;

    /**
     * @return EntityRepository
     */
    public function getRepository(): EntityRepository;

    /**
     * @return UserInvitationInterface
     */
    public function create(): UserInvitationInterface;

    /**
     * @param UserInvitationInterface $invitation
     *
     * @return UserInterface
     */
    public function createUser(UserInvitationInterface $invitation): UserInterface;

    /**
     * @param UserInvitationInterface $invitation
     */
    public function save(UserInvitationInterface $invitation): void;

    /**
     * @param array $criteria
     *
     * @return UserInvitationInterface|null
     */
    public function findInvitationBy(array $criteria): ?UserInvitationInterface;

    /**
     * @param string $token
     *
     * @return UserInvitationInterface|null
     */
    public function findInvitationByToken(string $token): ?UserInvitationInterface;
}