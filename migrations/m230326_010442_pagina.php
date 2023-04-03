<?php

use yii\db\Migration;

/**
 * Class m230326_010442_pagina
 */
class m230326_010442_pagina extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pagina',[
            'id' => $this-> primaryKey(),
            'texto' => $this-> text()-> comment("Conteúdo da página"),
            'livro_id' => $this-> integer()-> comment("Chave estrangeira de livro"),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this-> dropTable("pagina");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230326_010442_pagina cannot be reverted.\n";

        return false;
    }
    */
}
