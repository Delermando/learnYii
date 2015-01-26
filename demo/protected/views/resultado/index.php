<?php
/* @var $this ResultadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Resultados',
);

$this->menu=array(
	array('label'=>'Create Resultado', 'url'=>array('create')),
	array('label'=>'Manage Resultado', 'url'=>array('admin')),
);
?>

<h1>Resultados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
