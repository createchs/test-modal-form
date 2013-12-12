<?php

class TaskController extends Controller
{
	public function actionCreate()
	{
		$model = new Task;

		$this->performAjaxValidation($model);

		if (isset($_POST['Task'])) {
			$model->attributes = $_POST['Task'];

			if ($model->save()) {
				Yii::app()->end();
			} else {
				throw new CHttpException(400, 'Ошибка валидации');
			}
		}

		$this->renderPartial('create', [
			'model'=>$model,
		], false, true);
	}

	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Task', [
			'criteria' => [
				'order' => 'ISNULL(due_date), STRCMP(\'0000-00-00\', due_date), due_date',
			],
			'pagination' => false,
		]);

		$this->render('index', [
			'dataProvider' => $dataProvider,
		]);
	}

	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'task-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}