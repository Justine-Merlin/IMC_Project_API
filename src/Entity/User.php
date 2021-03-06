<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;



#[ApiResource(normalizationContext: ['groups' => ['user']])]

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    #[Groups("user")]
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    #[Groups("user")]
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    #[Groups("user")]
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    #[Groups("user")]
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups("user")]
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups("user")]
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    #[Groups("user")]
    private $gender;

    /**
     * @ORM\Column(type="integer")
     */
    #[Groups("user")]
    private $heigth;

    /**
     * @ORM\OneToMany(targetEntity=Weigth::class, mappedBy="user", orphanRemoval=true)
     */
    #[Groups("user")]
    private $weigths;

    public function __construct()
    {
        $this->weigths = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getHeigth(): ?int
    {
        return $this->heigth;
    }

    public function setHeigth(int $heigth): self
    {
        $this->heigth = $heigth;

        return $this;
    }

    /**
     * @return Collection|Weigth[]
     */
    public function getWeigths(): Collection
    {
        return $this->weigths;
    }

    public function addWeigth(Weigth $weigth): self
    {
        if (!$this->weigths->contains($weigth)) {
            $this->weigths[] = $weigth;
            $weigth->setUser($this);
        }

        return $this;
    }

    public function removeWeigth(Weigth $weigth): self
    {
        if ($this->weigths->removeElement($weigth)) {
            // set the owning side to null (unless already changed)
            if ($weigth->getUser() === $this) {
                $weigth->setUser(null);
            }
        }

        return $this;
    }
}
