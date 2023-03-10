<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230310011440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE athlete (id INT AUTO_INCREMENT NOT NULL, competition_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, age INT NOT NULL, poids DOUBLE PRECISION NOT NULL, taille DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_C03B83217B39D312 (competition_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE athlete_tournoi (athlete_id INT NOT NULL, tournoi_id INT NOT NULL, INDEX IDX_676DB5B0FE6BCB8B (athlete_id), INDEX IDX_676DB5B0F607770A (tournoi_id), PRIMARY KEY(athlete_id, tournoi_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competition (id INT AUTO_INCREMENT NOT NULL, athlete_id INT DEFAULT NULL, nbr_trophet INT NOT NULL, nbr_participation_international INT NOT NULL, niveau VARCHAR(255) NOT NULL, cla_mondial INT DEFAULT NULL, UNIQUE INDEX UNIQ_B50A2CB1FE6BCB8B (athlete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournoi (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE athlete ADD CONSTRAINT FK_C03B83217B39D312 FOREIGN KEY (competition_id) REFERENCES competition (id)');
        $this->addSql('ALTER TABLE athlete_tournoi ADD CONSTRAINT FK_676DB5B0FE6BCB8B FOREIGN KEY (athlete_id) REFERENCES athlete (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE athlete_tournoi ADD CONSTRAINT FK_676DB5B0F607770A FOREIGN KEY (tournoi_id) REFERENCES tournoi (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competition ADD CONSTRAINT FK_B50A2CB1FE6BCB8B FOREIGN KEY (athlete_id) REFERENCES athlete (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE athlete DROP FOREIGN KEY FK_C03B83217B39D312');
        $this->addSql('ALTER TABLE athlete_tournoi DROP FOREIGN KEY FK_676DB5B0FE6BCB8B');
        $this->addSql('ALTER TABLE athlete_tournoi DROP FOREIGN KEY FK_676DB5B0F607770A');
        $this->addSql('ALTER TABLE competition DROP FOREIGN KEY FK_B50A2CB1FE6BCB8B');
        $this->addSql('DROP TABLE athlete');
        $this->addSql('DROP TABLE athlete_tournoi');
        $this->addSql('DROP TABLE competition');
        $this->addSql('DROP TABLE tournoi');
    }
}
