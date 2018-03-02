<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180121124111 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE setting_category (setting_category_id INT AUTO_INCREMENT NOT NULL, setting_category_name VARCHAR(255) NOT NULL, setting_category_description VARCHAR(255) NOT NULL, PRIMARY KEY(setting_category_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE setting ADD setting_category INT DEFAULT NULL');
        $this->addSql('ALTER TABLE setting ADD CONSTRAINT FK_9F74B898A8C5213B FOREIGN KEY (setting_category) REFERENCES setting_category (setting_category_id)');
        $this->addSql('CREATE INDEX IDX_9F74B898A8C5213B ON setting (setting_category)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE setting DROP FOREIGN KEY FK_9F74B898A8C5213B');
        $this->addSql('DROP TABLE setting_category');
        $this->addSql('DROP INDEX IDX_9F74B898A8C5213B ON setting');
        $this->addSql('ALTER TABLE setting DROP setting_category');
    }
}
