<?php

namespace App\Entity;

use App\Repository\ActualityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActualityRepository::class)]
class Actuality
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $publish_at = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $image_card = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description_courte = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text_actuality = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getPublishAt(): ?\DateTimeImmutable
    {
        return $this->publish_at;
    }

    public function setPublishAt(\DateTimeImmutable $publish_at): static
    {
        $this->publish_at = $publish_at;

        return $this;
    }

    public function getImageCard()
    {
        return $this->image_card;
    }

    public function setImageCard($image_card): static
    {
        $this->image_card = $image_card;

        return $this;
    }

    public function getDescriptionCourte(): ?string
    {
        return $this->description_courte;
    }

    public function setDescriptionCourte(?string $description_courte): static
    {
        $this->description_courte = $description_courte;

        return $this;
    }

    public function getTextActuality(): ?string
    {
        return $this->text_actuality;
    }

    public function setTextActuality(string $text_actuality): static
    {
        $this->text_actuality = $text_actuality;

        return $this;
    }
}
