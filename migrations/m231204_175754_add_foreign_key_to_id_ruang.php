<?php

use yii\db\Migration;

/**
 * Class m231204_175754_add_foreign_key_to_id_ruang
 */
class m231204_175754_add_foreign_key_to_id_ruang extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('id_ruang', 'jadwal_peminjaman', 'id_ruang', 'ruang_rapat', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231204_175754_add_foreign_key_to_id_ruang cannot be reverted.\n";
        $this->dropForeignKey('id_ruang', 'ruang_rapat');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231204_175754_add_foreign_key_to_id_ruang cannot be reverted.\n";

        return false;
    }
    */
}
