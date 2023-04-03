<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Livro $model */

$this->title = $model->nome;
$this->params[''][] = ['label' => Yii::t('app', 'Livros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="livro-view">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <div class="row">
        <!--<div class="col-md-4">
            <?= Html::img($model->imagemUrl, ['class' => 'img-responsive']) ?>
        </div>-->
        <div>
        <div>
    <p><?= $paginas[$paginaAtual - 1]->texto ?></p>
    <?php if ($paginaAtual > 1): ?>
        <a href="<?= Yii::$app->urlManager->createUrl(['livro/view', 'id' => $livro->id, 'paginaAtual' => $paginaAtual - 1]) ?>">
            Página anterior
        </a>
    <?php endif; ?>
    <?php if ($paginaAtual < count($paginas)): ?>
        <a  href=" <?= Yii::$app->urlManager->createUrl(['livro/view', 'id' => $livro->id, 'paginaAtual' => $paginaAtual + 1]) ?>" class="float-end">
            Próxima página
        </a>
    <?php endif; ?>
</div>
    <!--</div>
        <div class="col-md-8">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    
                    [
                        'attribute' => 'paginas.texto',
                        'format' => 'raw',
                    ],
                ],
            ]) ?>
        </div>
    </div>-->

    <!--<p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome:ntext',
            'descricao:ntext',
            'imagemUrl:ntext',
        ],
    ]) ?>

</div>-->
