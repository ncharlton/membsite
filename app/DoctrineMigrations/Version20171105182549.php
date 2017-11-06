<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171105182549 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE news (news_id INT AUTO_INCREMENT NOT NULL, game INT DEFAULT NULL, author INT DEFAULT NULL, news_title VARCHAR(255) NOT NULL, news_slug VARCHAR(255) NOT NULL, news_keywords VARCHAR(255) NOT NULL, news_content VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_1DD39950232B318C (game), INDEX IDX_1DD39950BDAFD8C8 (author), PRIMARY KEY(news_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD39950232B318C FOREIGN KEY (game) REFERENCES game (game_id)');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD39950BDAFD8C8 FOREIGN KEY (author) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE user CHANGE profile profile INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498157AA0F FOREIGN KEY (profile) REFERENCES profile (profile_id) ON DELETE CASCADE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6498157AA0F ON user (profile)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE news');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498157AA0F');
        $this->addSql('DROP INDEX UNIQ_8D93D6498157AA0F ON user');
        $this->addSql('ALTER TABLE user CHANGE profile profile VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
