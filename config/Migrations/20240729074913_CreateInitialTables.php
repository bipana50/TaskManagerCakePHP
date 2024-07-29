<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateInitialTables extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('email', 'string', ['limit' => 255, 'null' => false])
              ->addColumn('password', 'string', ['limit' => 255, 'null' => false])
              ->addColumn('created', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('modified', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
              ->create();

        $table = $this->table('tasks');
        $table->addColumn('title', 'string', ['limit' => 255, 'null' => false])
              ->addColumn('description', 'text', ['null' => true])
              ->addColumn('status', 'enum', ['values' => ['todo', 'in-progress', 'done'], 'default' => 'todo'])
              ->addColumn('user_id', 'integer', ['null' => false])
              ->addColumn('created', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('modified', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
              ->create();
    }
}
