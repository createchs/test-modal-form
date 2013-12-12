<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'task-form',
    'enableAjaxValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
        'afterValidate'=>'js:afterValidate',
        'inputContainer' => '.form-group',
        'errorCssClass' => 'has-error',
        'successCssClass' => 'has-success',
        'validatingCssClass' => 'has-warning',
    ),
)); ?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Создать задачу</h4>
        </div>

        <div class="modal-body">
            <div class="form-group">
                <?php echo $form->labelEx($model,'title', ['class'=>'control-label']); ?>
                <?php echo $form->textField($model,'title', ['class'=>'form-control']); ?>
                <?php echo $form->error($model,'title', ['class'=>'help-block   ']); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model,'description', ['class'=>'control-label']); ?>
                <?php echo $form->textArea($model,'description', ['class'=>'form-control']); ?>
                <?php echo $form->error($model,'description', ['class'=>'help-block   ']); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model,'due_date', ['class'=>'control-label']); ?>
                <?php echo $form->dateField($model,'due_date', ['class'=>'form-control']); ?>
                <?php echo $form->error($model,'due_date', ['class'=>'help-block   ']); ?>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            <?php echo Html::SubmitButton('Сохранить', ['class'=>'btn btn-primary']); ?>
        </div>
    </div>
</div>

<?php $this->endWidget(); ?>

<?php
$script = <<<'SCRIPT'
var afterValidate = function(form, data, hasError) {
    if (!hasError) {
        $.post(form[0].action, form.serialize(), function(data) {
            $('#modalForm').modal('hide');
            $.fn.yiiListView.update('tasks-list');
        });
    }
    return false;
};
SCRIPT;

Yii::app()->clientScript->registerScript('afterValidate', $script, CClientScript::POS_END);
?>
