<?php

namespace App\Entity;

use App\Repository\EventTypeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventTypeRepository::class)]
class EventType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateRange_fr = null;

    #[ORM\Column(length: 255)]
    private ?string $thumbnail = null;

    #[ORM\Column(length: 150)]
    private ?string $title_fr = null;

    #[ORM\Column(length: 255)]
    private ?string $location_name = null;

    #[ORM\Column(length: 255)]
    private ?string $location_adress = null;

    #[ORM\Column(length: 350, nullable: true)]
    private ?string $description_fr = null;

    #[ORM\Column(length: 255)]
    private ?string $canonicalUrl = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRangeFr(): ?\DateTimeInterface
    {
        return $this->dateRange_fr;
    }

    public function setDateRangeFr(\DateTimeInterface $dateRange_fr): static
    {
        $this->dateRange_fr = $dateRange_fr;

        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setThumbnail(string $thumbnail): static
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function getTitleFr(): ?string
    {
        return $this->title_fr;
    }

    public function setTitleFr(string $title_fr): static
    {
        $this->title_fr = $title_fr;

        return $this;
    }

    public function getLocationName(): ?string
    {
        return $this->location_name;
    }

    public function setLocationName(string $location_name): static
    {
        $this->location_name = $location_name;

        return $this;
    }

    public function getLocationAdress(): ?string
    {
        return $this->location_adress;
    }

    public function setLocationAdress(string $location_adress): static
    {
        $this->location_adress = $location_adress;

        return $this;
    }

    public function getDescriptionFr(): ?string
    {
        return $this->description_fr;
    }

    public function setDescriptionFr(?string $description_fr): static
    {
        $this->description_fr = $description_fr;

        return $this;
    }

    public function getCanonicalUrl(): ?string
    {
        return $this->canonicalUrl;
    }

    public function setCanonicalUrl(string $canonicalUrl): static
    {
        $this->canonicalUrl = $canonicalUrl;

        return $this;
    }
}
