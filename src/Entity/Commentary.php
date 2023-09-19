<?php

namespace App\Entity;

use App\Repository\CommentaryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaryRepository::class)]
class Commentary
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $author = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $publish_at = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $images = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Id_Product = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): static
    {
        $this->author = $author;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function setImages($images): static
    {
        $this->images = $images;

        return $this;
    }

    public function getIdProduct(): ?string
    {
        return $this->Id_Product;
    }

    public function setIdProduct(?string $Id_Product): static
    {
        $this->Id_Product = $Id_Product;

        return $this;
    }
}
