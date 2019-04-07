<?php
use Migrations\AbstractMigration;

class CreateAccounts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('accounts');
       /* $table->addColumn('id', 'integer', [
        'autoIncrement' => true,
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        */
        $table->addColumn('username', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'comment' => 'md5 encrypted password',
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('last_login', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('updated', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'update' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addIndex( [
            'username',
        ], ['unique' => true]
        );
        $table->addPrimaryKey( [
            'id',
        ]);
        $table->create();
    }
}
