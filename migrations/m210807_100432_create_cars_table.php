<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cars}}`.
 */
class m210807_100432_create_cars_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cars', [
            'id' => $this->primaryKey(),
            'brand' => $this->string()->notNull(),
            'model' => $this->string()->notNull(),
            'engine' => $this->string(),
            'transmission' => $this->string(),
        ]);

        // creates index 
        $this->createIndex(
            'brand',
            'cars',
            'brand',
        );
        $this->createIndex(
            'model',
            'cars',
            'model',
        );
        $this->createIndex(
            'engine',
            'cars',
            'engine',
        );
        $this->createIndex(
            'transmission',
            'cars',
            'transmission',
        );

        $this->insert('{{%cars}}', [
            'id' => 1,
            'brand' => 'Lexus',
            'model' => 'GX',
            'engine' => 'Бензин',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 4,
            'brand' => 'Lexus',
            'model' => 'ES',
            'engine' => 'Гибрид',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 5,
            'brand' => 'Lexus',
            'model' => 'ES',
            'engine' => 'Гибрид',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 6,
            'brand' => 'Lexus',
            'model' => 'ES',
            'engine' => 'Бензин',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 7,
            'brand' => 'Lexus',
            'model' => 'GX',
            'engine' => 'Дизель',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 8,
            'brand' => 'Tayota',
            'model' => 'Camry',
            'engine' => 'Бензин',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 9,
            'brand' => 'Tayota',
            'model' => 'Corolla',
            'engine' => 'Дизель',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 10,
            'brand' => 'Lexus',
            'model' => 'ES',
            'engine' => 'Бензин',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 11,
            'brand' => 'Lexus',
            'model' => 'GX',
            'engine' => 'Дизель',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 12,
            'brand' => 'Tayota',
            'model' => 'Camry',
            'engine' => 'Бензин',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 13,
            'brand' => 'Tayota',
            'model' => 'Corolla',
            'engine' => 'Дизель',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 14,
            'brand' => 'Lexus',
            'model' => 'ES',
            'engine' => 'Бензин',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 15,
            'brand' => 'Lexus',
            'model' => 'GX',
            'engine' => 'Дизель',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 16,
            'brand' => 'Tayota',
            'model' => 'Camry',
            'engine' => 'Бензин',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 17,
            'brand' => 'Tayota',
            'model' => 'Corolla',
            'engine' => 'Дизель',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 18,
            'brand' => 'Lexus',
            'model' => 'ES',
            'engine' => 'Бензин',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 19,
            'brand' => 'Lexus',
            'model' => 'GX',
            'engine' => 'Дизель',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 20,
            'brand' => 'Tayota',
            'model' => 'Camry',
            'engine' => 'Бензин',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 21,
            'brand' => 'Tayota',
            'model' => 'Corolla',
            'engine' => 'Дизель',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 22,
            'brand' => 'Lexus',
            'model' => 'ES',
            'engine' => 'Бензин',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 23,
            'brand' => 'Lexus',
            'model' => 'GX',
            'engine' => 'Дизель',
            'transmission' => 'Полный',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 24,
            'brand' => 'Tayota',
            'model' => 'Camry',
            'engine' => 'Бензин',
            'transmission' => 'Передний',
        ]);
        $this->insert('{{%cars}}', [
            'id' => 25,
            'brand' => 'Tayota',
            'model' => 'Corolla',
            'engine' => 'Дизель',
            'transmission' => 'Полный',
        ]);



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cars}}');
    }
}
