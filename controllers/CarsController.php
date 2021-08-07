<?php
/*************************************************************************
 *
 *  CarController.php - Контроллер приложения каталога автомобилей
 *
 *  
 *  V.1.0
 *  ML65 2021-08-07
 *************************************************************************/

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\Pagination;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Cars;
use app\models\CarsSearch;

class CarsController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new CarsSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel'  => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
