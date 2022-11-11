<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Zipcodes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('zipcodes', array('id' => false, 'primary_key' => 'zip_id'));
        $table->addColumn('zip_id', 'integer', array('identity' => true, 'limit' => 11, 'signed' => false))
                ->addColumn('zipcode', 'string', array('limit' => 255, 'null' => true))
                ->addColumn('eligible_type', 'string', array('limit' => 255, 'null' => true))
                ->addTimeStamps()->create();
    }
}
