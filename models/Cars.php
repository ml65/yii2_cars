<?php
/*************************************************************************
 *
 *  Cars.php - Модель данных таблицы CAR
 *
 *  
 *  V.1.02
 *  ML65 2021-08-07
 *************************************************************************/

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Cars
 * @package app\models
 * 
 * @property int $id
 * @property string $brand
 * @property string $model
 * @property string $engine
 * @property string $transmission
 */
class Cars extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand', 'model', 'engine', 'transmission'], 'required'],
            [['brand', 'model', 'engine', 'transmission'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand' => 'Марка',
            'model' => 'Модель',
            'engine' => 'Двигатель',
            'transmission' => 'Коробка передач',
        ];
    }
}