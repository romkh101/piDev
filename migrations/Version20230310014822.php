<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230310014822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE back (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, date DATE NOT NULL, time TIME NOT NULL, nb_max_part INT NOT NULL, description VARCHAR(255) NOT NULL, nb_part INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participant (id INT AUTO_INCREMENT NOT NULL, id_part VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, name_event VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participant_back (participant_id INT NOT NULL, back_id INT NOT NULL, INDEX IDX_B97AD3099D1C3019 (participant_id), INDEX IDX_B97AD309E9583FF0 (back_id), PRIMARY KEY(participant_id, back_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE participant_back ADD CONSTRAINT FK_B97AD3099D1C3019 FOREIGN KEY (participant_id) REFERENCES participant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participant_back ADD CONSTRAINT FK_B97AD309E9583FF0 FOREIGN KEY (back_id) REFERENCES back (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participant_back DROP FOREIGN KEY FK_B97AD3099D1C3019');
        $this->addSql('ALTER TABLE participant_back DROP FOREIGN KEY FK_B97AD309E9583FF0');
        $this->addSql('DROP TABLE back');
        $this->addSql('DROP TABLE participant');
        $this->addSql('DROP TABLE participant_back');
    }
}
