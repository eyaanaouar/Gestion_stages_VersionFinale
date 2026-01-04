<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260104141126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis_entreprises ADD CONSTRAINT FK_958FA0621A5CE76 FOREIGN KEY (id_etudiant) REFERENCES etudiants (id_etudiant)');
        $this->addSql('ALTER TABLE avis_entreprises ADD CONSTRAINT FK_958FA06A8937AB7 FOREIGN KEY (id_entreprise) REFERENCES entreprises (id_entreprise)');
        $this->addSql('ALTER TABLE candidatures ADD CONSTRAINT FK_DE57CF6621A5CE76 FOREIGN KEY (id_etudiant) REFERENCES etudiants (id_etudiant)');
        $this->addSql('ALTER TABLE candidatures ADD CONSTRAINT FK_DE57CF664103C75F FOREIGN KEY (id_offre) REFERENCES offres_stage (id_offre)');
        $this->addSql('ALTER TABLE documents ADD CONSTRAINT FK_A2B07288FB291E4F FOREIGN KEY (id_candidature) REFERENCES candidatures (id_candidature)');
        $this->addSql('ALTER TABLE feedbacks ADD CONSTRAINT FK_7E6C3F89FB291E4F FOREIGN KEY (id_candidature) REFERENCES candidatures (id_candidature)');
        $this->addSql('ALTER TABLE offres_stage ADD CONSTRAINT FK_27D34C36A8937AB7 FOREIGN KEY (id_entreprise) REFERENCES entreprises (id_entreprise)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis_entreprises DROP FOREIGN KEY FK_958FA0621A5CE76');
        $this->addSql('ALTER TABLE avis_entreprises DROP FOREIGN KEY FK_958FA06A8937AB7');
        $this->addSql('ALTER TABLE candidatures DROP FOREIGN KEY FK_DE57CF6621A5CE76');
        $this->addSql('ALTER TABLE candidatures DROP FOREIGN KEY FK_DE57CF664103C75F');
        $this->addSql('ALTER TABLE documents DROP FOREIGN KEY FK_A2B07288FB291E4F');
        $this->addSql('ALTER TABLE feedbacks DROP FOREIGN KEY FK_7E6C3F89FB291E4F');
        $this->addSql('ALTER TABLE offres_stage DROP FOREIGN KEY FK_27D34C36A8937AB7');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE avis_entreprises');
        $this->addSql('DROP TABLE candidatures');
        $this->addSql('DROP TABLE documents');
        $this->addSql('DROP TABLE entreprises');
        $this->addSql('DROP TABLE etudiants');
        $this->addSql('DROP TABLE feedbacks');
        $this->addSql('DROP TABLE offres_stage');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
