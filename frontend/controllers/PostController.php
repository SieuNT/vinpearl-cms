<?php

namespace frontend\controllers;

use common\models\Post;
use yii\data\Pagination;

class PostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Post::find()->orderBy(['created_at' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionView($slug = null)
    {
        $query = Post::find()->where(['slug' => $slug])->one();
        return $this->render('view', [
            'model' => $query
        ]);
    }

}
