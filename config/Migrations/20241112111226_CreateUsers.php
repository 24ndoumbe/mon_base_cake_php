<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('active', 'boolean', ['default' => 0]) // Champ actif 0/1
        ->addColumn('nom', 'string', ['limit' => 255])
        ->addColumn('prenom', 'string', ['limit' => 255])
        ->addColumn('email', 'string', ['limit' => 255, 'null' => false])
        ->addColumn('password', 'string', ['limit' => 255, 'null' => false])
        ->addColumn('observation', 'text', ['null' => true])
        ->addTimestamps()  // Crée les champs created et modified
        ->addIndex(['email'], ['unique' => true]) // Ajoute un index unique sur l'email
        ->create();
    }
}
