<?php
/* @var $this ResultadoController */
/* @var $model Resultado */

$this->breadcrumbs=array(
	'Resultados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Resultado', 'url'=>array('index')),
	array('label'=>'Manage Resultado', 'url'=>array('admin')),
);
?>

<h1>Create Resultado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>