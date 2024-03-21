<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318095623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE track (
            id INT AUTO_INCREMENT NOT NULL, 
            title VARCHAR(255) NOT NULL, 
            slug VARCHAR(255) NOT NULL, 
            duration INT NOT NULL, 
            track_number INT NOT NULL, 
            accousticness DOUBLE PRECISION NOT NULL, 
            danceability DOUBLE PRECISION NOT NULL, 
            energy DOUBLE PRECISION NOT NULL, 
            instrumentalness DOUBLE PRECISION NOT NULL, 
            music_key INT NOT NULL, 
            liveness DOUBLE PRECISION NOT NULL, 
            loudness DOUBLE PRECISION NOT NULL, 
            modality INT NOT NULL, 
            speechiness DOUBLE PRECISION NOT NULL, 
            tempo DOUBLE PRECISION NOT NULL, 
            time_signature INT NOT NULL, 
            valence DOUBLE PRECISION NOT NULL, 
            PRIMARY KEY(id)
            )
            DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE track');
    }
}
