<?php
/* @var $this VagasController */
/* @var $model Vagas */

$this->breadcrumbs=array(
	'Vagases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Vagas', 'url'=>array('index')),
	array('label'=>'Create Vagas', 'url'=>array('create')),
	array('label'=>'Update Vagas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vagas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vagas', 'url'=>array('admin')),
);
?>

<h1>View Vagas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'descricao',
	),
)); ?>
