<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230513181334 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('app_blog');
        $table->addColumn('id', 'string', ['length' => 64]);
        $table->addColumn('title', 'string');
        $table->addColumn('title_slug', 'string');
        $table->addColumn('author_name', 'string', ['length' => 128]);
        $table->addColumn('author_uri', 'string');
        $table->addColumn('updated', 'datetime');
        $table->addColumn('summary', 'text');
        $table->addColumn('category', 'string');
        $table->addColumn('content', 'text');
        $table->setPrimaryKey(['id']);

        $table = $schema->createTable('app_release');
        $table->addColumn('id', 'string', ['length' => 64]);
        $table->addColumn('tag_name', 'string', ['length' => 32]);
        $table->addColumn('html_url', 'string');
        $table->addColumn('published_at', 'datetime');
        $table->addColumn('author_name', 'string', ['length' => 128]);
        $table->addColumn('author_uri', 'string');
        $table->addColumn('body', 'text');
        $table->addColumn('asset_name', 'string');
        $table->addColumn('asset_url', 'string');
        $table->addColumn('asset_size', 'string');
        $table->addColumn('asset_mime', 'string');
        $table->setPrimaryKey(['id']);

        $table = $schema->createTable('app_adapter');
        $table->addColumn('name', 'string', ['length' => 64]);
        $table->addColumn('description', 'string');
        $table->addColumn('url', 'string');
        $table->addColumn('repository', 'string');
        $table->addColumn('downloads', 'integer');
        $table->addColumn('favers', 'integer');
        $table->addColumn('update_date', 'datetime');
        $table->addColumn('insert_date', 'datetime');
        $table->setPrimaryKey(['name']);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
