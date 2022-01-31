<?php

namespace App;

use Doctrine\DBAL\Schema\Schema;

class DatabaseSchema
{
    public static function getSchema()
    {
        $schema = new Schema();
        self::addTableBlog($schema);
        self::addTableRelease($schema);
        self::addTableAdapter($schema);
        return $schema;
    }

    protected static function addTableBlog(Schema $schema)
    {
        $table = $schema->createTable('blog');
        $table->addColumn('id', 'string', array('length' => 64));
        $table->addColumn('title', 'string');
        $table->addColumn('titleSlug', 'string');
        $table->addColumn('authorName', 'string', array('length' => 128));
        $table->addColumn('authorUri', 'string');
        $table->addColumn('updated', 'datetime');
        $table->addColumn('summary', 'text');
        $table->addColumn('category', 'string');
        $table->addColumn('content', 'text');
        $table->setPrimaryKey(array('id'));
    }

    protected static function addTableRelease(Schema $schema)
    {
        $table = $schema->createTable('release');
        $table->addColumn('id', 'string', array('length' => 64));
        $table->addColumn('tagName', 'string', array('length' => 32));
        $table->addColumn('htmlUrl', 'string');
        $table->addColumn('publishedAt', 'datetime');
        $table->addColumn('authorName', 'string', array('length' => 128));
        $table->addColumn('authorUri', 'string');
        $table->addColumn('body', 'text');
        $table->addColumn('assetName', 'string');
        $table->addColumn('assetUrl', 'string');
        $table->addColumn('assetSize', 'string');
        $table->addColumn('assetMime', 'string');
        $table->setPrimaryKey(array('id'));
    }

    protected static function addTableAdapter(Schema $schema)
    {
        $table = $schema->createTable('adapter');
        $table->addColumn('name', 'string', array('length' => 64));
        $table->addColumn('description', 'string');
        $table->addColumn('url', 'string');
        $table->addColumn('repository', 'string');
        $table->addColumn('downloads', 'integer');
        $table->addColumn('favers', 'integer');
        $table->addColumn('capabilities', 'string');
        $table->addColumn('updateDate', 'datetime');
        $table->addColumn('insertDate', 'datetime');
        $table->setPrimaryKey(array('name'));
    }
}
