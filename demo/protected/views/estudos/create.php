<?php
/* @var $this EstudosController */
/* @var $model Estudos */

$this->breadcrumbs=array(
	'Estudoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estudos', 'url'=>array('index')),
	array('label'=>'Manage Estudos', 'url'=>array('admin')),
);
?>

<h1>Create Estudos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>