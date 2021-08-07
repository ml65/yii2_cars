<?php

namespace app\models\search;

use app\models\Cars;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

class CarsSearch extends Cars
{

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(), [
            ['id','integer'],
            ['username','string'],
        ]);
    }


    public function search($params)
    {
        $query = static::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

       $query->filterWhere(['id' => $this->id]);
       $query->andFilterWhere(['LIKE', 'username', $this->username]);

        return $dataProvider;

    }
}