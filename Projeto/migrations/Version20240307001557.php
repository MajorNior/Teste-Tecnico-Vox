<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240307001557 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE socios_empresa (socios_id INT NOT NULL, empresa_id INT NOT NULL, PRIMARY KEY(socios_id, empresa_id))');
        $this->addSql('CREATE INDEX IDX_5A1C32DE48A1A28F ON socios_empresa (socios_id)');
        $this->addSql('CREATE INDEX IDX_5A1C32DE521E1991 ON socios_empresa (empresa_id)');
        $this->addSql('ALTER TABLE socios_empresa ADD CONSTRAINT FK_5A1C32DE48A1A28F FOREIGN KEY (socios_id) REFERENCES socios (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE socios_empresa ADD CONSTRAINT FK_5A1C32DE521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE socios_empresa DROP CONSTRAINT FK_5A1C32DE48A1A28F');
        $this->addSql('ALTER TABLE socios_empresa DROP CONSTRAINT FK_5A1C32DE521E1991');
        $this->addSql('DROP TABLE socios_empresa');
    }
}
