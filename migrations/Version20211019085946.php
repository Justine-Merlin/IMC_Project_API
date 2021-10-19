<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211019085946 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE weigth DROP FOREIGN KEY FK_F5BB54534F60FE66');
        $this->addSql('DROP INDEX IDX_F5BB54534F60FE66 ON weigth');
        $this->addSql('ALTER TABLE weigth DROP imc_categ_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE weigth ADD imc_categ_id INT NOT NULL');
        $this->addSql('ALTER TABLE weigth ADD CONSTRAINT FK_F5BB54534F60FE66 FOREIGN KEY (imc_categ_id) REFERENCES imc_categorie (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_F5BB54534F60FE66 ON weigth (imc_categ_id)');
    }
}
