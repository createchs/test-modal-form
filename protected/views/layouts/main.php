<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Тестовое задание</title>
</head>
<body>

<div class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Тестовое задание</a>
    </div>
  </div>
</div>

<?php echo $content; ?>

</body>
</html>

<?php
Yii::app()->clientScript->scriptMap['jquery.js'] = '/src/vendor/jquery/jquery.js';

Yii::app()->clientScript
    ->registerCssFile('/src/vendor/bootstrap/dist/css/bootstrap.css')
    ->registerScriptFile('jquery.js')
    ->registerScriptFile('/src/vendor/bootstrap/dist/js/bootstrap.js');
?>