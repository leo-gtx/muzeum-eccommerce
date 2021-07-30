<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210728084406 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comment DROP INDEX FK_9474526CF675F31B, ADD UNIQUE INDEX UNIQ_9474526CF675F31B (author_id)');
        $this->addSql('ALTER TABLE product CHANGE slug slug VARCHAR(128) NOT NULL');
        $this->addSql('ALTER TABLE user ADD favorites_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64984DDC6B4 FOREIGN KEY (favorites_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64984DDC6B4 ON user (favorites_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comment DROP INDEX UNIQ_9474526CF675F31B, ADD INDEX FK_9474526CF675F31B (author_id)');
        $this->addSql('ALTER TABLE product CHANGE slug slug VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64984DDC6B4');
        $this->addSql('DROP INDEX IDX_8D93D64984DDC6B4 ON user');
        $this->addSql('ALTER TABLE user DROP favorites_id');
    }
}
