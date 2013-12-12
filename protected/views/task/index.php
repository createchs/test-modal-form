<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php echo Html::link('<span class="glyphicon glyphicon-plus"></span> создать задачу', ['task/create'], ['class'=>'btn btn-default', 'data-toggle'=>'modal', 'data-target'=>'#modalForm']); ?>

            <?php $this->widget('zii.widgets.CListView', array(
                'id' => 'tasks-list',
                'dataProvider'=>$dataProvider,
                'itemView'=>'_view',
            )); ?>
        </div>
    </div>
</div>

<div id="modalForm" class="modal fade"></div>

<?php
$script = <<<'SCRIPT'
$('#modalForm').on('hidden.bs.modal', function () {
    $(this).removeData('bs.modal');
});
SCRIPT;

Yii::app()->clientScript->registerScript('modalForm', $script, CClientScript::POS_READY);
?>
