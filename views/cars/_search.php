<?php
/*************************************************************************
 *
 *  _search.php - модуль фильтра приложения каталога автомобилей
 *
 *  
 *  V.1.0
 *  ML65 2021-08-07
 *************************************************************************/
/* @var $this yii\web\View */
/* @var $model app\models\PostSearch */
/* @var $form0 yii\widgets\ActiveForm */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\web\View;

// Скрипт для формирования URL и редиректа с обновлением страницы
$js = "function redirectCar() {
    let brand = document.getElementById('brand').value;
    let model = document.getElementById('model').value;
    let engine = document.getElementById('engine').value;
    let transmission = document.getElementById('transmission').value;
    let url = '';
    let uri = '';
    url = '';
    if( brand.length > 0) url = '/' + brand;
    if( model.length > 0) {
      if(brand.length > 0) { 
        url = url + '/' + model;
      } else {
        uri = '?model=' + model;
      }
    } 
    if(engine.length >0) {
       if(uri.length > 0) {
           uri = '?'
       } else {
           uri = uri + '&';
       }
       uri = uri + 'engine=' + engine;
    }
    if(transmission.length >0) {
       if(uri.length > 0) {
           uri = '?'
       } else {
           uri = uri + '&';
       }
       uri = uri + 'transmission=' + transmission;
    }
    url = '/catalog' + url + uri ;
    alert('Ok!' + url );
    window.location.href = encodeURI(url);
}
";

// Регистрируем скрипт
$this->registerJs( $js, $position = view::POS_HEAD, $key = null );

?>

<div class="post-search">
<!--- Форма работающая без pjax на редиректе с обновлением страницы --->
    <?php $form0 = ActiveForm::begin([
        'options' => ['data' => ['pjax' => false ]],
        'action' => [Url::to()],
        'id' => 'CarFilter',
        'method' => 'get',
    ]); ?>

    <?= $form0->field($model, 'brand')->label('Марка')->dropdownList(
    $model->find()->select(['brand', 'brand'])->indexBy('brand')->column(),
    ['prompt'=>'Выберите марку',
    'onchange'=>'redirectCar()',
    'pjax' => false]) 
    ?>

    <?= $form0->field($model, 'model')->label('Модель')->dropdownList(
    $model->find()->select(['model', 'model'])->
    filterWhere(['LIKE','brand',$model->brand])->indexBy('model')->column(),
    ['prompt'=>'Выберите модель',
    'onchange'=>'redirectCar()',
    'pjax' => false]) ?>

    <?php ActiveForm::end(); ?>

<!--- Форма работающая на pjax без обновления страницы --->

    <?php $form = ActiveForm::begin([
        'options' => ['data' => ['pjax' => true ]],
        'action' => [Url::to()],
        'id' => 'CarFilter',
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'engine')->label('Тип двигателья')->dropdownList(
    $model->find()->select(['engine', 'engine'])->
    filterWhere(['LIKE','brand',$model->brand])->
    andFilterWhere(['LIKE','model',$model->model])->
    indexBy('engine')->column(),
    ['onchange'=>'this.form.submit()',
    'prompt'=>'Выберите тип двигателя',
    'pjax' => true])  ?>

    <?= $form->field($model, 'transmission')->label('Привод')->dropdownList(
    $model->find()->select(['transmission', 'transmission'])->
    filterWhere(['LIKE','brand',$model->brand])->
    andFilterWhere(['LIKE','model',$model->model])->
    andFilterWhere(['LIKE','engine',$model->engine])->
    indexBy('transmission')->column(),
    ['onchange'=>'this.form.submit()',
    'prompt'=>'Выберите привод',
    'pjax' => true]) ?>


    <div class="form-group">
        <!--- ?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ? --->
        <!--- ?= Html::resetButton('Сбросить', ['class' => 'btn btn-default', 'onclick' => 'this.form.reset()']) ? --->
    </div>


    <?php ActiveForm::end(); ?>
</div>