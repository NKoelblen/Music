<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240320173358 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE track CHANGE album_id album_id INT DEFAULT NULL, CHANGE duration duration INT DEFAULT NULL, CHANGE disc_number disc_number INT DEFAULT NULL, CHANGE track_number track_number INT DEFAULT NULL, CHANGE accousticness accousticness DOUBLE PRECISION DEFAULT NULL, CHANGE danceability danceability DOUBLE PRECISION DEFAULT NULL, CHANGE energy energy DOUBLE PRECISION DEFAULT NULL, CHANGE instrumentalness instrumentalness DOUBLE PRECISION DEFAULT NULL, CHANGE music_key music_key INT DEFAULT NULL, CHANGE liveness liveness DOUBLE PRECISION DEFAULT NULL, CHANGE loudness loudness DOUBLE PRECISION DEFAULT NULL, CHANGE modality modality INT DEFAULT NULL, CHANGE speechiness speechiness DOUBLE PRECISION DEFAULT NULL, CHANGE tempo tempo DOUBLE PRECISION DEFAULT NULL, CHANGE time_signature time_signature INT DEFAULT NULL, CHANGE valence valence DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE track CHANGE album_id album_id INT NOT NULL, CHANGE duration duration INT NOT NULL, CHANGE track_number track_number INT NOT NULL, CHANGE accousticness accousticness DOUBLE PRECISION NOT NULL, CHANGE danceability danceability DOUBLE PRECISION NOT NULL, CHANGE energy energy DOUBLE PRECISION NOT NULL, CHANGE instrumentalness instrumentalness DOUBLE PRECISION NOT NULL, CHANGE music_key music_key INT NOT NULL, CHANGE liveness liveness DOUBLE PRECISION NOT NULL, CHANGE loudness loudness DOUBLE PRECISION NOT NULL, CHANGE modality modality INT NOT NULL, CHANGE speechiness speechiness DOUBLE PRECISION NOT NULL, CHANGE tempo tempo DOUBLE PRECISION NOT NULL, CHANGE time_signature time_signature INT NOT NULL, CHANGE valence valence DOUBLE PRECISION NOT NULL, CHANGE disc_number disc_number INT NOT NULL');
    }
}
