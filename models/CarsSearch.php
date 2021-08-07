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

use app\models\Cars;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\base\Model;

class CarsSearch extends Cars
{
    const DEFAULT = 'default';

    public function search($params)
    {
        $query = static::find();

//        $this->load($params,"CarsSearch");
        $this->load($params);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ]
        ]);


        if (!$this->validate()) {
            return $dataProvider;
        }

//       $query->filterWhere(['LIKE','brand',$this->brand]);
//       $query->andFilterWhere(['LIKE', 'model', $this->model]);

        $query->filterWhere(['LIKE','brand',$this->brand]);
        $query->andFilterWhere(['LIKE', 'model', $this->model]);
        $query->andFilterWhere(['LIKE', 'engine', $this->engine]);
        $query->andFilterWhere(['LIKE', 'transmission', $this->transmission]);

        return $dataProvider;

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

   public function formName() {
	return '';
   }

}