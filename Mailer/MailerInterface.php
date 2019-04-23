<?php

namespace Softspring\User\Mailer;

use Softspring\User\Model\UserInterface;
use Softspring\User\Model\UserInvitationInterface;

interface MailerInterface
{
    /**
     * Send an email to a user to confirm the user creation
     *
     * @param UserInterface $user
     */
    public function sendConfirmationEmail(UserInterface $user);

    /**
     * Send an invitation email to a user
     *
     * @param UserInvitationInterface $invitation
     */
    public function sendInvitationEmail(UserInvitationInterface $invitation);

    /**
     * Send an email to a user with the password reset link
     *
     * @param UserInterface $user
     */
    public function sendResettingEmail(UserInterface $user);
}