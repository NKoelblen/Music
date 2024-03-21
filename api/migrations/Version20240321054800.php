<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240321054800 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE genre_genre (genre_source INT NOT NULL, genre_target INT NOT NULL, INDEX IDX_3E562C3DB4394F53 (genre_source), INDEX IDX_3E562C3DADDC1FDC (genre_target), PRIMARY KEY(genre_source, genre_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE genre_genre ADD CONSTRAINT FK_3E562C3DB4394F53 FOREIGN KEY (genre_source) REFERENCES genre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE genre_genre ADD CONSTRAINT FK_3E562C3DADDC1FDC FOREIGN KEY (genre_target) REFERENCES genre (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE genre_genre DROP FOREIGN KEY FK_3E562C3DB4394F53');
        $this->addSql('ALTER TABLE genre_genre DROP FOREIGN KEY FK_3E562C3DADDC1FDC');
        $this->addSql('DROP TABLE genre_genre');
    }
}
