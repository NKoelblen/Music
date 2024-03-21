<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318163531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE genre ADD transverse TINYINT(1) DEFAULT NULL');
        $this->addSql('DROP INDEX album_id ON track');
        $this->addSql('DROP INDEX spotify_id ON track');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE genre DROP transverse');
        $this->addSql('CREATE INDEX album_id ON track (album_id)');
        $this->addSql('CREATE INDEX spotify_id ON track (spotify_id)');
    }
}
