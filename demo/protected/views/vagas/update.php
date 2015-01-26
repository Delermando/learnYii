<?php
/* @var $this VagasController */
/* @var $model Vagas */

$this->breadcrumbs=array(
	'Vagases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vagas', 'url'=>array('index')),
	array('label'=>'Create Vagas', 'url'=>array('create')),
	array('label'=>'View Vagas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vagas', 'url'=>array('admin')),
);
?>

<h1>Update Vagas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>