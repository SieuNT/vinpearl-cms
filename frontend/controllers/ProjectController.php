<?php

namespace frontend\controllers;

use common\models\Project;

class ProjectController extends \yii\web\Controller
{
    public function actionView($slug)
    {
        $query = Project::find()->where(['slug' => $slug])->one();

        $view = 'view';
        if($query->slug == 'vinpearl-bai-dai') {
            $view = 'view-vinpearl-bai-dai';
        }
        return $this->render($view, [
            'model' => $query
        ]);
    }

}
