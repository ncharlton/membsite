<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171114182052 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE clip (clip_id INT AUTO_INCREMENT NOT NULL, author INT DEFAULT NULL, clip_tracking_id INT NOT NULL, clip_slug VARCHAR(255) NOT NULL, clip_name VARCHAR(255) NOT NULL, clip_creator VARCHAR(255) NOT NULL, clip_embed_url VARCHAR(255) NOT NULL, clip_vod_id INT NOT NULL, clip_duration VARCHAR(255) NOT NULL, clip_created_at DATETIME NOT NULL, clip_hits INT NOT NULL, clip_thumbnail_medium VARCHAR(255) NOT NULL, clip_thumbnail_small VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_AD201467123504A8 (clip_slug), INDEX IDX_AD201467BDAFD8C8 (author), PRIMARY KEY(clip_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE clip ADD CONSTRAINT FK_AD201467BDAFD8C8 FOREIGN KEY (author) REFERENCES user (user_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE clip');
    }
}
