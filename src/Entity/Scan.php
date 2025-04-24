<?php

namespace App\Entity;

use App\Repository\ScanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ScanRepository::class)]
class Scan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::JSON)]
    private array $liens = [];
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_sortie = null; 
    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_modification = null;

    /**
     * @var Collection<int, Manga>
     */
    #[ORM\ManyToMany(targetEntity: Manga::class, inversedBy: 'scans')]
    private Collection $manga_id;

    public function __construct()
    {
        $this->manga_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get an array of links (liens)
     */
    public function getLiens(): array
    {
        return $this->liens;
    }

    /**
     * Set the array of links (liens)
     */
    public function setLiens(array $liens): static
    {
        $this->liens = $liens;

        return $this;
    }

    /**
     * @return Collection<int, Manga>
     */
    public function getMangaId(): Collection
    {
        return $this->manga_id;
    }

    public function addMangaId(Manga $mangaId): static
    {
        if (!$this->manga_id->contains($mangaId)) {
            $this->manga_id->add($mangaId);
        }

        return $this;
    }

    public function removeMangaId(Manga $mangaId): static
    {
        $this->manga_id->removeElement($mangaId);

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->date_sortie;
    }

    public function setDateSortie(?\DateTimeInterface $date_sortie): static
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }
    
    public function getDateModification(): ?\DateTimeInterface
    {
        return $this->date_modification;
    }

    public function setDateModification(?\DateTimeInterface $date_modification): static
    {
        $this->date_modification = $date_modification;

        return $this;
    }
}
