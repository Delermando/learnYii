<?php
/* @var $this EstudosController */
/* @var $model Estudos */

$this->breadcrumbs=array(
	'Estudoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudos', 'url'=>array('index')),
	array('label'=>'Create Estudos', 'url'=>array('create')),
	array('label'=>'View Estudos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Estudos', 'url'=>array('admin')),
);
?>

<h1>Update Estudos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>