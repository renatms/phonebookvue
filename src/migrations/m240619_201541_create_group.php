<?php

use yii\db\Migration;

/**
 * Class m240619_202006_create_group
 */
class m240619_201541_create_group extends Migration
{
    const TABLE = 'group';

    public function safeUp()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'type' => $this->string(20)->notNull(),
        ]);

        $this->batchInsert(self::TABLE, ['type'], [
                ['Домашний'],
                ['Рабочий'],
                ['Сотовый'],
                ['Главный'],
            ]
        );
    }

    public function safeDown()
    {
        $this->dropTable('group');
    }

}
