<?php
/*************************************************************************
 *
 *  CarSearch.php - Модель поиска по таблице CAR
 *
 *  
 *  V.1.0
 *  ML65 2021-08-07
 *************************************************************************/
/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */
/* @var $searchModel  \app\models\CarSearch */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;


$str = '';
// Получаем марку
if($searchModel->brand) $str = $searchModel->brand;
// Получаем модель
if($searchModel->model) {
    if($str) $str .= " ";
    $str .= $searchModel->model;
}
// Строка заголовка и титула страницы
$str = 'Продажа новых автомобилей '.$str.' в Санкт-Петербурге';

$this->title = $str;

echo Html::tag('h1', Html::encode($str));
// Подключаем модуль pjax
\yii\widgets\Pjax::begin();
// Подгружаем блок фильтра
echo $this->render('_search', ['model' => $searchModel]);
// Вызов виджета GridView
echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'id',
                'brand',
                'model',
                'engine',
                'transmission',
            ],
]);

\yii\widgets\Pjax::end();
