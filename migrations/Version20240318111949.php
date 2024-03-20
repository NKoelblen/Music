<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240318111949 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE album ADD spotify_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE artist ADD spotify_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE track ADD spotify_id VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE track DROP spotify_id');
        $this->addSql('ALTER TABLE artist DROP spotify_id');
        $this->addSql('ALTER TABLE album DROP spotify_id');
    }
}
