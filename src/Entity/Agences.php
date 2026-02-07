<?php

namespace App\Entity;

use App\Repository\AgencesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgencesRepository::class)]
class Agences
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_agence = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_agence = null;

    public function getId(): ?int
    {
        return $this->id_agence;
    }

    public function getNomAgence(): ?string
    {
        return $this->nom_agence;
    }

    public function setNomAgence(string $nom_agence): static
    {
        $this->nom_agence = $nom_agence;

        return $this;
    }
}
