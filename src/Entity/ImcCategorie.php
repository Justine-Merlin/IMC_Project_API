<?php

namespace App\Entity;

use App\Repository\ImcCategorieRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ApiResource]


/**
 * @ORM\Entity(repositoryClass=ImcCategorieRepository::class)
 */
class ImcCategorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $min_weigth;

    /**
     * @ORM\Column(type="float")
     */
    private $max_weigth;

    /**
     * @ORM\Column(type="integer")
     */
    private $danger;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMinWeigth(): ?float
    {
        return $this->min_weigth;
    }

    public function setMinWeigth(float $min_weigth): self
    {
        $this->min_weigth = $min_weigth;

        return $this;
    }

    public function getMaxWeigth(): ?float
    {
        return $this->max_weigth;
    }

    public function setMaxWeigth(float $max_weigth): self
    {
        $this->max_weigth = $max_weigth;

        return $this;
    }

    public function getDanger(): ?int
    {
        return $this->danger;
    }

    public function setDanger(int $danger): self
    {
        $this->danger = $danger;

        return $this;
    }
}
