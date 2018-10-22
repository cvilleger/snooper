<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(unique=true, length=190)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column()
     */
    private $username;

    /**
     * @var array
     *
     * @ORM\Column(type="simple_array")
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column()
     */
    private $avatarUrl;

    /**
     * @var string
     *
     * @ORM\Column()
     */
    private $profileUrl;

    /**
     * @var string
     *
     * @ORM\Column()
     */
    private $reposUrl;

    public function __construct()
    {
        $this->roles = ['ROLE_USER'];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     *
     * @return self
     */
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @param string $role
     *
     * @return self
     */
    public function addRole(string $role): self
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * @return string
     */
    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    /**
     * @param string $avatarUrl
     * @return self
     */
    public function setAvatarUrl(string $avatarUrl): self
    {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfileUrl(): string
    {
        return $this->profileUrl;
    }

    /**
     * @param string $profileUrl
     * @return self
     */
    public function setProfileUrl(string $profileUrl): self
    {
        $this->profileUrl = $profileUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getReposUrl(): string
    {
        return $this->reposUrl;
    }

    /**
     * @param string $reposUrl
     * @return self
     */
    public function setReposUrl(string $reposUrl): self
    {
        $this->reposUrl = $reposUrl;
        return $this;
    }

    public function getSalt(): void
    {
    }

    public function eraseCredentials(): void
    {
    }

    public function getPassword(): void
    {
    }
}
