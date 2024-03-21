<?php
namespace App\DTO\Genre;

class TinyGenreDTO
{

    public function __construct(
        public readonly ?int $id,
        public readonly ?string $slug,
        public readonly ?string $title
    ) {
    }
}