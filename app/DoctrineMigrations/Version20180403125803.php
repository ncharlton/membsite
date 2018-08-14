<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180403125803 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reaction ADD reaction_user_id INT NOT NULL, ADD reaction_username VARCHAR(255) NOT NULL, ADD reaction_item_type VARCHAR(255) NOT NULL, ADD reaction_item_id INT NOT NULL, DROP user_id, DROP username, DROP item_type, DROP item_id');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reaction ADD user_id INT NOT NULL, ADD username VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD item_type VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, ADD item_id INT NOT NULL, DROP reaction_user_id, DROP reaction_username, DROP reaction_item_type, DROP reaction_item_id');
    }
}
