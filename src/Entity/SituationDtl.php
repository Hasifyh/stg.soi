<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SituationDtlRepository::class)
 */
class SituationDtl
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    private $Libelle;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $status;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_parent_dtl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(?string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }





    public function getIdParentDtl(): ?int
    {
        return $this->id_parent_dtl;
    }

    public function setIdParentDtl(?int $id_parent_dtl): self
    {
        $this->id_parent_dtl = $id_parent_dtl;

        return $this;
    }
}
