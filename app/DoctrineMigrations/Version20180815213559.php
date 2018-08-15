<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180815213559 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498879E8E5');
        $this->addSql('DROP TABLE rank');
        $this->addSql('DROP TABLE rank_action');
        $this->addSql('DROP INDEX UNIQ_8D93D6498879E8E5 ON user');
        $this->addSql('ALTER TABLE user DROP rank, DROP score');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE rank (rank_id INT AUTO_INCREMENT NOT NULL, rank_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, rank_score VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, rank_badge VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(rank_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rank_action (rank_action_id INT AUTO_INCREMENT NOT NULL, rank_action_score VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, rank_action_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, rank_action_message VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, rank_action_description VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(rank_action_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD rank INT DEFAULT NULL, ADD score INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498879E8E5 FOREIGN KEY (rank) REFERENCES rank (rank_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6498879E8E5 ON user (rank)');
    }
}
