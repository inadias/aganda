<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230419104208 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact_detail ADD contact_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact_detail ADD CONSTRAINT FK_BE944812E7A1254A FOREIGN KEY (contact_id) REFERENCES contact (id)');
        $this->addSql('CREATE INDEX IDX_BE944812E7A1254A ON contact_detail (contact_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact_detail DROP FOREIGN KEY FK_BE944812E7A1254A');
        $this->addSql('DROP INDEX IDX_BE944812E7A1254A ON contact_detail');
        $this->addSql('ALTER TABLE contact_detail DROP contact_id');
    }
}
