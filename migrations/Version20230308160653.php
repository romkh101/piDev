<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308160653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX idx_54928197ff7747b489c2003f ON actualite');
        $this->addSql('CREATE FULLTEXT INDEX IDX_549281973EB668B0467F39A32F6B476 ON actualite (Titre, Contenu, Auteur)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX idx_549281973eb668b0467f39a32f6b476 ON actualite');
        $this->addSql('CREATE FULLTEXT INDEX IDX_54928197FF7747B489C2003F ON actualite (titre, contenu, auteur)');
    }
}
