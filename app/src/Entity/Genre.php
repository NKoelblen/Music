<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: GenreRepository::class)]
class Genre
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

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $year = null;

    #[ORM\Column(length: 7, nullable: true)]
    private ?string $color = null;

    #[ORM\ManyToMany(targetEntity: Track::class, mappedBy: 'genres')]
    private Collection $tracks;

    #[ORM\Column(nullable: true)]
    private ?bool $transverse = null;

    #[ORM\Column(nullable: true)]
    private ?bool $liked = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hierarchy = null;

    #[ORM\Column(nullable: true)]
    private ?int $order_number = null;

    #[ORM\ManyToMany(targetEntity: self::class, inversedBy: 'children')]
    private Collection $parents;

    #[ORM\ManyToMany(targetEntity: self::class, mappedBy: 'parents')]
    private Collection $children;

    public function __construct()
    {
        $this->tracks = new ArrayCollection();
        $this->parents = new ArrayCollection();
        $this->children = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;

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
            $track->addGenre($this);
        }

        return $this;
    }

    public function removeTrack(Track $track): static
    {
        if ($this->tracks->removeElement($track)) {
            $track->removeGenre($this);
        }

        return $this;
    }

    public function isTransverse(): ?bool
    {
        return $this->transverse;
    }

    public function setTransverse(?bool $transverse): static
    {
        $this->transverse = $transverse;

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

    public function getHierarchy(): ?string
    {
        return $this->hierarchy;
    }

    public function setHierarchy(?string $hierarchy): static
    {
        $this->hierarchy = $hierarchy;

        return $this;
    }

    public function getOrderNumber(): ?int
    {
        return $this->order_number;
    }

    public function setOrderNumber(?int $order_number): static
    {
        $this->order_number = $order_number;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getParents(): Collection
    {
        return $this->parents;
    }

    public function addParent(self $parent): static
    {
        if (!$this->parents->contains($parent)) {
            $this->parents->add($parent);
        }

        return $this;
    }

    public function removeParent(self $parent): static
    {
        $this->parents->removeElement($parent);

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getChildren(): Collection
    {
        return $this->children;
    }

    public function addChild(self $child): static
    {
        if (!$this->children->contains($child)) {
            $this->children->add($child);
            $child->addParent($this);
        }

        return $this;
    }

    public function removeChild(self $child): static
    {
        if ($this->children->removeElement($child)) {
            $child->removeParent($this);
        }

        return $this;
    }
}