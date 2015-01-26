<?php
/* @var $this VagasController */
/* @var $model Vagas */

$this->breadcrumbs=array(
	'Vagases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vagas', 'url'=>array('index')),
	array('label'=>'Manage Vagas', 'url'=>array('admin')),
);
?>

<h1>Create Vagas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>