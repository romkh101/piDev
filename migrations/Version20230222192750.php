<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222192750 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competition ADD athlete_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE competition ADD CONSTRAINT FK_B50A2CB1FE6BCB8B FOREIGN KEY (athlete_id) REFERENCES athlete (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B50A2CB1FE6BCB8B ON competition (athlete_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competition DROP FOREIGN KEY FK_B50A2CB1FE6BCB8B');
        $this->addSql('DROP INDEX UNIQ_B50A2CB1FE6BCB8B ON competition');
        $this->addSql('ALTER TABLE competition DROP athlete_id');
    }
}
