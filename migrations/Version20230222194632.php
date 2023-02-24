<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222194632 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE athlete ADD competition_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE athlete ADD CONSTRAINT FK_C03B83217B39D312 FOREIGN KEY (competition_id) REFERENCES competition (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C03B83217B39D312 ON athlete (competition_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE athlete DROP FOREIGN KEY FK_C03B83217B39D312');
        $this->addSql('DROP INDEX UNIQ_C03B83217B39D312 ON athlete');
        $this->addSql('ALTER TABLE athlete DROP competition_id');
    }
}
