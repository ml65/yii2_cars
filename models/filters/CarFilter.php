<?php

namespace app\models\filters;

use yii\base\Model;
use yii\db\ActiveQuery;

class CarFilter extends Model
{
    public $brand;
    public $model;
    public $engine;
    public $transmission;

    /**
     * Применяет фильтры к запросу
     * @param ActiveQuery $query
     * @return ActiveQuery
     */
    public function applyFilters(ActiveQuery $query): ActiveQuery
    {
        if ($this->brand) {
            $query->andFilterWhere(['LIKE', 'brand', $this->brand]);
        }
        
        if ($this->model) {
            $query->andFilterWhere(['LIKE', 'model', $this->model]);
        }
        
        if ($this->engine) {
            $query->andFilterWhere(['LIKE', 'engine', $this->engine]);
        }
        
        if ($this->transmission) {
            $query->andFilterWhere(['LIKE', 'transmission', $this->transmission]);
        }

        return $query;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand', 'model', 'engine', 'transmission'], 'string'],
        ];
    }
} 