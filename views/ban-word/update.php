<?php

use yii\helpers\Html;
use yuncms\admin\widgets\Jarvis;

/* @var $this yii\web\View */
/* @var $model yuncms\admin\models\Banword */

$this->title = Yii::t('admin', 'Update Ban Word') . ': ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('admin', 'Manage Ban Word'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<section id="widget-grid">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ban-word-update">
            <?php Jarvis::begin([
                'editbutton' => false,
                'deletebutton' => false,
                'header' => Html::encode($this->title),
                'bodyToolbarActions' => [
                    [
                        'label' => Yii::t('admin', 'Manage Ban Word'),
                        'url' => ['/admin/ban-word/index'],
                    ],
                    [
                        'label' => Yii::t('admin', 'Create Ban Word'),
                        'url' => ['/admin/ban-word/create'],
                    ],
                ]
            ]); ?>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
            <?php Jarvis::end(); ?>
        </article>
    </div>
</section>