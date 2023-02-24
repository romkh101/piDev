<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230224072220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sport (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, nbj INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe CHANGE nom nom VARCHAR(30) NOT NULL, CHANGE logo logo VARCHAR(255) NOT NULL, CHANGE pays pays VARCHAR(30) NOT NULL, CHANGE ligue ligue VARCHAR(30) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE sport');
        $this->addSql('ALTER TABLE equipe CHANGE nom nom VARCHAR(30) DEFAULT NULL, CHANGE pays pays VARCHAR(30) DEFAULT NULL, CHANGE logo logo VARCHAR(255) DEFAULT NULL, CHANGE ligue ligue VARCHAR(30) DEFAULT NULL');
    }
}
