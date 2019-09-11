<?php

namespace Softspring\User\Model;

/**
 * @deprecated since UserBundle 1.1
 */
interface ConfirmableInterface
{
    /**
     * @return string|null
     */
    public function getConfirmationToken(): ?string;

    /**
     * @param string|null $confirmationToken
     */
    public function setConfirmationToken(?string $confirmationToken): void;

    /**
     * @return \DateTime|null
     */
    public function getConfirmedAt(): ?\DateTime;

    /**
     * @param \DateTime|null $confirmedAt
     */
    public function setConfirmedAt(?\DateTime $confirmedAt): void;
}