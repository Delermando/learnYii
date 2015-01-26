<?php
/* @var $this EstudosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estudoses',
);

$this->menu=array(
	array('label'=>'Create Estudos', 'url'=>array('create')),
	array('label'=>'Manage Estudos', 'url'=>array('admin')),
);
?>

<h1>Estudoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
