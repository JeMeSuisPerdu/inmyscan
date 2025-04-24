<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241114015437 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE episode_serie (id INT AUTO_INCREMENT NOT NULL, serie_id_id INT NOT NULL, saison_numero INT NOT NULL, episode_number INT NOT NULL, lecteur_links JSON NOT NULL, INDEX IDX_91306560B748AAC3 (serie_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, lecteur_links JSON NOT NULL, annee_sortie INT DEFAULT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE serie (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE episode_serie ADD CONSTRAINT FK_91306560B748AAC3 FOREIGN KEY (serie_id_id) REFERENCES serie (id)');
        $this->addSql('ALTER TABLE anime DROP link_en');
        $this->addSql('ALTER TABLE manga DROP titre_en, DROP description_en');
        $this->addSql('ALTER TABLE scan DROP nom_en');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE episode_serie DROP FOREIGN KEY FK_91306560B748AAC3');
        $this->addSql('DROP TABLE episode_serie');
        $this->addSql('DROP TABLE films');
        $this->addSql('DROP TABLE serie');
        $this->addSql('ALTER TABLE anime ADD link_en JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE scan ADD nom_en LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE manga ADD titre_en VARCHAR(255) DEFAULT NULL, ADD description_en LONGTEXT DEFAULT NULL');
    }
}
