<?php
namespace App\DTO\Genre;

class TinyGenreWithParentDTO
{

    public function __construct(
        public readonly ?string $parent,
        public readonly ?int $id,
        public readonly ?string $slug,
        public readonly ?string $title,
    ) {
    }

}