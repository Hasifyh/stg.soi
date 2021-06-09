<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210605125438 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE situation_id_seq START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE situation_data_id_seq START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE situation_dtl_id_seq START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE TABLE situation (id NUMBER(10) NOT NULL, libelle VARCHAR2(30) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE situation_data (id NUMBER(10) NOT NULL, libelle VARCHAR2(25) DEFAULT NULL NULL, montant NUMERIC(20, 2) DEFAULT NULL NULL, nombre NUMBER(10) DEFAULT NULL NULL, created_at DATE DEFAULT NULL NULL, status VARCHAR2(25) DEFAULT NULL NULL, id_parent_data NUMBER(10) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE situation_dtl (id NUMBER(10) NOT NULL, libelle VARCHAR2(35) DEFAULT NULL NULL, status VARCHAR2(10) DEFAULT NULL NULL, id_parent_dtl NUMBER(10) DEFAULT NULL NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE situation_id_seq');
        $this->addSql('DROP SEQUENCE situation_data_id_seq');
        $this->addSql('DROP SEQUENCE situation_dtl_id_seq');
        $this->addSql('DROP TABLE situation');
        $this->addSql('DROP TABLE situation_data');
        $this->addSql('DROP TABLE situation_dtl');
    }
}
