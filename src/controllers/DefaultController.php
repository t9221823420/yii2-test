<?php

namespace yozh\test\controllers;

use yii\base\Model;
use yii\db\ActiveRecord;
use yozh\crud\traits\CRUDControllerTrait;
use yozh\test\actions\IndexAction;
use yozh\test\models\BaseActiveRecord;
use yozh\test\AssetBundle;
use yozh\base\controllers\DefaultController as Controller;


class DefaultController extends Controller
{
	use CRUDControllerTrait;
	
	public function actions()
	{
		return [
			'index' => [
				'class' => IndexAction::class,
			],
		];
	}
	
	public static function defaultModelClass()
	{
		return BaseActiveRecord::className();
	}
	
	public function actionIndex()
	{
		
		$args = func_get_args();
		
		$this->layout = 'tests';
		
		return $this->render( 'tests', [

		] );
		
		//AssetBundle::register( $this->view );
		return $this->traitActionIndex();
	}
	
	public function actionTestAjax()
	{
		return true;
	}
	
	public function actionEdit( $id = null )
	{
		$className =  EmailAccount::class;
		
		/**
		 * @var ActiveRecord $Model
		 */
		if ( (int)$id ){
			$Model = $className::findOne( (int)$id  );
		}
		else{
			$Model = new $className;
		}
	
		if ( $Model instanceof ActiveRecord){
			
			if( $Model->load( Yii::$app->request->post() ) && $Model->save() ) {
				return $this->redirect( Url::to( [ 'index' ] ) );
			}
			
			return $this->render( $Model->isNewRecord ? 'create' : 'update', [
				'Model' => $Model,
			] );
			
		}
		
		throw new \yii\web\NotFoundHttpException();
		
	}
	
	
	/**
	 * Updates an existing PaymentMethod model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionUpdate( $id )
	{
		$Model = $this->findModel( $id );
		
		if( $Model->load( Yii::$app->request->post() ) && $Model->save() ) {
			return $this->redirect( Url::to( [ '/payment-method' ] ) );
		}
		
		return $this->render( 'update', [
			'Model' => $Model,
		] );
	}
}
