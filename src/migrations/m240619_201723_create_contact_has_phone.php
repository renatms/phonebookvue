<?php

use yii\db\Migration;

/**
 * Class m240619_201723_create_contact_has_phone
 */
class m240619_201723_create_contact_has_phone extends Migration
{
    const TABLE_NAME = 'contact_has_phone';

    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME,
        [
            'contact_id' => $this->integer()->notNull(),
            'phone_id' => $this->integer()->notNull()
        ]);

    }

    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
    }

}
