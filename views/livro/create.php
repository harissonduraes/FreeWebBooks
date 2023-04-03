<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Livro $model */

$this->title = Yii::t('app', 'Create Livro');
$this->params[''][] = ['label' => Yii::t('app', 'Livros'), 'url' => ['index']];
$this->params[''][] = $this->title;
?>
<div class="livro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
