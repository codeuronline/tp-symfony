<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220603084154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE position (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE position_team (position_id INT NOT NULL, team_id INT NOT NULL, INDEX IDX_D7788841DD842E46 (position_id), INDEX IDX_D7788841296CD8AE (team_id), PRIMARY KEY(position_id, team_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE position_team ADD CONSTRAINT FK_D7788841DD842E46 FOREIGN KEY (position_id) REFERENCES position (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE position_team ADD CONSTRAINT FK_D7788841296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE position_team DROP FOREIGN KEY FK_D7788841DD842E46');
        $this->addSql('DROP TABLE position');
        $this->addSql('DROP TABLE position_team');
    }
}
