<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description_short = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trainer = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $places = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $diploma = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $price = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $full_description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Handicap_condition = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $investment = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $required = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Id_category = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $duration = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Access = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $calendar = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $duration_description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(?string $Title): static
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescriptionShort(): ?string
    {
        return $this->description_short;
    }

    public function setDescriptionShort(?string $description_short): static
    {
        $this->description_short = $description_short;

        return $this;
    }

    public function getTrainer(): ?string
    {
        return $this->trainer;
    }

    public function setTrainer(?string $trainer): static
    {
        $this->trainer = $trainer;

        return $this;
    }

    public function getPlaces(): ?string
    {
        return $this->places;
    }

    public function setPlaces(?string $places): static
    {
        $this->places = $places;

        return $this;
    }

    public function getDiploma(): ?string
    {
        return $this->diploma;
    }

    public function setDiploma(?string $diploma): static
    {
        $this->diploma = $diploma;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getFullDescription(): ?string
    {
        return $this->full_description;
    }

    public function setFullDescription(?string $full_description): static
    {
        $this->full_description = $full_description;

        return $this;
    }

    public function getHandicapCondition(): ?string
    {
        return $this->Handicap_condition;
    }

    public function setHandicapCondition(?string $Handicap_condition): static
    {
        $this->Handicap_condition = $Handicap_condition;

        return $this;
    }

    public function getInvestment(): ?string
    {
        return $this->investment;
    }

    public function setInvestment(?string $investment): static
    {
        $this->investment = $investment;

        return $this;
    }

    public function getRequired(): ?string
    {
        return $this->required;
    }

    public function setRequired(?string $required): static
    {
        $this->required = $required;

        return $this;
    }

    public function getIdCategory(): ?string
    {
        return $this->Id_category;
    }

    public function setIdCategory(?string $Id_category): static
    {
        $this->Id_category = $Id_category;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getAccess(): ?string
    {
        return $this->Access;
    }

    public function setAccess(string $Access): static
    {
        $this->Access = $Access;

        return $this;
    }

    public function getCalendar(): ?string
    {
        return $this->calendar;
    }

    public function setCalendar(string $calendar): static
    {
        $this->calendar = $calendar;

        return $this;
    }

    public function getDurationDescription(): ?string
    {
        return $this->duration_description;
    }

    public function setDurationDescription(string $duration_description): static
    {
        $this->duration_description = $duration_description;

        return $this;
    }
}
