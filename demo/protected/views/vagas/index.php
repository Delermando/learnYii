<?php
/* @var $this VagasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vagases',
);

$this->menu=array(
	array('label'=>'Create Vagas', 'url'=>array('create')),
	array('label'=>'Manage Vagas', 'url'=>array('admin')),
);
?>

<h1>Vagases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
