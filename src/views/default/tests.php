<?php
/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 10.05.2018
 * Time: 10:52
 */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\Html as Bootstrap;
use yii\widgets\ActiveForm;
use \yozh\widget\widgets\ActiveButton;

$script = <<< JS

    function success(){
    	alert('success');
    }

    function fail(){
    	alert('fail');
    }
JS;

$this->registerJs( $script, $this::POS_END );

$Model = new \yii\base\DynamicModel( [
	'attr1' => 'attr1-value',
	'bar'   => 'attr2-value',
] );

?>

<?= ActiveButton::widget( [
	'action' => Url::to( [ 'test-ajax' ] ),
	'data'   => [
		'foo' => 'foo-val',
		'bar' => 'bar-val',
	],
	'done'   => 'success',
] ); ?>

<?= ActiveButton::widget( [
	'action'      => Url::to( [ 'test-ajax' ] ),
	'model'       => $Model,
	'data'        => function() {
		return [
			'foo' => 'foo-val1',
			'bar' => 'bar-val1',
		];
	},
	'done'        => 'success',
	'fail'        => function() {
		return 'fail';
	},
	'method'      => 'post',
	'tagName'     => 'div',
	'options'     => [
		'class' => 'btn btn-success',
	],
	'label'       => Bootstrap::icon( 'star' ),
	'encodeLabel' => false,
] ); ?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field( $Model, 'attr1' )->widget( ActiveButton::class, [
	'action' => Url::to( [ 'test-ajax' ] ),
	'data'   => function() {
		return [
			'foo' => 'foo-val1',
			'bar' => 'bar-val1',
		];
	},
	'done'   => 'success',
	'fail'   => function() {
		return 'fail';
	},
] )
; ?>

<?php ActiveForm::end(); ?>
