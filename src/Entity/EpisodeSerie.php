<?php

namespace App\Entity;

use App\Repository\EpisodeSerieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EpisodeSerieRepository::class)]
class EpisodeSerie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'episodeSeries')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Serie $serie_id = null;

    #[ORM\Column]
    private ?int $saison_numero = null;

    #[ORM\Column]
    private ?int $episode_number = null;

    #[ORM\Column]
    private array $lecteur_links = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSerieId(): ?Serie
    {
        return $this->serie_id;
    }

    public function setSerieId(?Serie $serie_id): static
    {
        $this->serie_id = $serie_id;

        return $this;
    }

    public function getSaisonNumero(): ?int
    {
        return $this->saison_numero;
    }

    public function setSaisonNumero(int $saison_numero): static
    {
        $this->saison_numero = $saison_numero;

        return $this;
    }

    public function getEpisodeNumber(): ?int
    {
        return $this->episode_number;
    }

    public function setEpisodeNumber(int $episode_number): static
    {
        $this->episode_number = $episode_number;

        return $this;
    }

    public function getLecteurLinks(): array
    {
        return $this->lecteur_links;
    }

    public function setLecteurLinks(array $lecteur_links): static
    {
        $this->lecteur_links = $lecteur_links;

        return $this;
    }
}
