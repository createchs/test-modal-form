<?php

class m131211_234321_create_table_task extends CDbMigration
{
    public $table_name = 'task';

	public function up()
	{
        $this->createTable($this->table_name, [
            'id' => 'pk',
            'title' => 'string',
            'description' => 'text',
            'due_date' => 'date',
        ], 'Engine=InnoDB');
	}

	public function down()
	{
        $this->dropTable($this->table_name);
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}