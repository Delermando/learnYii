<?php
/* @var $this ResultadoController */
/* @var $data Resultado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psicologico')); ?>:</b>
	<?php echo CHtml::encode($data->psicologico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tecnica')); ?>:</b>
	<?php echo CHtml::encode($data->tecnica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entrevista')); ?>:</b>
	<?php echo CHtml::encode($data->entrevista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>