<?php

namespace frontend\controllers;

use common\models\Fqa;

class FqaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($slug)
    {
        $query = Fqa::find()->where(['slug' => $slug])->one();
        return $this->render('view', [
            'model' => $query
        ]);
    }

}
