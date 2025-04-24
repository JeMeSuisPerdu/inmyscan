<?php

namespace App\Entity;

use App\Repository\SerieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: SerieRepository::class)]
class Serie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $author = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    /**
     * @var Collection<int, EpisodeSerie>
     */
    #[ORM\OneToMany(targetEntity: EpisodeSerie::class, mappedBy: 'serie_id', orphanRemoval: true)]
    private Collection $episodeSeries;

    public function __construct()
    {
        $this->episodeSeries = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
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

    /**
     * @return Collection<int, EpisodeSerie>
     */
    public function getEpisodeSeries(): Collection
    {
        return $this->episodeSeries;
    }

    public function addEpisodeSeries(EpisodeSerie $episodeSeries): static
    {
        if (!$this->episodeSeries->contains($episodeSeries)) {
            $this->episodeSeries->add($episodeSeries);
            $episodeSeries->setSerieId($this);
        }

        return $this;
    }

    public function removeEpisodeSeries(EpisodeSerie $episodeSeries): static
    {
        if ($this->episodeSeries->removeElement($episodeSeries)) {
            // set the owning side to null (unless already changed)
            if ($episodeSeries->getSerieId() === $this) {
                $episodeSeries->setSerieId(null);
            }
        }

        return $this;
    }
}
