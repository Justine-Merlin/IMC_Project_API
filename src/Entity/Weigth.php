<?php

namespace App\Entity;

use App\Repository\WeigthRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
#[ApiResource()]


/**
 * @ORM\Entity(repositoryClass=WeigthRepository::class)
 */
class Weigth
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    #[Groups("user")]
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    #[Groups("user")]
    private $user_weigth;

    /**
     * @ORM\Column(type="date")
     *
     */
    
    #[Groups('user')]
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="weigths")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserWeigth(): ?float
    {
        return $this->user_weigth;
    }

    public function setUserWeigth(float $user_weigth): self
    {
        $this->user_weigth = $user_weigth;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
