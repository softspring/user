<?php

namespace Softspring\User\Model;

/**
 * @deprecated since UserBundle 1.1
 */
interface UserAccessInterface
{
    /**
     * @return UserInterface
     */
    public function getUser(): UserInterface;

    /**
     * @param UserInterface $user
     */
    public function setUser(UserInterface $user): void;

    /**
     * @return \DateTime|null
     */
    public function getLoginAt(): ?\DateTime;

    /**
     * @param \DateTime|null $loginAt
     */
    public function setLoginAt(?\DateTime $loginAt): void;

    /**
     * @return string
     */
    public function getUserAgent(): string;

    /**
     * @param string $userAgent
     */
    public function setUserAgent(string $userAgent): void;

    /**
     * @return string
     */
    public function getIp(): string;

    /**
     * @param string $ip
     */
    public function setIp(string $ip): void;

}