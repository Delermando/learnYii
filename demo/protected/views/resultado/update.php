<?php
/* @var $this ResultadoController */
/* @var $model Resultado */

$this->breadcrumbs=array(
	'Resultados'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Resultado', 'url'=>array('index')),
	array('label'=>'Create Resultado', 'url'=>array('create')),
	array('label'=>'View Resultado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Resultado', 'url'=>array('admin')),
);
?>

<h1>Update Resultado <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>