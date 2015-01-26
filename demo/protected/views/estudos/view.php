<?php
/* @var $this EstudosController */
/* @var $model Estudos */

$this->breadcrumbs=array(
	'Estudoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Estudos', 'url'=>array('index')),
	array('label'=>'Create Estudos', 'url'=>array('create')),
	array('label'=>'Update Estudos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Estudos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estudos', 'url'=>array('admin')),
);
?>

<h1>View Estudos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'instituicao',
		'anoGraducao',
		'titulo',
		'idUsuario',
	),
)); ?>
