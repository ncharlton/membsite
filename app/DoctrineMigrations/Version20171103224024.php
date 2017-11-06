<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171103224024 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE profile (profile_id INT AUTO_INCREMENT NOT NULL, profile_avatar VARCHAR(255) DEFAULT NULL, profile_bio VARCHAR(255) DEFAULT NULL, profile_issub VARCHAR(255) DEFAULT NULL, profile_subplan VARCHAR(255) DEFAULT NULL, profile_subsince VARCHAR(255) DEFAULT NULL, PRIMARY KEY(profile_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (user_id INT AUTO_INCREMENT NOT NULL, profile VARCHAR(255) NOT NULL, activated INT NOT NULL, type VARCHAR(255) NOT NULL, tid INT DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) DEFAULT NULL, access_token VARCHAR(255) DEFAULT NULL, refresh_token VARCHAR(255) DEFAULT NULL, token_expire VARCHAR(255) DEFAULT NULL, roles LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json_array)\', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(user_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE profile');
        $this->addSql('DROP TABLE user');
    }
}
