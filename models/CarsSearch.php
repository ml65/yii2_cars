<?php
/*************************************************************************
 *
 *  CarSearch.php - Модель поиска по таблице CAR
 *
 *  
 *  V.1.0
 *  ML65 2021-08-07
 *************************************************************************/

namespace app\models;

use app\models\interfaces\CarSearchInterface;
use app\models\filters\CarFilter;
use yii\data\ActiveDataProvider;
use yii\base\Model;

class CarsSearch extends Model implements CarSearchInterface
{
    private $carFilter;
    private $pageSize = 5;

    public function __construct(CarFilter $carFilter, $config = [])
    {
        $this->carFilter = $carFilter;
        parent::__construct($config);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return $this->carFilter->rules();
    }

    /**
     * @inheritdoc
     */
    public function search($params): ActiveDataProvider
    {
        $query = Cars::find();
        
        $this->carFilter->load($params);
        
        if (!$this->carFilter->validate()) {
            return $this->createDataProvider($query);
        }

        $query = $this->carFilter->applyFilters($query);

        return $this->createDataProvider($query);
    }

    /**
     * Создает провайдер данных
     * @param \yii\db\ActiveQuery $query
     * @return ActiveDataProvider
     */
    private function createDataProvider($query): ActiveDataProvider
    {
        return new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => $this->pageSize,
            ]
        ]);
    }

    /**
     * @inheritdoc
     */
    public function formName()
    {
        return '';
    }

    public static function tableName()
    {
        return 'cars';
    }

    public function scenarios()
    {
        return [
            self::DEFAULT => ['brand', 'model', 'engine', 'transmission'],
        ]; 
    }
}