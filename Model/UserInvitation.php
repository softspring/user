<?php

namespace Softspring\User\Model;

/**
 * Class User
 */
class UserInvitation implements UserInvitationInterface
{
    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var UserInterface|null
     */
    protected $inviter;

    /**
     * @var UserInterface|null
     */
    protected $user;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $surname;

    /**
     * @var bool
     */
    protected $enabled = false;

    /**
     * @var bool
     */
    protected $admin = false;

    /**
     * @var bool
     */
    protected $superAdmin = false;

    /**
     * @var string|null
     */
    protected $invitationToken;

    /**
     * @var int|null
     */
    protected $acceptedAt;

    /**
     * @var array
     */
    protected $roles = [];

    /**
     * @inheritdoc
     */
    public function __toString(): string
    {
        return "{$this->getId()}";
    }

    /**
     * @inheritdoc
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $username
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * @param string|null $surname
     */
    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->admin;
    }

    /**
     * @param bool $admin
     */
    public function setAdmin(bool $admin): void
    {
        $this->admin = $admin;
    }

    /**
     * @return bool
     */
    public function isSuperAdmin(): bool
    {
        return $this->superAdmin;
    }

    /**
     * @param bool $superAdmin
     */
    public function setSuperAdmin(bool $superAdmin): void
    {
        $this->superAdmin = $superAdmin;
    }

    /**
     * @return string|null
     */
    public function getInvitationToken(): ?string
    {
        return $this->invitationToken;
    }

    /**
     * @param string|null $invitationToken
     */
    public function setInvitationToken(?string $invitationToken): void
    {
        $this->invitationToken = $invitationToken;
    }

    /**
     * @return \DateTime|null
     */
    public function getAcceptedAt(): ?\DateTime
    {
        return \DateTime::createFromFormat("U", $this->acceptedAt) ?: null;
    }

    /**
     * @param \DateTime|null $acceptedAt
     */
    public function setAcceptedAt(?\DateTime $acceptedAt): void
    {
        $this->acceptedAt = $acceptedAt instanceof \DateTime ? $acceptedAt->format('U') : null;
    }

    /**
     * @param array $roles
     */
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @return UserInterface|null
     */
    public function getInviter(): ?UserInterface
    {
        return $this->inviter;
    }

    /**
     * @param UserInterface|null $inviter
     */
    public function setInviter(?UserInterface $inviter): void
    {
        $this->inviter = $inviter;
    }

    /**
     * @return UserInterface|null
     */
    public function getUser(): ?UserInterface
    {
        return $this->user;
    }

    /**
     * @param UserInterface|null $user
     */
    public function setUser(?UserInterface $user): void
    {
        $this->user = $user;
    }
}