<?php

namespace App\Entity;

use App\Repository\OderdateRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OderdateRepository::class)]
class Oderdate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Oder = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Status = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Customerid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOder(): ?string
    {
        return $this->Oder;
    }

    public function setOder(?string $Oder): static
    {
        $this->Oder = $Oder;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(?string $Status): static
    {
        $this->Status = $Status;

        return $this;
    }

    public function getCustomerid(): ?string
    {
        return $this->Customerid;
    }

    public function setCustomerid(?string $Customerid): static
    {
        $this->Customerid = $Customerid;

        return $this;
    }
}
