<?php

use yii\db\Migration;

/**
 * Class m231204_160013_create_table_ruang_rapat
 */
class m231204_160013_create_table_ruang_rapat extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ruang_rapat', [
            'id' => $this->primaryKey(),
            'nama_ruang' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231204_160013_create_table_ruang_rapat cannot be reverted.\n";

        $this->dropTable('ruang_rapat');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231204_160013_create_table_ruang_rapat cannot be reverted.\n";

        return false;
    }
    */
}
