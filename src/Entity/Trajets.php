<?php

namespace App\Entity;

use App\Repository\TrajetsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrajetsRepository::class)]
class Trajets
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_trajet = null;

    #[ORM\Column]
    private ?int $agence_depart = null;

    #[ORM\Column]
    private ?int $agence_arrivee = null;

    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column]
    private ?\DateTime $date_start = null;

    #[ORM\Column]
    private ?\DateTime $date_end = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $places = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $places_dispo = null;

    public function getId(): ?int
    {
        return $this->id_trajet;
    }

    public function getAgenceDepart(): ?int
    {
        return $this->agence_depart;
    }

    public function setAgenceDepart(int $agence_depart): static
    {
        $this->agence_depart = $agence_depart;

        return $this;
    }

    public function getAgenceArrivee(): ?int
    {
        return $this->agence_arrivee;
    }

    public function setAgenceArrivee(int $agence_arrivee): static
    {
        $this->agence_arrivee = $agence_arrivee;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getDateStart(): ?\DateTime
    {
        return $this->date_start;
    }

    public function setDateStart(\DateTime $date_start): static
    {
        $this->date_start = $date_start;

        return $this;
    }

    public function getDateEnd(): ?\DateTime
    {
        return $this->date_end;
    }

    public function setDateEnd(\DateTime $date_end): static
    {
        $this->date_end = $date_end;

        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): static
    {
        $this->places = $places;

        return $this;
    }

    public function getPlacesDispo(): ?int
    {
        return $this->places_dispo;
    }

    public function setPlacesDispo(int $places_dispo): static
    {
        $this->places_dispo = $places_dispo;

        return $this;
    }
}
