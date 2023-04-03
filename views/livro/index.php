<?php

use app\models\Livro;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\LivroSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Livros');
$this->params[''][] = '';
?>
<div class="livro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Adicionar Livro'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Adicionar Páginas'), ['pagina/create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <div class="row">
    <?php foreach ($dataProvider->getModels() as $livro): ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <?= Html::img($livro->imagemUrl, ['class' => 'card-img-top', 'alt' => $livro->nome]) ?>

                <div class="card-body">
                    <h5 class="card-title"><?= $livro->nome ?></h5>
                    <p class="card-text"><?= $livro->descricao ?></p>
                    <?= Html::a('Ler Livro Online', ['view', 'id' => $livro->id], ['class' => 'btn btn-warning']) ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    <!--<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome:ntext',
            'descricao:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Livro $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>-->

    <?php Pjax::end(); ?>

</div>
