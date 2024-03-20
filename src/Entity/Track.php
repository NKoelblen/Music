<?php

namespace App\Entity;

use App\Repository\TrackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: TrackRepository::class)]
class Track
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['tracks.index'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['tracks.index'])]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Groups(['tracks.index'])]
    private ?string $slug = null;

    #[ORM\Column]
    #[Groups(['tracks.index'])]
    private ?int $duration = null;

    #[ORM\Column]
    private ?int $track_number = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?float $accousticness = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?float $danceability = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?float $energy = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?float $instrumentalness = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?int $music_key = null;

    #[ORM\Column(length: 255)]
    #[Groups(['tracks.single'])]
    private ?float $liveness = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?float $loudness = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?int $modality = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?float $speechiness = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?float $tempo = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?int $time_signature = null;

    #[ORM\Column]
    #[Groups(['tracks.single'])]
    private ?float $valence = null;

    #[ORM\ManyToOne(inversedBy: 'tracks')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['tracks.index'])]
    private ?Album $album = null;

    #[ORM\ManyToMany(targetEntity: Artist::class, inversedBy: 'tracks')]
    #[Groups(['tracks.index'])]
    private Collection $artists;

    #[ORM\ManyToMany(targetEntity: Genre::class, inversedBy: 'tracks')]
    #[Groups(['tracks.index'])]
    private Collection $genres;

    #[ORM\Column]
    private ?int $disc_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $spotify_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['tracks.index'])]
    private ?string $mood = null;

    #[ORM\Column(nullable: true)]
    private ?bool $liked = null;

    #[ORM\ManyToMany(targetEntity: Playlist::class, inversedBy: 'tracks')]
    private Collection $playlist;

    public function __construct()
    {
        $this->artists = new ArrayCollection();
        $this->genres = new ArrayCollection();
        $this->playlist = new ArrayCollection();
    }

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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

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

    public function getTrackNumber(): ?int
    {
        return $this->track_number;
    }

    public function setTrackNumber(int $track_number): static
    {
        $this->track_number = $track_number;

        return $this;
    }

    public function getAccousticness(): ?float
    {
        return $this->accousticness;
    }

    public function setAccousticness(float $accousticness): static
    {
        $this->accousticness = $accousticness;

        return $this;
    }

    public function getDanceability(): ?float
    {
        return $this->danceability;
    }

    public function setDanceability(float $danceability): static
    {
        $this->danceability = $danceability;

        return $this;
    }

    public function getEnergy(): ?float
    {
        return $this->energy;
    }

    public function setEnergy(float $energy): static
    {
        $this->energy = $energy;

        return $this;
    }

    public function getInstrumentalness(): ?float
    {
        return $this->instrumentalness;
    }

    public function setInstrumentalness(float $instrumentalness): static
    {
        $this->instrumentalness = $instrumentalness;

        return $this;
    }

    public function getMusicKey(): ?int
    {
        return $this->music_key;
    }

    public function setMusicKey(int $music_key): static
    {
        $this->music_key = $music_key;

        return $this;
    }

    public function getLiveness(): ?float
    {
        return $this->liveness;
    }

    public function setLiveness(float $liveness): static
    {
        $this->liveness = $liveness;

        return $this;
    }

    public function getLoudness(): ?float
    {
        return $this->loudness;
    }

    public function setLoudness(float $loudness): static
    {
        $this->loudness = $loudness;

        return $this;
    }

    public function getModality(): ?int
    {
        return $this->modality;
    }

    public function setModality(int $modality): static
    {
        $this->modality = $modality;

        return $this;
    }

    public function getSpeechiness(): ?float
    {
        return $this->speechiness;
    }

    public function setSpeechiness(float $speechiness): static
    {
        $this->speechiness = $speechiness;

        return $this;
    }

    public function getTempo(): ?float
    {
        return $this->tempo;
    }

    public function setTempo(float $tempo): static
    {
        $this->tempo = $tempo;

        return $this;
    }

    public function getTimeSignature(): ?int
    {
        return $this->time_signature;
    }

    public function setTimeSignature(int $time_signature): static
    {
        $this->time_signature = $time_signature;

        return $this;
    }

    public function getValence(): ?float
    {
        return $this->valence;
    }

    public function setValence(float $valence): static
    {
        $this->valence = $valence;

        return $this;
    }

    public function getAlbum(): ?Album
    {
        return $this->album;
    }

    public function setAlbum(?Album $album): static
    {
        $this->album = $album;

        return $this;
    }

    /**
     * @return Collection<int, Artist>
     */
    public function getArtists(): Collection
    {
        return $this->artists;
    }

    public function addArtist(Artist $artist): static
    {
        if (!$this->artists->contains($artist)) {
            $this->artists->add($artist);
        }

        return $this;
    }

    public function removeArtist(Artist $artist): static
    {
        $this->artists->removeElement($artist);

        return $this;
    }

    /**
     * @return Collection<int, Genre>
     */
    public function getGenres(): Collection
    {
        return $this->genres;
    }

    public function addGenre(Genre $genre): static
    {
        if (!$this->genres->contains($genre)) {
            $this->genres->add($genre);
        }

        return $this;
    }

    public function removeGenre(Genre $genre): static
    {
        $this->genres->removeElement($genre);

        return $this;
    }

    public function getDiscNumber(): ?int
    {
        return $this->disc_number;
    }

    public function setDiscNumber(int $disc_number): static
    {
        $this->disc_number = $disc_number;

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

    public function getMood(): ?string
    {
        return $this->mood;
    }

    public function setMood(?string $mood): static
    {
        $this->mood = $mood;

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

    /**
     * @return Collection<int, Playlist>
     */
    public function getPlaylist(): Collection
    {
        return $this->playlist;
    }

    public function addPlaylist(Playlist $playlist): static
    {
        if (!$this->playlist->contains($playlist)) {
            $this->playlist->add($playlist);
        }

        return $this;
    }

    public function removePlaylist(Playlist $playlist): static
    {
        $this->playlist->removeElement($playlist);

        return $this;
    }
}
