<?php

namespace App\Entity;

use App\Repository\NameRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NameRepository::class)]
class Name
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Named = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Desciption = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Email = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamed(): ?string
    {
        return $this->Named;
    }

    public function setNamed(?string $Named): static
    {
        $this->Named = $Named;

        return $this;
    }

    public function getDesciption(): ?string
    {
        return $this->Desciption;
    }

    public function setDesciption(?string $Desciption): static
    {
        $this->Desciption = $Desciption;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(?string $Phone): static
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }
}
