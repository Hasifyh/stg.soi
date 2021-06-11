<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210610065807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE les_dates_id_seq START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE TABLE les_dates (id NUMBER(10) NOT NULL, d1 TIMESTAMP(0) NOT NULL, d2 TIMESTAMP(0) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE SITUATION_DATA ADD (id_status NUMBER(10) DEFAULT NULL NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE les_dates_id_seq');
        $this->addSql('DROP TABLE les_dates');
        $this->addSql('ALTER TABLE situation_data DROP (id_status)');
    }
}
