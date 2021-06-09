<?php

namespace App\Entity;

use App\Repository\LesDatesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LesDatesRepository::class)
 */
class LesDates
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $d1;

    /**
     * @ORM\Column(type="datetime")
     */
    private $d2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getD1(): ?\DateTimeInterface
    {
        return $this->d1;
    }

    public function setD1(\DateTimeInterface $d1): self
    {
        $this->d1 = $d1;

        return $this;
    }

    public function getD2(): ?\DateTimeInterface
    {
        return $this->d2;
    }

    public function setD2(\DateTimeInterface $d2): self
    {
        $this->d2 = $d2;

        return $this;
    }
}
