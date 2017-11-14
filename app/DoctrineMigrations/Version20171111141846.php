<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171111141846 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE news DROP FOREIGN KEY FK_1DD39950B03A8386');
        $this->addSql('DROP INDEX IDX_1DD39950B03A8386 ON news');
        $this->addSql('ALTER TABLE news DROP created_by_id');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE news ADD created_by_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD39950B03A8386 FOREIGN KEY (created_by_id) REFERENCES user (user_id)');
        $this->addSql('CREATE INDEX IDX_1DD39950B03A8386 ON news (created_by_id)');
    }
}
