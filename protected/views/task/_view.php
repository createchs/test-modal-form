<div class="panel panel-info">
	<div class="panel-heading">
		<h2 class="panel-title">
			<strong><?php echo Html::encode($data->title); ?></strong>

			<?php if ($data->hasDueDate()): ?>
			<small> выполнить до <?php echo Html::encode($data->dueDateText); ?></small>
			<?php endif ?>
		</h2>
	</div>

	<div class="panel-body">
		<?php if (!$data->description): ?>
			Описания нет
		<?php else: ?>
			<?php echo Html::encode($data->description); ?>
		<?php endif ?>
	</div>
</div>
