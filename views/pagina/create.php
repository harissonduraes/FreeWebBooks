<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pagina $model */

$this->title = Yii::t('app', 'Create Pagina');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Paginas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pagina-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
