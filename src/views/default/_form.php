<?php

use powerkernel\tinymce\TinyMce;
use yii\helpers\Html;
use yozh\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $Model common\models\InvestPlan */
/* @var $form yii\widgets\ActiveForm */

$attributes = $Model->attributes;

?>

<div class="invest-plan-form">
	
	<?php $form = ActiveForm::begin(); ?>
	
	<?php $fields = $form->fields( $Model,
		$Model instanceof \yozh\form\interfaces\AttributeActionListInterface
			? $Model->attributesEditList()
			: $Model->attributes(),
		[ 'print' => false, ]
	);
	
	/*
	$fields['body'] = $form->field( $Model, 'body' )->widget(
		TinyMce::className(),
		[
			'options' => [
				'id'   => 'editor',
				'rows' => 10,
			],
		]
	);
	*/
    
    foreach( $fields as $field ) {
        print $field;
    }

	?>

    <div class="form-group">
		<?= Html::submitButton( Yii::t( 'app', 'Save'), [ 'class' => 'btn btn-success' ] ) ?>
    </div>
	
	<?php ActiveForm::end(); ?>

</div>