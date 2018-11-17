<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

include __DIR__ . '/_header.php';

$columns = array_merge(
	method_exists( $Model, 'attributesIndexList' )
		? $Model->attributesIndexList()
		: array_keys( $Model->attributes ),
	[
		[
			'class'    => yii\grid\ActionColumn::class,
			'header'   => Yii::t( 'app', 'Actions' ),
			'template' => '{view}{update}{delete}',
		],
	] );

/*
$columns['enabled'] = [
	'attribute' => 'enabled',
	'class'     => \yozh\form\components\ActiveBooleanColumn::class,
];
*/

?>
<div class="<?= "$moduleId $modelId-$actionId" ?>">

    <h1><?= Html::encode( $this->title ) ?></h1>
	<?php Pjax::begin(); ?>
	
	<?php // echo $this->render('_search', ['Model' => $searchModel]); ?>

    <p>
		<?= Html::a( Yii::t( 'app', 'Create ' ) . $modelTitle, [ 'create' ], [ 'class' => 'btn btn-primary' ] ) ?>
    </p>
	
	<?= GridView::widget( [
		'dataProvider' => $dataProvider,
		//'filterModel' => $searchModel,
		'tableOptions' => [ 'class' => 'table table-striped table-hover', ],
		
		'columns' => $columns,
	] ); ?>
	
	<?php Pjax::end(); ?>

</div>
