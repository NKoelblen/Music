<?php

namespace App\Entity;

use App\Repository\ArtistRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: ArtistRepository::class)]
class Artist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['tracks.index'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['tracks.index'])]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Groups(['tracks.index'])]
    private ?string $slug = null;

    #[ORM\Column(type: Types::ARRAY , nullable: true)]
    private ?array $genres = null;

    #[ORM\ManyToMany(targetEntity: Track::class, mappedBy: 'artists')]
    private Collection $tracks;

    #[ORM\ManyToMany(targetEntity: Album::class, mappedBy: 'artists')]
    private Collection $albums;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $spotify_id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $liked = null;

    public function __construct()
    {
        $this->tracks = new ArrayCollection();
        $this->albums = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getGenres(): ?array
    {
        return $this->genres;
    }

    public function setGenres(?array $genres): static
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * @return Collection<int, Track>
     */
    public function getTracks(): Collection
    {
        return $this->tracks;
    }

    public function addTrack(Track $track): static
    {
        if (!$this->tracks->contains($track)) {
            $this->tracks->add($track);
            $track->addArtist($this);
        }

        return $this;
    }

    public function removeTrack(Track $track): static
    {
        if ($this->tracks->removeElement($track)) {
            $track->removeArtist($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Album>
     */
    public function getAlbums(): Collection
    {
        return $this->albums;
    }

    public function addAlbum(Album $album): static
    {
        if (!$this->albums->contains($album)) {
            $this->albums->add($album);
            $album->addArtist($this);
        }

        return $this;
    }

    public function removeAlbum(Album $album): static
    {
        if ($this->albums->removeElement($album)) {
            $album->removeArtist($this);
        }

        return $this;
    }

    public function getSpotifyId(): ?string
    {
        return $this->spotify_id;
    }

    public function setSpotifyId(?string $spotify_id): static
    {
        $this->spotify_id = $spotify_id;

        return $this;
    }

    public function isLiked(): ?bool
    {
        return $this->liked;
    }

    public function setLiked(?bool $liked): static
    {
        $this->liked = $liked;

        return $this;
    }
}
