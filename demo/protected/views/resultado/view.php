<?php
/* @var $this ResultadoController */
/* @var $model Resultado */

$this->breadcrumbs=array(
	'Resultados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Resultado', 'url'=>array('index')),
	array('label'=>'Create Resultado', 'url'=>array('create')),
	array('label'=>'Update Resultado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Resultado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Resultado', 'url'=>array('admin')),
);
?>

<h1>View Resultado #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lugar',
		'psicologico',
		'tecnica',
		'entrevista',
		'total',
		'idUsuario',
	),
)); ?>
