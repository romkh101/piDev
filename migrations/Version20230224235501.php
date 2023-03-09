<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230224235501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE athlete_tournoi (athlete_id INT NOT NULL, tournoi_id INT NOT NULL, INDEX IDX_676DB5B0FE6BCB8B (athlete_id), INDEX IDX_676DB5B0F607770A (tournoi_id), PRIMARY KEY(athlete_id, tournoi_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE athlete_tournoi ADD CONSTRAINT FK_676DB5B0FE6BCB8B FOREIGN KEY (athlete_id) REFERENCES athlete (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE athlete_tournoi ADD CONSTRAINT FK_676DB5B0F607770A FOREIGN KEY (tournoi_id) REFERENCES tournoi (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE athlete_tournoi DROP FOREIGN KEY FK_676DB5B0FE6BCB8B');
        $this->addSql('ALTER TABLE athlete_tournoi DROP FOREIGN KEY FK_676DB5B0F607770A');
        $this->addSql('DROP TABLE athlete_tournoi');
    }
}
