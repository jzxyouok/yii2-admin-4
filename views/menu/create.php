<?php

use backend\helpers\Html;
use backend\widgets\Jarvis;

/* @var \yii\web\View $this */
/* @var \common\models\AdminMenu $model */

$this->title = Yii::t('backend/menu', 'Create Menu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend/menu', 'Manage Menu'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="widget-grid">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php Jarvis::begin([
                //'noPadding' => true,
                'editbutton' => false,
                'deletebutton' => false,
                'header' => Html::encode($this->title),
                'bodyToolbarActions' => [
                    [
                        'label' => Yii::t('backend/menu', 'Manage Menu'),
                        'url' => ['/menu/index'],
                    ],
                    [
                        'label' => Yii::t('backend/menu', 'Create Menu'),
                        'url' => ['/menu/create'],
                    ],
                ]
            ]); ?>

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
            <?php Jarvis::end(); ?>
        </article>
    </div>
</section>