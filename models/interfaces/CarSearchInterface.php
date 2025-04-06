<?php

namespace app\models\interfaces;

use yii\data\ActiveDataProvider;

interface CarSearchInterface
{
    /**
     * Поиск автомобилей по параметрам
     * @param array $params Параметры поиска
     * @return ActiveDataProvider
     */
    public function search(array $params): ActiveDataProvider;
} 