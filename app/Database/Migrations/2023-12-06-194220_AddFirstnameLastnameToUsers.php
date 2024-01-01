<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFirstnameLastnameToUsers extends Migration
{
    /**
     * @var string[]
     */
    private array $tables;

    public function __construct(?Forge $forge = null)
    {
        parent::__construct($forge);

        /** @var \Config\Auth $authConfig */
        $authConfig   = config('Auth');
        $this->tables = $authConfig->tables;
    }

    public function up()
    {
        $fields = [
            'firstname' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => false],
            'lastname' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => false],
        ];
        $this->forge->addColumn($this->tables['users'], $fields);
    }

    public function down()
    {
        $fields = [
            'firstname',
            'lastname',
        ];
        $this->forge->dropColumn($this->tables['users'], $fields);
    }
}
