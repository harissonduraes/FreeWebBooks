<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pagina $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pagina-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'texto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'livro_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Livro::find()->all(), 'id', 'nome'))->label("Nome do Livro") ?>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
