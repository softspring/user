<?php

namespace Softspring\User\Manager;

use Doctrine\ORM\EntityRepository;
use Softspring\User\Model\ConfirmableInterface;
use Softspring\User\Model\UserInterface;

/**
 * @deprecated since UserBundle 1.1
 */
interface UserManagerInterface
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
     * @return UserInterface
     */
    public function create(): UserInterface;

    /**
     * @param UserInterface $user
     */
    public function save(UserInterface $user): void;

    /**
     * @param UserInterface $user
     */
    public function delete(UserInterface $user): void;

    /**
     * @param array $criteria
     *
     * @return UserInterface|null
     */
    public function findUserBy(array $criteria): ?UserInterface;

    /**
     * @param string $username
     *
     * @return UserInterface|null
     */
    public function findUserByUsername(string $username): ?UserInterface;

    /**
     * @param string $email
     *
     * @return UserInterface|null
     */
    public function findUserByEmail(string $email): ?UserInterface;

    /**
     * @param string $usernameOrEmail
     *
     * @return UserInterface|null
     */
    public function findUserByUsernameOrEmail(string $usernameOrEmail): ?UserInterface;

    /**
     * @param string $token
     *
     * @return UserInterface|ConfirmableInterface|null
     */
    public function findUserByConfirmationToken($token);
}