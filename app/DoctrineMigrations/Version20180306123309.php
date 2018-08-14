<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180306123309 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user ADD rank INT DEFAULT NULL, ADD score INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498879E8E5 FOREIGN KEY (rank) REFERENCES rank (rank_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6498879E8E5 ON user (rank)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498879E8E5');
        $this->addSql('DROP INDEX UNIQ_8D93D6498879E8E5 ON user');
        $this->addSql('ALTER TABLE user DROP rank, DROP score');
    }
}
