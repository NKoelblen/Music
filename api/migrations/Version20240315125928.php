<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240315125928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE song ADD genre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE song ADD CONSTRAINT FK_33EDEEA14296D31F FOREIGN KEY (genre_id) REFERENCES genre (id)');
        $this->addSql('CREATE INDEX IDX_33EDEEA14296D31F ON song (genre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE song DROP FOREIGN KEY FK_33EDEEA14296D31F');
        $this->addSql('DROP INDEX IDX_33EDEEA14296D31F ON song');
        $this->addSql('ALTER TABLE song DROP genre_id');
    }
}
