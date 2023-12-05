<?php

use yii\db\Migration;

/**
 * Class m231204_160630_create_table_jadwal_peminjaman
 */
class m231204_160630_create_table_jadwal_peminjaman extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('jadwal_peminjaman', [
            'id' => $this->primaryKey(),
            'id_ruang' => $this->integer(),
            'tanggal' => $this->date()->notNull(),
            'jam_mulai' => $this->time()->notNull(),
            'jam_selesai' => $this->time()->notNull(),
            'nama_peminjam' => $this->string()->notNull(),
            'keperluan' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231204_160630_create_table_jadwal_peminjaman cannot be reverted.\n";

        $this->dropTable('jadwal_peminjaman');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231204_160630_create_table_jadwal_peminjaman cannot be reverted.\n";

        return false;
    }
    */
}
