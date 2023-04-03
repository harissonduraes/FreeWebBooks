<?php

use yii\db\Migration;

/**
 * Class m230314_131253_pessoa
 */
class m230314_131253_pessoa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pessoa',[
            'id'=>$this->primaryKey(),
            'nome'=>$this->text()-> notNull()-> comment("Nome do usuário"),
            'senha' => $this-> text()-> notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pessoa');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230314_131253_pessoa cannot be reverted.\n";

        return false;
    }
    */
}
