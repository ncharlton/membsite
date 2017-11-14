<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171113014915 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE game (game_id INT AUTO_INCREMENT NOT NULL, game_name VARCHAR(255) NOT NULL, game_slug VARCHAR(255) NOT NULL, game_description VARCHAR(255) NOT NULL, game_image VARCHAR(255) NOT NULL, game_buy_link VARCHAR(255) NOT NULL, game_link VARCHAR(255) NOT NULL, game_genre VARCHAR(255) NOT NULL, game_mode VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_232B318C7388F74E (game_slug), PRIMARY KEY(game_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD39950232B318C FOREIGN KEY (game) REFERENCES game (game_id)');
        $this->addSql('ALTER TABLE news ADD CONSTRAINT FK_1DD39950BDAFD8C8 FOREIGN KEY (author) REFERENCES user (user_id)');
        $this->addSql('ALTER TABLE user CHANGE profile profile INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498157AA0F FOREIGN KEY (profile) REFERENCES profile (profile_id) ON DELETE CASCADE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6498157AA0F ON user (profile)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE news DROP FOREIGN KEY FK_1DD39950232B318C');
        $this->addSql('DROP TABLE game');
        $this->addSql('ALTER TABLE news DROP FOREIGN KEY FK_1DD39950BDAFD8C8');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498157AA0F');
        $this->addSql('DROP INDEX UNIQ_8D93D6498157AA0F ON user');
        $this->addSql('ALTER TABLE user CHANGE profile profile VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
    }
}
